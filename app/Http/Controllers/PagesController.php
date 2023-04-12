<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonDetail;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user_dashboard()
    {
        $user= PersonDetail::where('user_id',auth::user()->id)->get();
        
        return view('User.dashboard',compact('user'));
    }

    public function admin_dashboard()
    {
        return view('Admin.dashboard');
    }

    public function add_user(Request $request)
    {
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $location=$request->location;
        $user_profile=$request->file('photo');
        $PhotoPath ='profile';
        $user_profile->move($PhotoPath, $user_profile->getClientOriginalName());
        $photoname=$user_profile->getClientOriginalName();
        $data=[
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'location'=>$location,
        'user_id'=>Auth::user()->id,
        'photo'=>$photoname,
        ];
      
            PersonDetail::create($data);
            return redirect()->back();
       
    }



    public function destroy_user($id)
    {

        PersonDetail::find($id)->delete();
        return redirect()->back();
    }

    public function update_user(Request $request)
    {
        $id=$request->user_id;
        if ($request->hasFile('photo')) {
            $first_name=$request->first_name;
            $last_name=$request->last_name;
            $location=$request->location;
            $user_profile=$request->file('photo');
            $PhotoPath ='profile';
            $user_profile->move($PhotoPath, $user_profile->getClientOriginalName());
            $photoname=$user_profile->getClientOriginalName();
            $data=[
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'location'=>$location,
            'user_id'=>Auth::user()->id,
            'photo'=>$photoname,
            ];

            PersonDetail::find($id)->update($data);
            return redirect()->back();
        } else {
            $first_name=$request->first_name;
            $last_name=$request->last_name;
            $location=$request->location;
            $data=[
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'location'=>$location,
            'user_id'=>Auth::user()->id,
            ];

            PersonDetail::find($id)->update($data);
            return redirect()->back();
        }

    }
  public function manage_user()
  {
     $users= PersonDetail::where('user_id','!=',auth::user()->id)->get();
      return view('Admin.manage_user',compact('users'));
  }
  public function changepassword(Request $request)
  {
      $rules=array(
 
          'current_password' => ['required', 'string'],
          'password' => ['required', 'string', 'min:8',  'confirmed'],
 
         );
      $error=Validator::make($request->all(), $rules);
      if ($error->fails()) {
          return response()->json(['error'=>$error->errors()->all()]);
      } else {
          $current_password=$request->input('current_password');
          $data=[
          'password'=>$password=Hash::make($request->input('password'))
          ];
          if (Hash::check($current_password, Auth::user()->password)) {
              User::find(Auth::user()->id)->update($data);
              return redirect()->back();
          } else {
            return redirect()->back();
          }
      }
  }
  public function updateprofile(Request $request)
  {
      $username=$request->name;
      $email=$request->email;
 
      User::where('id', Auth::user()->id)->update(['name'=>$username,'email'=>$email]);
      return redirect()->back();
  }
}

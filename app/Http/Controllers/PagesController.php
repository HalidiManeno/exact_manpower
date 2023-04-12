<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonDetail;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function user_dashboard()
    {
        $user= PersonDetail::all(); 
        return view('Admin.dashboard', compact('user'));
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

    public function get_user()
    {

    }

    public function destroy_user()
    {
        return "destroy";
    }

    public function update_user()
    {
        return "update";
    }
    public function home()
    {
        return view('home');
    }
}

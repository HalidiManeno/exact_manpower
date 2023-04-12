<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function redirectTo()
    {
        $role=Auth::user()->role_name;

        switch ($role) {
            case 'Admin':
                $this->redirectTo = 'dashboard';
                return  $this->redirectTo;
                break;
            case 'User':
                $this->redirectTo='normaluser';
                return  $this->redirectTo;
                break;
            default:
                $this->redirectTo='home';
                return $this->redirectTo;
                break;
        }
    }
    public function index()
    {
        return view('auth.login');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class adminPanelController extends Controller
{
    public function __construct(){
        $this->middleware("guest")->except([
            'logout','homePage'
        ]);
    }
    //
    public function dashboardAdmin(){
        return view("admin.dashboard");
    }
    public function profile(){
        return view("admin.profile");
    }
    public function addAdmin(){
        return view("admin.addAdmin");
    }
    public function login(){
        return view('loginAdmin');
    }
    public function registerAdmin(Request $request){
    
    }
    public function AdminAuth(Request $request){
            $credentials = $request->validate([
                "email"=>"email|required",
                "password"=>"required"
            ]);
            if(Auth::guard("admin")->attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->route('dashboard')->withSuccess("login successfull");
            }else{
                return back()->withErrors([
                    'email' =>"You provided credentials do not match in our record"
                 ])->onlyInput('email');
            }

    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

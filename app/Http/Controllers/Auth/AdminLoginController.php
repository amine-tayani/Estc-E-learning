<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){

       $this->validate($request, [
         'username' => 'required', 
         'password' => 'required'
       ]);
       
       if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect()->intended(route('admin.dashboard'));
      }
      
       return redirect()->back()->withInput($request->only('username'));
    }


}

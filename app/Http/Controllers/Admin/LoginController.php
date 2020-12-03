<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request){

        // make Validation in Request

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin') -> attempt(['email' => $request->input("email") ,'password' => $request->input("password")]))
            // notify()->success('تم الدخول بنجاح');
            return redirect()->route('admin.dashboard');
            ///
        return redirect()->back()->with(['error' =>'هنالك خطا فى البيانات']);
    }

    public function save(){

        $admin = new Admin;
        $admin-> name = "abdo";
        $admin-> password = bcrypt("12345");
        $admin-> email = "abdo@yahoo.com";
        $admin-> save();
    }
}

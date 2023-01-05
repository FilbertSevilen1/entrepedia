<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function loginHandler(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'min:8|required',
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $remember_me = false;
        if($request->remember){
            $remember_me = true;
        }
        if(Auth::attempt($credentials, $remember_me)){
            return redirect('/');
        }
        $error = new MessageBag(['credential' => 'Email/Password combination is invalid']);

        return redirect()->back()->withInput()->withErrors($error);
    }

    public function registerPage() {
        return view('register');
    }

    public function registerHandler(Request $request){
        $request->validate([
            'name' => 'min:5',
            'email' => 'required|email|unique:authors',
            'password' => 'min:8|required|alpha_dash|required_with:Cpassword|same:Cpassword',
            'Cpassword' => 'min:8',
            'gender' => 'required',
            'place' => 'required',
            'dob' => 'required',
        ]);

        DB::table('authors')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'dob' => $request->place.", ".$request->dob
        ]);
        return redirect()->back()->with('message', 'User successfully registered');
    }

    public function logout(Request $request) {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}

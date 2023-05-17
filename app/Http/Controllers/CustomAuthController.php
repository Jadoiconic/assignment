<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\DB;
//use Session;
class CustomAuthController extends Controller
{
     //Login function
    public function login(){
        return view("auth.Login");
    }
    public function registration(){ 
        return view("auth.Registration");
    }
    //Register validated user info function
    function registerUser(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required | email | unique:users',
                'password' => 'required | min:8 | max:12'
            ]
        );
        //Using model 
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user -> password = Hash::make($request->password); //Encrypting password using hash facades
        $res = $user->save();
          
         if($res){
            return back()->with('success', 'You have successfully registered'); //Self redirection
         
        }
         else{
            return back()->with('fail', 'Something went wrong'); //Self redirection to the lo
         } 

    }
    //Actual User login auth function
    public function loginUser(Request $request){
        $request->validate(
            [
                'email' => 'required | email',
                'password' => 'required'
            ]
        );

       $user = Users::where('email', '=', $request->email)->first(); // Verfying whether the entered email is matching the one stored in database
        if($user){
            //code to verify where the entered password is matching with the one in database
            if(hash::check($request -> password, $user->password)){
                
                $request -> session() -> put('loginId', $user->id); //Saving Login Id into session
                $request -> session() -> put('loginName', $user->name); //Saving User name into session
                return redirect('/dashboard'); // Redirect to admin dashboard after successfull login
            }
            
            else{
                return back()-> with('fail', 'Invalid password'); //Self redirection with failure message
            }
        }
        else{
            return back()-> with('fail', 'The user is not yet registered'); //Self redirection with failure message
        }
    } 

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Users::where('id', '=', Session::get('loginId'))->first();
        }
        return view("/dashboard")-> with('data', $data);       
    }
//Function to destroy sessions and return the user to the login page
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
    }
}

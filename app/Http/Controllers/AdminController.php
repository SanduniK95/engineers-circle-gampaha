<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth ;
use Session;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data=$request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
               // echo "Login Suceess";die;
               Session::put('adminSession',$data['email']);
               return redirect::action('AdminController@dashboard');
            }else{
               // echo "Failed";die;
                return redirect('/admin')->with('flash_message_error','Invalid Username and Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
       // echo "test";die;
       if(Session::has('adminSession')){

      }else{
           return redirect('/admin')->with('flash_message_error','Please login to access');
         }
        return view('layouts.admin-dashboard');
    
    }


    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Sucessfully');
    }
}

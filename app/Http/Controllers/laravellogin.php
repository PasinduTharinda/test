<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class laravellogin extends Controller
{


    public function add(Request $req){
        $username = $req->input('name');
        $password = $req->input('password');

        $checkLogin = DB::table('loginform')->where(['username'=> $username,'password'=> $password])->get();
        if(count( $checkLogin)>0){
            return view('dashboad');
            //echo "login successful";
           // return back()->with('success','data have been saved');

           

        }else
        {
            //echo "login faild";
            //echo $username;
            return back()->with('fail','something wrong');
        }
    }

    //function add(Request $request){
    
       //$request->validate([
           
        //'name' =>'required',
        //'password'=>'required',

      // ]);

      // $query = DB::table('loginform')->insert([

        // 'username'=>$request->input('name'),
        // 'password'=>$request->input('password'),


      // ]);

       //if($query){
          // return back()->with('success','data have been saved');
      // }else{
         //  return back()->with('fail','something wrong');
      // }
   // }


   

    
}

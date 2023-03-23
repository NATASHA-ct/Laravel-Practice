<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import db
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    //function
 public function index(){

        echo "<br>";
        echo  "<br>";
    
        echo '<h2>List of Users</h2> ';
        
        echo "<br>";
        echo  "<br>";
      return DB::select('select * from users ');





        // // returning an api
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA'
        // ]);

        // //second way of returning an api
        // return ['name'=>'tascha','age'=>25];

        // //return a view
        // return view('name',['infor'=> $user]);
    }


    // public function getData(Request $req){

    //     //function to validate inputs
    //     $req->validate(
    //         //required with min value
    //             [
    //                 'username'=>'required | min:2',
    //                 'password'=>'required | min:3'
    //             ]);   
     
    //    //return "this is form data of log in user from controller"
   
    //    return $req->input();
    // }
}


// $req is likely an instance of the Illuminate\Http\Request class in Laravel, which is a PHP web application framework. The Request class represents an HTTP request and provides methods to access its data, such as query parameters, form data, and uploaded files.

// validate() is a method provided by Laravel's validation system that is used to validate form data submitted through an HTTP request. When called on a Request instance, the validate() method automatically validates the incoming request data based on a set of defined validation rules.
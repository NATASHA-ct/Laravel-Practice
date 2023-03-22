<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //function
 public function index($user){
        echo 'im users ';
        echo $user;
    }
}

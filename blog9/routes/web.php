<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');

    //return redirect('about')
});

// shortcut to writing the route
Route::view('about', "about");

// // passing data with routing
// Route::get('/{data}', function ($data) {
//     echo $data;
//     // using data in the view
//     return view('name',['infor'=> $data]);
// });

// using controller
Route::get('users/{user}', [Users::class, "index"]);
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
Route::get('/', function () {
    return view('home');
});


Route::get('users', [Users::class, "index"]);































































// Route::get('/', function () {
//     return view('hello');
// });

// Route::get('/', function () {
//     return view('hello');
// });


// Route::get('/welcome', function () {
//     return view('welcome');

//     //return redirect('about')
// });


// passing data with routing
// Route::get('/{data}', function ($data) {
//     echo $data;
//     // using data in the view
//     return view('name',['infor'=> $data]);
// });

// // using controller
// Route::get('users/{user}', [Users::class, "index"]);

// // using controller
// Route::post('users', [Users::class, "getData"]);
// Route::view('login', "users");

//

 // using global middleware
// Route::view('noaccess', "noaccess");

// // using middleware group
// Route::view('banned', "banned");

// Route::group(['middleware' =>[ "protectedPage"]], function(){

//     // the route where I want the middleware to be applied, here its the login page that is using the user view
//     Route::view('login', "users");

// });

// // using route middleware
// Route::view('restricted', "restricted");

// // applying route middleware to the about route

// // shortcut to writing the route
// Route::view('about', "about")->middleware('restrictedPage');

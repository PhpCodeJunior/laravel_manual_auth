<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/reg', function () {
    return view('pages.reg');
});
Route::resource("pages","user_controller");
Route::resource("pages","login_controller");
Route::get('/logout',function(){
    Auth::logout();
    return redirect("pages.login");
})->middleware("auth");


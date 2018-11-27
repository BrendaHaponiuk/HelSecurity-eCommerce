<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/plantilla", function() {
  return view('plantilla');
});
Route::get("/register", function() {
  return view('register');
});
Route::post("/register", function() {
  return view('user');
});
Route::get("/login", function() {
  return  "login";
});
Route::get("/producto{id}", function($id) {
  $vac = compact('id');
  return  view("producto", $vac);
});




Auth::routes();

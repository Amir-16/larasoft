<?php

use Illuminate\Support\Facades\Route;


//dynamically data pass

//Route::get('about/{v}/{contact}', function ($vq,$c) {
  //  $name='Amir';
    //return view('about', ['myname'=>$name,'q'=>$vq,'contact'=>$c]);

    //key=>value pair
//});

Route::get('employee-add','EmployeeController@add');

Route::post('store-employee','EmployeeController@store');

Route::get('employees','EmployeeController@all');

Route::get('edit-employee/{id}','EmployeeController@edit');

Route::post('update-employee/{id}','EmployeeController@update');

Route::get('delete-employee/{id}','EmployeeController@delete');

//authentication

Route::get('login','AuthController@login');

Route::post('loginstore','AuthController@loginstore');

Route::get('/index',function (){
    return view('front-end/index');

});
Route::get('/contact',function (){
    return view('front-end/contact');

});
Route::get('/about',function(){
    return view('front-end/about');

});
Route::get('/services',function(){
    return view('front-end/services');

});
Route::get('/', function () {
    return view('home.welcome');
});
Route::get('/dashboard/tables', function () {
    return view('dashboard/tables');
});
Route::get('/dashboard/index', function () {
    return view('dashboard/index');
});
//show seeder file

Route::get('students','StudentController@all');

//upload Image

Route::get('upload','UploadController@index');
Route::post('storeimage','UploadController@store');

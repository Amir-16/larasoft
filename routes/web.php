<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.welcome');
});


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

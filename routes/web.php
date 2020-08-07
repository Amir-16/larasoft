<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('about/{v}', function ($vq) {
    $name='Amir';
    return view('about',['myname'=>$name,'q'=>$vq]); //key=>value pair
});

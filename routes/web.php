<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('skills', function () {

    $data = ['Laravel', 'PHP', 'Vue JS', 'RESTful API', 'MySQL', 'CSS', 'Bootstrap', 'HTML'];

    return $data;
});

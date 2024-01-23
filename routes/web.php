<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/counter', Counter::class);    //agregamos esto en una de los cuartos o quintos pasos

Route::get('/', function () {
    return view('welcome');
});

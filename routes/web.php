<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});
Route::get('/templete-1', function () {
    return view('web.templete_web.templete1');
});

<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('/admin/template');
});

Route::get('/users', function () {
    return view('/admin/page/users');
});


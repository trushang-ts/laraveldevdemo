<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('/admin/template');
});



Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'admin'], function () {
    
    
    Route::get('/', function () {
        return view('/admin/page/users');
    });

    Route::get('/users', function () {
        return view('/admin/page/users');
    });

    Route::get('/employee/add', function () {
        return view('/admin/page/employee/add');
    });

    Route::get('/employee/index',"EmployeeController@index");
    Route::post('/employee/storeEmployee',"EmployeeController@storeEmployee");

});
<?php

Route::get('/', function () {
    return view('welcome');
});


//Auth::routes();

Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'admin', 'middleware' => 'admin'], function () {
    
    // \DB::listen(function($sql) {
    //     \Log::info($sql->sql);
    //     \Log::info($sql->bindings);
    //     \Log::info($sql->time);
    // });

    Route::post('/doLogin',"Auth\LoginController@adminLogin");
    Route::get('/dashboard',"EmployeeController@dashboard");

    Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
    
    Route::get('/', function () {
        return view('/admin/page/users');
    });

    Route::get('/login', function () {
        return view('/admin/page/login');
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
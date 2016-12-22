<?php

Route::group(array('module' => 'Backend', 'namespace' => 'App\Modules\Backend\Controllers'), function() {

    // Route::resource('backend', 'BackendController');
    Route::group(array( 'prefix' => 'backend'), function() {
    	Route::get('/', 'BackendController@index');
    	Route::get('apps', 'AppController@index');
    	Route::get('app/create', 'AppController@create');
    	Route::post('app/store', 'AppController@store');
    	Route::get('app/show/{id}', 'AppController@show');
    	Route::get('app/edit/{id}', 'AppController@edit');
    	Route::post('app/update/{id}', 'AppController@update');
    });
    
});	
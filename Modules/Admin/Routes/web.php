<?php

use \Modules\Admin\Http\Middleware\Authenticate;

Route::name('admin.')->prefix('admin')->group(function() {

    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@auth');

    Route::group(['middleware' => Authenticate::class], function(){
        Route::get('/', 'AdminController@index')->name('main');

        Route::name('pages.')->prefix('pages')->group(function() {
            Route::get('/', 'PageController@index')->name('main');
            Route::get('/new/', 'PageController@create')->name('create');
            Route::post('/new/', 'PageController@add');
            Route::get('/edit/{id}', 'PageController@edit')->name('edit');
            Route::post('/edit/{id}', 'PageController@update');
            Route::get('/delete/{id}', 'PageController@delete')->name('delete');
        });

        Route::name('content-groups.')->prefix('content-groups')->group(function() {
            Route::get('/', 'ContentGroupsController@index')->name('main');
            Route::get('/new/', 'ContentGroupsController@create')->name('create');
            Route::post('/new/', 'ContentGroupsController@add');
        });
    });
});

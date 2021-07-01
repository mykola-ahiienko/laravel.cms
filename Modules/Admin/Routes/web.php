<?php


Route::name('admin.')->prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('main');

    Route::name('pages.')->prefix('pages')->group(function() {
        Route::get('/', 'PageController@index')->name('main');
        Route::get('/create/', 'PageController@create')->name('create');
        Route::post('/create/', 'PageController@add');
    });

});

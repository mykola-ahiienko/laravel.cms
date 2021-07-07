<?php


Route::name('admin.')->prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('main');

    Route::name('pages.')->prefix('pages')->group(function() {
        Route::get('/', 'PageController@index')->name('main');
        Route::get('/new/', 'PageController@create')->name('create');
        Route::post('/new/', 'PageController@add');
        Route::get('/edit/{id}', 'PageController@edit')->name('edit');
        Route::post('/edit/{id}', 'PageController@update');
    });

});

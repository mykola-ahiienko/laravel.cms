<?php


Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
});

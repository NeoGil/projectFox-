<?php

Route::group(['prefix' => 'galleries', 'middleware' => []], function () {
    Route::get('/', 'GalleryController@index')->name('galleries.index');
    Route::get('/create', 'GalleryController@create')->name('galleries.create');
    Route::post('/', 'GalleryController@store')->name('galleries.store');
    Route::get('/{gallery}', 'GalleryController@show')->name('galleries.read');
    Route::get('/edit/{gallery}', 'GalleryController@edit')->name('galleries.edit');
    Route::put('/{gallery}', 'GalleryController@update')->name('galleries.update');
    Route::delete('/{gallery}', 'GalleryController@destroy')->name('galleries.delete');
});
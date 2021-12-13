<?php

Route::group(['prefix' => 'galleries', 'middleware' => []], function () {
    Route::get('/', 'Api\GalleryController@index')->name('api.galleries.index');
    Route::post('/', 'Api\GalleryController@store')->name('api.galleries.store');
    Route::get('/{gallery}', 'Api\GalleryController@show')->name('api.galleries.read');
    Route::put('/{gallery}', 'Api\GalleryController@update')->name('api.galleries.update');
    Route::delete('/{gallery}', 'Api\GalleryController@destroy')->name('api.galleries.delete');
});
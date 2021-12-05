<?php

Route::group(['prefix' => 'galleries', 'middleware' => []], function () {
    Route::get('/', 'Api\GalleryController@index')->name('api.galleries.index');
    Route::get('/{gallery}', 'Api\GalleryController@show')->name('api.galleries.read');
});

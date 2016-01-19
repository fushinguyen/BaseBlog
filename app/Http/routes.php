<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'BlogsController@getIndex');

    Route::controller('blogs', 'BlogsController');

    Route::controller('/', 'AuthController');

    // Route::controller('/', 'BlogsController');

    // Route::controller('blogs', 'BlogsController');
});

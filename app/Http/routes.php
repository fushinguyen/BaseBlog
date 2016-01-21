<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'BlogsController@getIndex');

    Route::controller('blogs', 'BlogsController');

    // Route::controller('manager', 'AboutController');

    Route::controller('/', 'AuthController');

    // Route::controller('/', 'BlogsController');

    // Route::controller('blogs', 'BlogsController');
});

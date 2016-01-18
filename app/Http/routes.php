<?php
use App\models\BlogPost;

/**TEST**/
Route::get('/ko', function () {
    return view('ko');
});

/**index**/
Route::get('/', 'BlogsController@getIndex');

Route::get('home', 'BlogsController@getIndex');

/**blog**/
Route::controller('blogs','BlogsController');

// Authentication routes...
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**Author**/
Route::resource('about','AboutController');

Route::get('/contact',function(){
  return view('blog.contact');
});



// Route::group(['middleware' => ['web']], function () {
//     //
// });

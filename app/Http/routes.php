<?php

/**TEST**/
Route::get('/ko', function () {
    return view('ko');
});

/**index**/
Route::get('/', function () {
    return view('blog.detail');
});

Route::get('home',function(){
  return view('home');
});

/**authentication**/
Route::get('/auth/login',function(){
  return view('auth.login');
});

Route::get('/auth/register',function(){
  return view('auth.register');
});

/**blog**/
Route::resource('blogs','BlogsController');
// Route::controller('/blogs','BlogController');
//
// Route::get('/blog',function(){
//   return view('blog.index');
// });
//
// Route::get('/blog/create',function(){
//   return view('blog.create');
// });
//
// Route::get('/blog/delete',function(){
//   return view('blog.delete');
// });
//
// Route::get('/blog/edit',function(){
//   return view('blog.edit');
// });
//
// Route::get('/blog/detail',function(){
//   return view('blog.detail');
// });

/**Author**/
Route::resource('about','AboutController');

Route::get('/contact',function(){
  return view('blog.contact');
});



// Route::group(['middleware' => ['web']], function () {
//     //
// });

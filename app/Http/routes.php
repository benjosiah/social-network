<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::group(['middleware' =>['web']], function(){

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::post('/signup', [ 
    'uses'=> 'UsersControllers@PostSignUp',
    'as' => 'signup'

]);
Route::post('/signin', [ 
    'uses'=> 'UsersControllers@PostSignIn',
    'as' => 'signin'

]);
Route::get('/dashboard', [ 
    'uses'=> 'PostController@Getdashboard',
    'as' => 'dashboard',
    'middleware'=> 'auth'

]);

Route::post('/createpost', [ 
    'uses'=> 'PostController@postCreatePoste',
    'as' => 'createpost',
    'middleware'=> 'auth'

]);
Route::get('/delete.post/{post_id}', [ 
    'uses'=> 'PostController@GetPostDelete',
    'as' => 'delete.post',
    'middleware'=> 'auth'

]);
Route::get('/logout.user', [ 
    'uses'=> 'usersControllers@GetLogout',
    'as' => 'logout.user',
    'middleware'=> 'auth'
]);
Route::get('/editpost/{post_id}', [ 
    'uses'=> 'PostController@GetPostEdit',
    'as' => 'editpost',
    'middleware'=> 'auth'
]);
Route::post('/edit.post/{post_id}', [ 
    'uses'=> 'PostController@postEditPost',
    'as' => 'edit.post',
    'middleware'=> 'auth'
]);
Route::get('/account', [ 
    'uses'=> 'usersControllers@GetAccount',
    'as' => 'account',
    'middleware'=> 'auth'
]);
Route::post('/account.save', [ 
    'uses'=> 'usersControllers@UpdateAccount',
    'as' => 'account.save',
    'middleware'=> 'auth'

]);
Route::get('/account.image/{filename}', [ 
    'uses'=> 'usersControllers@Getimage',
    'as' => 'image',
    'middleware'=> 'auth'
]);
Route::get('/like/{post_id}', [ 
    'uses'=> 'PostController@PostLikePost',
    'as' => 'like',
    'middleware'=> 'auth'
]);
Route::get('/getlike/{post_id}', [ 
    'uses'=> 'PostController@Getlike',
    'as' => 'getlike',
    'middleware'=> 'auth'
]);
Route::get('/contacts', [ 
    'uses'=> 'usersControllers@Contact',
    'as' => 'contacts',
    'middleware'=> 'auth'
]);
Route::get('/chat/{user_id}',[
    'uses'=> 'messageControllers@chat',
    'as' => 'chat',
    'middleware'=> 'auth'
]);
// Route::get('/chatroom', function(){
//     return view('chatroom');
// })->name('chatroom');
Route::post('/send', [ 
    'uses'=> 'messageControllers@sendmessage',
    'as' => 'send',
    'middleware'=> 'auth'
]);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CustomAuthController::class, 'login']);

//Grouped named controllers with routed middleware
Route::controller(CustomAuthController::class) -> group(function(){
    Route::get('/registration', 'registration')->name('user-registration')->middleware('isAlreadyLoggedIn');
    Route::get('/login', 'login')->name('user-login')->middleware('isAlreadyLoggedIn');
    Route::post('/register-user','registerUser')->name('register-user');
    Route::post('/login-user', 'loginUser')->name('login-user');
    Route::get('/dashboard', 'dashboard')->middleware('isLoggedIn');
    Route::get('/logout', 'logout');
});


//Ungrouped routes
Route::get('/posts/all', [PostsController::class, 'listPosts'])->middleware('isLoggedIn');
Route::get('/posts/edit/{id}', [PostsController::class, 'editPost'])->middleware('isLoggedIn');
Route::get('/posts/create', [PostsController::class, 'createPost'])->middleware('isLoggedIn');
Route::post('/posts/store', [PostsController::class, 'storePost']);
Route::get('/posts/delete/{id}', [PostsController::class, 'deletePost']);
Route::post('/posts/update', [PostsController::class, 'updatePost']);





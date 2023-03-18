<?php

use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;

use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\MyPlaceController;
use App\Http\Controllers\UserController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [IndexController::class, '__invoke'])->name('admin.post.index');
    });
});

Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', [\App\Http\Controllers\Post\IndexController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [CreateController::class, 'create'])->name('post.create');

    Route::post('/posts', [StoreController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}', [ShowController::class, 'show'])->name('post.show');
    Route::get('/posts/{post}/edit', [EditController::class, 'edit'])->name('post.edit');
    Route::patch('/posts/{post}', [UpdateController::class, 'update'])->name('post.update');
    Route::delete('/posts/{post}', [DestroyController::class, 'destroy'])->name('post.delete');
});

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
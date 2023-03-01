<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts.index');
});
// Route::get('/', [postsController::class, 'index'])->name('index');
Route::get("/", [PostsController::class, "index"])->name("index");
Route::get('/post/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/post/create/store', [PostsController::class, 'store'])->name('posts.store');
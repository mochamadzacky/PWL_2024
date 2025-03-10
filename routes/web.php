<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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
    return view('welcome');
});

Route::get ('/hello', [WelcomeController::class,'hello']);


Route::get('/world', function () {
return 'World';
});

Route::get('/index', function () {
    return 'Selamat datang';
    });

Route::get('/about', function () {
        return '2341760147 Zacky';
        });

        Route::get('/user/{Zacky}', function ($name) {
            return 'Nama Saya '.$name;
            });

            Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($id) {
return 'Halaman artikel dengan id'. $id;
});
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
    Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);
<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix'=>'admin'], function (){

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/artikel', function () {
        return view('admin.artikel.index');
    });
    Route::get('/kategory', function () {
        return view('admin.kategory.index');
    });

    Route::resource('user', UserController::class);
    Route::resource('book', BookController::class);
    Route::resource('pengarang',PengarangController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

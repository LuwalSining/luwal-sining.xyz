<?php

use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\UserRegController;
//use App\Http\Controllers\UploadController;

//MAIN PAGE
Route::group(['prefix' => '{lang}'], function() {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //Shows
    Route::get('/projects', [ShowsController::class, 'index'])->name('shows');
    Route::get('/projects/{specifics}', [ShowsController::class, 'indiv'])->name('shows.indiv');
    //Directory
    Route::get('/directory', [DirectoryController::class, 'index'])->name('dir');
    Route::get('/directory/{artist}', [DirectoryController::class, 'indiv'])->name('dir.indiv');
});

//=====================================================================================//

Route::group(['prefix' => 'en'], function() {
    Route::group(['prefix' => 'artportal'], function() {
        //  Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //  Login
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login/create', [LoginController::class, 'store'])->name('login.create');
        //  Logout
        Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
        //  Register
        Route::get('/register', [UserRegController::class, 'index'])->name('register');
        Route::post('/register/create', [UserRegController::class, 'store'])->name('register.create');
        //  Upload Files
        Route::post('/upload', [ShowsController::class, 'store'])->name('upload');
        // Edit Profile
        Route::post('/profile', [DashboardController::class, 'edit'])->name('profile');
    });
});

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

Route::get('/', function(){
    return redirect('/en');
})->name('home.redir');

//MAIN PAGE
Route::group(['prefix' => '{lang}'], function() {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //Shows
    Route::get('/projects', [ShowsController::class, 'index'])->name('shows');
    Route::get('/projects/{show}', [ShowsController::class, 'show'])->name('shows.indiv');
    //Directory
    Route::get('/directory', [DirectoryController::class, 'index'])->name('dir');
    Route::get('/directory/{artist}', [DirectoryController::class, 'show'])->name('dir.indiv');
    //Legal
    /*Route::group(['prefix' => 'legal'], function() {
        Route::get('/privacy-policy', function() {
            return view('legal.privpol');
        })->name('privpol');
        Route::get('/terms-of-use', function() {
            return view('legal.tos');
        })->name('tos');
    });*/
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
        Route::post('/profile/edit/bio', [DashboardController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile/edit/role', [DashboardController::class, 'editRole'])->name('profile.role');
        Route::post('/profile/edit/links', [DashboardController::class, 'editLinks'])->name('profile.links');
        // Add/Edit Shows
        Route::get('/show', [ShowsController::class, 'performance'])->name('perf');
        Route::get('/show/{show}', [ShowsController::class, 'indivShow'])->name('perf.show');
        Route::post('/show/add', [ShowsController::class, 'addShow'])->name('perf.add');
        Route::post('/show/edit', [ShowsController::class, 'editShow'])->name('perf.edit');
    });
});

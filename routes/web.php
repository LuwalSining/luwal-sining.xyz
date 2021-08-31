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

Route::group(['prefix' => 'art-portal'], function() {
    //  Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    //  Login
    Route::group(['prefix' => 'login'], function() {
        Route::get('/', [LoginController::class, 'index'])->name('login');
        Route::post('/create', [LoginController::class, 'store'])->name('login.create');
    });
    //  Register
    Route::group(['prefix' => 'register'], function() {
        Route::get('/', [UserRegController::class, 'index'])->name('register');
        Route::post('/create', [UserRegController::class, 'store'])->name('register.create');
    });
    //  Logout
    Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
    //  Upload Files
    Route::post('/upload', [ShowsController::class, 'store'])->name('upload');
    // Edit Profile
    Route::group(['prefix' => 'profile/edit'], function() {
        Route::post('/bio', [ProfileController::class, 'updateBio'])->name('profile.bio');
        Route::post('/pfp', [ProfileController::class, 'updatePfp'])->name('profile.pfp');
        Route::post('/role', [ProfileController::class, 'updateRole'])->name('profile.role');
        Route::post('/links', [ProfileController::class, 'updateLinks'])->name('profile.links');
    });
    // Add/Edit Shows
    Route::group(['prefix' => 'edit-shows'], function() {
        Route::get('/', [ShowsController::class, 'indexInDashboard'])->name('perf');
        Route::get('/{show}', [ShowsController::class, 'indexSingleInDashboard'])->name('perf.shows');
        Route::post('/add', [ShowsController::class, 'createShow'])->name('perf.add');
        Route::post('/edit/{show}', [ShowsController::class, 'updateShow'])->name('perf.edit');
        Route::post('/edit/poster/{show}', [ShowsController::class, 'updateShowPoster'])->name('perf.edit.poster');
    });
});

//MAIN PAGE
Route::group(['prefix' => '{lang}'], function() {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //Shows
    Route::get('/shows', [ShowsController::class, 'index'])->name('shows');
    Route::get('/shows/{show}', [ShowsController::class, 'index_single'])->name('shows.indiv');
    //Directory
    Route::get('/directory', [DirectoryController::class, 'index'])->name('dir');
    Route::get('/directory/{artist}', [DirectoryController::class, 'show'])->name('dir.indiv');

    Route::get('/across-rooms', function() {

        return view('across-rooms.rooms');

    })->name('across-rooms');

});

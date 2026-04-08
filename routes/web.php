<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TimController;
use App\Http\Middleware\CheckSession;
use App\Http\Middleware\HasSession;
use App\Http\Middleware\httpAuth;
use App\Http\Middleware\setLanguage;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/en');

Route::middleware([httpAuth::class])->group(function () {

Route::middleware([setLanguage::class])->group(function () {
    Route::group(['prefix' => '{lang}'], function () {
         Route::get('/', [IndexController::class, 'index'])->name('index');
         Route::get('/tim', [TimController::class, 'index'])->name('tim');
   });
});
});


Route::middleware([CheckSession::class])->group(function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index']);
    Route::get('/cms/pageabout', [AboutController::class, 'index']);
    Route::get('/cms/cmsfaq', [FAQController::class, 'index']);
    Route::get('/cms/addfaq', [FAQController::class, 'add']);
    Route::get('/cms/editfaq/{id}', [FAQController::class, 'edit']);


    Route::group(['prefix' => '/cms/fire-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

//redirect to dashboard if user has session to dashboard
Route::middleware([HasSession::class])->group(function () {
    Route::get('/cms/login', [DashboardController::class, 'login']);
});

//url to logout session
Route::get('/cms/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});

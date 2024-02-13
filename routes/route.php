<?php
use App\Services\Route;
use App\Middleware\{
    Auth,
    Guest
};

Route::add('/','HomeController','index','GET');
Route::add('login','LoginController','index','GET',[Guest::class]);

Route::add('submit-login','LoginController','login','POST',[Guest::class]);

Route::add('logout','DashboardController','logout','GET',[Auth::class]);
Route::add('dashboard','DashboardController','index','GET', [Auth::class]);

Route::add('register','RegisterController','index','GET',[Guest::class]);
Route::add('submit-register','RegisterController','register','POST',[Guest::class]);
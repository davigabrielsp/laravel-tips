<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
   return view('welcome');
})->name('home');

Route::get('/contact', function(){
   return redirect()->route('home');
})->name('contact');

Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/', function(){
        return 'admin home';
    });
    Route::get('create', function(){
        return 'admin create';
    })->name('create');
});

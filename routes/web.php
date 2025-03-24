<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [HomeController::class, 'contato'])->name('site.contato');
Route::post('/contato', [HomeController::class, 'store_contato'])->name('site.store');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', action: function(){ return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', action: function(){ return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TestController::class, 'index'])->name('teste.index');


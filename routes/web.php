<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;


 
Route::get('/', [PostagemController::class, 'index'])
->name('postagem.index');

Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show');

Route::post('postagem/create', [PostagemController::class, 'store'])
->name('postagem.store');

Route::get('postagem/{id}/edit', [PostagemController::class, 'edit'])
->name('postagem.edit');

Route::put('/postagem/{id}', [PostagemController::class, 'update'])
->name('postagem.update');

Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])
->name('postagem.destroy');
<?php

use App\Http\Controllers\autorController;
use App\Http\Controllers\emprestimoController;
use App\Http\Controllers\livroCrontoller;
use App\Http\Controllers\membroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [autorController::class, 'store']);
Route::get('/autor', [autorController::class, 'index']);

Route::post('/livro', [livroCrontoller::class, 'store']);
Route::get('/livro', [livroCrontoller::class, 'index']);

Route::post('/membro', [membroController::class, 'store']);
Route::get('/membro', [membroController::class, 'index']);

Route::post('/emprestimo', [emprestimoController::class, 'store']);
Route::get('/emprestimo', [emprestimoController::class, 'index']);
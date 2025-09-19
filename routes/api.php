<?php

use App\Http\Controllers\autorController;
use App\Http\Controllers\emprestimoController;
use App\Http\Controllers\livroCrontoller;
use App\Http\Controllers\membroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [autorController::class, 'store']);
Route::get('/autor', [autorController::class, 'index']);
Route::get('/autor/find/{id}',  [autorController::class, 'show']);
Route::put('/autor',  [autorController::class, 'update']);
Route::delete('/autor/delete/{id}',  [autorController::class, 'delete']);

Route::post('/livro', [livroCrontoller::class, 'store']);
Route::get('/livro', [livroCrontoller::class, 'index']);
Route::get('/livro/find/{id}',  [livroCrontoller::class, 'show']);
Route::put('/livro',  [livroCrontoller::class, 'update']);
Route::delete('/livro/delete/{id}', [livroCrontoller::class, 'delete']);


Route::post('/membro', [membroController::class, 'store']);
Route::get('/membro', [membroController::class, 'index']);
Route::get('/membro/find/{id}',  [membroController::class, 'show']);
Route::put('/membro',  [membroController::class, 'update']);
Route::delete('/membro/delete/{id}', [membroController::class, 'delete']);

Route::post('/emprestimo', [emprestimoController::class, 'store']);
Route::get('/emprestimo', [emprestimoController::class, 'index']);
Route::get('/emprestimo/find/{id}',  [emprestimoController::class, 'show']);
Route::put('/emprestimo',  [emprestimoController::class, 'update']);
Route::delete('/emprestimo/delete/{id}', [emprestimoController::class, 'delete']);
<?php

use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//本番環境
Route::get('/', [App\Http\Controllers\MemoController::class, 'index']);

Route::resource("memos", MemoController::class);
Route::resource('memos', MemoController::class);

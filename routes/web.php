<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\FinalExamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// BBS
Route::get('/bbs/', [BbsController::class, 'index'])->name('bbs.index');
Route::post('/bbs/', [BbsController::class, 'create'])->name('bbs.create');

//
Route::get('/final_exam/', [FinalExamController::class, 'index'])->name('final_exam.index');
Route::post('/final_exam/', [FinalExamController::class, 'create'])->name('final_exam.create');

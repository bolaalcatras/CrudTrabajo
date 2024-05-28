<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;


Route::get('/index', [InstructorController::class , 'index']);
Route::get('/show{datos}', [InstructorController::class , 'show'])->name('crud.show');
Route::get('/create/nuevo', [InstructorController::class , 'create'])->name('crud.create');
Route::post('/store', [InstructorController::class , 'store'])->name('crud.store');
Route::get('/show/{datos}/edit', [InstructorController::class , 'edit'])->name('crud.edit');
Route::put('/show/{datos}', [InstructorController::class , 'update'])->name('crud.update');
Route::delete('/delete/{datos}', [InstructorController::class , 'destroy'])->name('crud.destroy');
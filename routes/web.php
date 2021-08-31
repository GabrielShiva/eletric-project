<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailController;

Route::get('/', function () {
    return 'Initial Page';
});


Route::get('home', [ProjectController::class, 'index'])->name('home');
Route::get('new-project', [ProjectController::class, 'create'])->name('project.create');
Route::post('new-project', [ProjectController::class, 'store'])->name('project.store');
Route::get('project/{project}', [ProjectController::class, 'show'])->name('project.show');

Route::get('project/{project}/details', [ProjectDetailController::class, 'createDetails'])->name('project.details.create');
Route::post('project/{project}/details', [ProjectDetailController::class, 'storeDetails'])->name('project.details.store');

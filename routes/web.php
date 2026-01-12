<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AzureBlobController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('azure', [AzureBlobController::class, 'index'])->name('azure.index');
Route::post('azure/create', [AzureBlobController::class, 'createTestFile'])->name('azure.create');
Route::delete('azure/delete', [AzureBlobController::class, 'deleteTestFile'])->name('azure.delete');

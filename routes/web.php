<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GampanganController;

Route::group(['prefix' => '/'], function() {
    Route::get('/', [GampanganController::class, 'index_r'])->name('index.r');
});

Route::group(['prefix' => 'crud'], function() {
    // List Global
    Route::get('list', [GampanganController::class, 'list_global'])->name('crud.list.global');

    /*
    ----------------------------
    || Route milik Query Builder
    ----------------------------
    */

    // Add
    Route::get('add_query', [GampanganController::class, 'add_query'])->name('crud.add.query');
    Route::post('add_query', [GampanganController::class, 'add_query_store'])->name('crud.add.query_post');
    
    // Edit
    Route::get('edit_query/{id}', [GampanganController::class, 'edit_query'])->name('crud.edit.query');
    Route::put('edit_query/{id}', [GampanganController::class, 'edit_query_store'])->name('crud.edit.query_post');
    
    // Delete
    Route::get('delete_query/{id}', [GampanganController::class, 'delete_query'])->name('crud.delete.query');

    /*
    ----------------------------
    || Route milik Eloquent
    ----------------------------
    */

    // Add
    Route::get('add_eloquent', [GampanganController::class, 'add_eloquent'])->name('crud.add.eloquent');
    Route::post('add_eloquent', [GampanganController::class, 'add_eloquent_store'])->name('crud.add.eloquent_post');

    // Edit
    Route::get('edit_eloquent/{id}', [GampanganController::class, 'edit_eloquent'])->name('crud.edit.eloquent');
    Route::put('edit_eloquent/{id}', [GampanganController::class, 'edit_eloquent_store'])->name('crud.edit.eloquent_post');

    // Delete
    Route::get('delete_eloquent/{id}', [GampanganController::class, 'delete_eloquent'])->name('crud.delete.eloquent');
});
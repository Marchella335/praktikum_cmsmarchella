<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;

Route::get('/', function () {
    return redirect()->route('staf.index');
});

Route::prefix('staf')->group(function () {
    Route::get('/', [StafController::class, 'index'])->name('staf.index');           // Tampilkan semua staf
    Route::get('/create', [StafController::class, 'create'])->name('staf.create');   // Form tambah staf
    Route::post('/', [StafController::class, 'store'])->name('staf.store');          // Simpan staf baru
    Route::get('/{id}', [StafController::class, 'show'])->name('staf.show');         // Detail staf
    Route::get('/{id}/edit', [StafController::class, 'edit'])->name('staf.edit');    // Form edit staf
    Route::put('/{id}', [StafController::class, 'update'])->name('staf.update');     // Simpan perubahan
    Route::delete('/{id}', [StafController::class, 'destroy'])->name('staf.destroy');// Hapus staf
    Route::get('/staf/{id}/delete', [StafController::class, 'confirmDelete'])->name('staf.confirmDelete');
});

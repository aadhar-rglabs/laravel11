<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf-test', [PdfController::class, 'pdfTest'])->name('pdf.test');
Route::get('/pdf-render', [PdfController::class, 'pdfRender'])->name('pdf.render');
Route::get('/generate-invoice', [PdfController::class, 'generateInvoice'])->name('generate.invoice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

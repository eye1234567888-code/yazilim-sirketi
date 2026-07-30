<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about');
Route::get('/hizmetler', [ServiceController::class, 'index'])->name('services');

// Hizmet Detay Sayfaları
Route::get('/crm-cozumleri', [ServiceController::class, 'crm'])->name('crm');
Route::get('/sektorel-cozumler', [ServiceController::class, 'sektorel'])->name('sektorel');
Route::get('/e-ticaret', [ServiceController::class, 'eticaret'])->name('eticaret');
Route::get('/e-donusum', [ServiceController::class, 'edonusum'])->name('edonusum');
Route::get('/erp-cozumleri', [ServiceController::class, 'erp'])->name('erp');
Route::get('/mobil-cozumler', [ServiceController::class, 'mobil'])->name('mobil');

Route::get('/referanslar', [ReferenceController::class, 'index'])->name('references');
Route::get('/projeler', [ProjectController::class, 'index'])->name('projects');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detay/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Haberler
Route::get('/haberler', [BlogController::class, 'news'])->name('news');
Route::get('/haber-detay/{slug}', [BlogController::class, 'newsShow'])->name('news.show');

Route::get('/kariyer', [CareerController::class, 'index'])->name('career');
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');
Route::post('/iletisim', [ContactController::class, 'send'])->name('contact.send');

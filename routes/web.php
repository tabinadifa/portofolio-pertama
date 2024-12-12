<?php
use App\Http\Controllers\TblDinamisController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [PortfolioController::class, 'index'])->middleware(['auth', 'verified'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'admin');

Route::get('/admin/home', [AdminController::class, 'showHome'])->middleware('auth', 'admin');

//dinamis
Route::get('/dinamis', [TblDinamisController::class, 'index'])->name('dinamis.index');
Route::get('/dinamis/create', [TblDinamisController::class, 'create'])->name('dinamis.create');
Route::post('/dinamis', [TblDinamisController::class, 'store'])->name('dinamis.store');
Route::get('/dinamis/{dinami}/edit', [TblDinamisController::class, 'edit'])->name('dinamis.edit');
Route::put('/dinamis/{dinami}', [TblDinamisController::class, 'update'])->name('dinamis.update');
Route::delete('/dinamis/{dinami}', [TblDinamisController::class, 'destroy'])->name('dinamis.destroy');

Route::get('/', [PortfolioController::class, 'index']);

Route::resource('/admin/dashboard/skill', AdminSkillController::class);

Route::resource('/admin/dashboard/home', AdminHomeController::class);

Route::resource('/admin/dashboard/about', AdminAboutController::class);

Route::resource('/admin/dashboard/certificate', AdminCertificateController::class);

Route::resource('/admin/dashboard/project', AdminProjectController::class);

Route::resource('/admin/dashboard/contact', AdminContactController::class);

require __DIR__.'/auth.php';

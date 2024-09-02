<?php

use App\Http\Controllers\DataBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::get('/profil', function () {
    return view('profile.profil', [
        "title" => "Profil"
    ]);
});
Route::resource('/pages', DataBarangController::class);
Route::get('/', [DataBarangController::class, 'statistikBeranda'])->name('sidebar.statistikBeranda');


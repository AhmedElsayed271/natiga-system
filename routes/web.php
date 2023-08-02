<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NatigaConroller;
use App\Imports\NatigaImport;
use GuzzleHttp\Psr7\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/natiga-thanway', [NatigaConroller::class, 'natigaThanway'])->name('natiga.thanway');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/test', function () {
    return view('dashboard.test');
});
Route::post('/import', [HomeController::class, 'import']);

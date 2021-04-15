<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Dashboard
Route::get('/dashboard/candidates/count', [DashboardController::class, 'countCandidate'])->name('dashboard.count');
Route::get('/dashboard/candidates/{filter?}', [DashboardController::class, 'getCandidate'])->name('dashboard.candidate');

Route::get('/interview', [InterviewController::class, 'index'])->name('interview.index');
Route::get('/panel', [PanelController::class, 'index'])->name('panel.index');
Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate.index');

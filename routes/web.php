<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SampleLSMController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookIssuedRecordController;
use App\Models\BookIssuedRecord;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::post('/sample/index', [SampleLSMController::class, 'store']);

Route::resource('sample', SampleLSMController::class)
    ->middleware(['auth', 'verified']);

Route::resource('student', StudentController::class)
    ->middleware(['auth', 'verified']);

Route::get('search', [SampleLSMController::class, 'index'])->name('search');

Route::resource('bookissued', BookIssuedRecordController::class)
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';


// Route::get('book',[SampleLSMController:: class, 'index']);
// Route::get('/add-book',[SampleLSMController:: class, 'store']);
// Route::get('/add-book',[SampleLSMController:: class, 'addbook']);
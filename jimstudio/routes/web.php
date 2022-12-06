<?php

use App\Http\Controllers\CategorySearchController;
use App\Http\Controllers\PaintingController;
use App\Models\Painting;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*------------------------------------------landing page----------------------------------*/
Route::view('/welcome', 'welcome');

/*-------------------------------------------Frontend pages--------------------------------*/
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'paintings' => Painting::all()
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/paintings/category', [CategorySearchController::class, 'index'])->name('category');

/*-------------------------------------Backend pages----------------------------------*/
Route::get('/dashboard', function () {
    $paintings = Painting::all();
    return Inertia::render('Dashboard', compact('paintings'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('paintings/availability', function () {
    $paintings = Painting::all();
    return Inertia::render('Paintings/Availability/availability', compact('paintings'));
})->middleware('auth')->name('availability');

Route::post('paintings/availability', [PaintingController::class, 'changeStatus'])->name('painting-availability');

Route::resource('/paintings', PaintingController::class)
    ->middleware('auth')->except(['edit', 'update']);

require __DIR__ . '/auth.php';

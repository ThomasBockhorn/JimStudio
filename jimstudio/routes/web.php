<?php

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

Route::get('/about', function() {
    return Inertia::render('About');
});

Route::get('/contact', function(){
    return Inertia::render('Contact');
});

/*-------------------------------------Backend pages----------------------------------*/
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/paintings', PaintingController::class)
    ->middleware('auth');

require __DIR__.'/auth.php';

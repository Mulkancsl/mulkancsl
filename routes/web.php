<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtikelsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

Route::resource('posts', ArtikelsController::class);


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/calendar', [App\Http\Controllers\DashboardController::class, 'calendar'])->name('calendar');

// Route Project
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/add-project', [App\Http\Controllers\ProjectController::class, 'addProject'])->name('add-project');

// Route Artikel
Route::get('/artikels', [App\Http\Controllers\ArtikelsController::class, 'index'])->name('artikels');
Route::get('/add-artikels', [App\Http\Controllers\ArtikelsController::class, 'addArtikels'])->name('add-artikels');
Route::get('/edit-artikels', [App\Http\Controllers\ArtikelsController::class, 'edit'])->name('edit-artikels');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/source-code', [App\Http\Controllers\HomeController::class, 'sourceCode'])->name('source-code');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

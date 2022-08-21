<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;

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

// Main Page Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/fitur', function () {
    return view('frontend.feature');
});

Route::get('/tentang', function () {
    return view('frontend.about');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/kontak', function () {
    return view('frontend.contact');
});

Route::get('/apps/calndar', [AppsController::class, 'calendarApp'])->name('apps.calendar');
Route::get('/apps/todo', [AppsController::class, 'todoApp'])->name('apps.todo');
Route::get('/apps/file-manager', [AppsController::class, 'file_manager'])->name('apps.filemanager');
Route::get('/apps/kanban', [AppsController::class, 'kanbanApp'])->name('apps.kanban');

Route::get('/activity', [ActivityController::class, 'index'])->name('activity');
Route::get('/activity/data', [ActivityController::class, 'getdata'])->name('activity');

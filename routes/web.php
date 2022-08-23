<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductivityController;

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

Route::get('apps/calndar', [AppsController::class, 'calendarApp'])->name('apps.calendar');
Route::get('apps/todo', [AppsController::class, 'todoApp'])->name('apps.todo');
Route::get('apps/file-manager', [AppsController::class, 'file_manager'])->name('apps.filemanager');
Route::get('apps/kanban', [AppsController::class, 'kanbanApp'])->name('apps.kanban');

Route::get('activity', [ActivityController::class, 'index'])->name('activity');
Route::get('activity/data', [ActivityController::class, 'getdata'])->name('activity.data');
Route::get('activity/create', [ActivityController::class, 'create'])->name('activity.create');
Route::post('activity/store', [ActivityController::class, 'store'])->name('activity.store');
Route::get('activity/edit/{activity}', [ActivityController::class, 'edit'])->name('activity.edit');
Route::post('activity/update/{activity}', [ActivityController::class, 'update'])->name('activity.update');
Route::get('activity/destroy/{activity}', [ActivityController::class, 'destroy'])->name('activity.destroy');
Route::get('activity/details/{activity}', [ActivityController::class, 'show'])->name('activity.details');
Route::get('activity/send/{activity}', [ActivityController::class, 'send'])->name('activity.send');

Route::get('productivity/whiteboard', [ProductivityController::class, 'whiteboard'])->name('productivity.whiteboard');
Route::get('productivity/skyoffice', [ProductivityController::class, 'skyoffice'])->name('productivity.skyoffice');
Route::get('productivity/pomofocus', [ProductivityController::class, 'pomofocus'])->name('productivity.pomofocus');
Route::get('productivity/lifeat', [ProductivityController::class, 'lifeat'])->name('productivity.lifeat');

Route::get('productivity/moodly', [ProductivityController::class, 'moodly'])->name('productivity.moodly');
Route::get('productivity/poolsuite', [ProductivityController::class, 'poolsuite'])->name('productivity.poolsuite');
Route::get('productivity/shhhnoise', [ProductivityController::class, 'shhhnoise'])->name('productivity.shhhnoise');

Route::get('report', [ReportController::class, 'index'])->name('report');

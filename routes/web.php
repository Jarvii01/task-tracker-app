<?php

use App\Http\Controllers\Comment\CommentStoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DeleteController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/tasks')
    ->as('tasks.')
    ->group(function () {
        Route::get('/', IndexController::class)->name('index');

        Route::get('/create', CreateController::class)->name('create');
        Route::post('/', StoreController::class)->name('store');

        Route::get('/{task}', ShowController::class)->name('show');

        Route::get('/{task}/edit', EditController::class)->name('edit');
        Route::patch('/{task}', UpdateController::class)->name('update');

        Route::delete('/{task}', DeleteController::class)->name('delete');
    });

Route::post('tasks/{task}/comment', CommentStoreController::class)->name('comment.store');

require __DIR__ . '/auth.php';

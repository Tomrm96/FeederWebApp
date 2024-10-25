<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/schedule/create', [ScheduleController::class, 'create_schedule'])->name('schedule.create');
Route::post('/schedule', [ScheduleController::class, 'store_schedule'])->name('schedule.store');

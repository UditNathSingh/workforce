<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;

Route::get('/', function () {
    return redirect('/employee');
});

Route::get('/admin',    [WorkspaceController::class, 'admin']);
Route::get('/hr',       [WorkspaceController::class, 'hr']);
Route::get('/manager',  [WorkspaceController::class, 'manager']);
Route::get('/employee', [WorkspaceController::class, 'employee']);

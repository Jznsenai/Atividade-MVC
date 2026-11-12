<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntregaController;

Route::get('/entregas', [EntregaController::class, 'index']);






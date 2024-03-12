<?php

use Slowlyo\OwlAdminer\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('adminer', [Controllers\OwlAdminerController::class, 'index']);

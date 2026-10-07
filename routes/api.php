<?php

use App\Http\Controllers\Api\CompanyApiController;
use Illuminate\Support\Facades\Route;

Route::get('/companies/{company}', [CompanyApiController::class, 'show']);
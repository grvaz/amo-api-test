<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\LogController;
use App\Http\Controllers\Api\WebhookController;
use App\Services\Api;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/webhook', WebhookController::class);

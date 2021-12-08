<?php

use App\Modules\Post\Http\Controllers\PostExportController;
use App\Modules\Post\Http\Controllers\PostsController;
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

Route::apiResource('/posts', PostsController::class);
Route::get('/export/posts', [PostExportController::class, 'export']);

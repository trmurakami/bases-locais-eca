<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreativeWorkController;
use App\Http\Controllers\MusicRecordingController;
use App\Http\Controllers\MusicAlbumController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('creative_work')->group(
    function () {
        Route::get('', [CreativeWorkController::class, 'index']);
        Route::get('musicrecording', [MusicRecordingController::class, 'index']);
        Route::post('musicrecording', [MusicRecordingController::class, 'store']);
        Route::post('musicrecording/{id}', [MusicRecordingController::class, 'storeAnalytic']);
        Route::get('musicrecording/{id}', [MusicRecordingController::class, 'show']);
        Route::put('musicrecording/{id}', [MusicRecordingController::class, 'update']);
        Route::delete('musicrecording/{id}', [MusicRecordingController::class, 'destroy']);
        Route::get('musicalbum', [MusicAlbumController::class, 'index']);
        Route::post('musicalbum', [MusicAlbumController::class, 'store']);
        Route::get('musicalbum/{id}', [MusicAlbumController::class, 'show']);
        Route::put('musicalbum/{id}', [MusicAlbumController::class, 'update']);
        Route::delete('musicalbum/{id}', [MusicAlbumController::class, 'destroy']);
    }
);
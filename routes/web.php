<?php

use App\Http\Controllers\ClusterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/cluster')->name('cluster.')->group(function () {
    Route::get('/', [ClusterController::class, 'create'])->name('create');
    Route::post('/save', [ClusterController::class, 'store'])->name('store');
    Route::get('/liste', [ClusterController::class, 'liste'])->name('liste');
    Route::get('/{departementId}', [ClusterController::class, 'getCommunesByDepartement'])->name('getCommunesByDepartement');
});


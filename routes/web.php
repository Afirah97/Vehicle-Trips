<?php

use App\Http\Controllers\VehicleTripController;

Route::get('/', [VehicleTripController::class, 'index']);
Route::get('/export-csv', [VehicleTripController::class, 'exportCSV']);

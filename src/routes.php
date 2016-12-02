<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/web-reports/alerts/vehicles', '\App\Http\Controllers\VehicleController@index');
Route::get('/web-reports/alerts/vehicle/{vehicle_id}', '\Alientronics\FleetanyWebReports\Controllers\ReportController@vehicleAlertsReport');
Route::get('/web-reports/alerts/vehicle/{vehicle_id}/type/{alert_type}', '\Alientronics\FleetanyWebReports\Controllers\ReportController@vehicleAlertTypeReport');

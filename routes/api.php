<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController; 

use App\Http\Controllers\Api\DoctorController; 
use App\Http\Controllers\Api\SpecialityController;

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

//doctor
Route::get('doctor', [DoctorController::class, 'index']);
Route::get('doctor/{id}', [DoctorController::class, 'show']);

//Speciality
Route::get('speciality', [SpecialityController::class, 'index']);
Route::get('speciality/{id}', [SpecialityController::class, 'show']);

//access
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);

    //Doctor
    Route::get('doctor', [DoctorController::class, 'index']);
    Route::get('doctor/{id}', [DoctorController::class, 'show']);
    Route::post('doctor', [DoctorController::class, 'store']);
    Route::put('doctor/{id}', [DoctorController::class, 'update']);
    Route::delete('doctor/{id}', [DoctorController::class,'destroy']);

    //Speciality
    Route::get('speciality', [SpecialityController::class, 'index']);
    Route::get('speciality/{id}', [SpecialityController::class, 'show']);
    Route::post('speciality', [SpecialityController::class, 'store']);
    Route::put('speciality/{id}', [SpecialityController::class, 'update']);
    Route::delete('speciality/{id}', [SpecialityController::class,'destroy']);
});

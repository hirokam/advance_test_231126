<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'contact']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/register', [ContactController::class, 'register']);
Route::get('login', [ContactController::class, 'login']);
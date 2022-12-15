<?php

use App\Http\Controllers\userController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/','/home');

Route::get('/home',[userController::class,'index']);
Route::post('/home',[userController::class,'submit_form'])->name('form');
Route::get('/down',[userController::class,'download'])->name('download');

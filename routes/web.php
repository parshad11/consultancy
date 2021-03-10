<?php
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\MessagesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin',[RoutingController::class,'adminpage']);
Route::get('message',[RoutingController::class,'messagepage']);
Route::post('insert',[MessagesController::class,'insert_data']);
Route::post('insert-admin-message',[MessagesController::class,'insert_admin_data']);



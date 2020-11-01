<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendTicketController;
use App\Http\Controllers\BackendEnterpriseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TicketController;
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
/*Route::get('/ticket', function () {
    return view('ticket.index');
});*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/ticket/', [TicketController::class, 'index'])->name('ticket.index');
Route::get('/ticket/show', [TicketController::class, 'index'])->name('ticket.index');
Route::get('backend', [BackendController::class, 'main']);//->name('backend.main');
Route::get('sesion', [IndexController::class, 'sesion']);//->name('backend.main');
Route::resource('ticket', TicketController::class, ['names' => 'ticket']);
Route::resource('backend/ticket', BackendTicketController::class, ['names' => 'backend.ticket']);
Route::resource('backend/enterprise', BackendEnterpriseController::class, ['names' => 'backend.enterprise']);
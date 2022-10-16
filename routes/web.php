<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SubscribeController;

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

//add route SubscribeController
Route::resource('subscribe',SubscribeController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/subscribe/{subscribe}/delete', [SubscribeController::class, 'delete'])->name('subscribe.delete');

require __DIR__.'/auth.php';

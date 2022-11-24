<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Livewire\FreefireIndex;
use App\Http\Livewire\FreefireItemDetail;
use App\Http\Livewire\FreefirePayment;
use App\Http\Livewire\OrdersIndex;
use App\Http\Livewire\MobileLegends\MlIndex;
use App\Http\Livewire\MobileLegends\MlItemDetail;
use App\Http\Livewire\MobileLegends\MlPayment;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/freefire', FreefireIndex::class)->name('freefire.index');

Route::get('/freefire/detalle', FreefireItemDetail::class)->name('freefire.detalle');

Route::get('/mobile-legend', MlIndex::class)->name('mobile-legend.index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/freefire/{id}/detail', FreefireItemDetail::class)->name('freefire.detail');

    Route::get('/freefire/order/{item}/payment', FreefirePayment::class)->name('freefire.payment');

    Route::get('/orders', OrdersIndex::class)->name('orders.index');

    Route::get('/mobile-legend/{id}/detail', MlItemDetail::class)->name('mobile-legend.detail');

    Route::get('/mobile-legend/order/{item}/payment', MlPayment::class)->name('mobile-legend.payment');
});

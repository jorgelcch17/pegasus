<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Livewire\admin\Dashboard;
use App\Http\Livewire\admin\OrdersIndex;
use App\Http\Livewire\admin\FfItems;

Route::get('/', Dashboard::class)->name('admin.dashboard');

Route::get('/orders', OrdersIndex::class)->name('admin.orders.index');

Route::get('/ff-items', FfItems::class)->name('admin.ff-items.index');
?>
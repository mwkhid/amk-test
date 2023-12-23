<?php

use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::middleware('auth')->get('/', function () {
//     return view('welcome');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('staff.dashboard');
});

Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('/customer', [CustomersController::class, 'index'])->name('staff.customer');
    Route::get('/item', [ItemsController::class, 'index'])->name('staff.item');
    Route::get('/order', [OrdersController::class, 'index'])->name('staff.order');
    Route::get('/order/create', [OrdersController::class, 'create'])->name('staff.order-create');
    Route::get('/order/{id}', [OrdersController::class, 'show'])->name('staff.order-show');
    Route::post('/order', [OrdersController::class, 'store'])->name('staff.order-store');
});


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');
        Route::resource('customers', CustomersController::class);
        Route::resource('items', ItemsController::class);
        Route::resource('orders', OrdersController::class);
    });


require __DIR__ . '/auth.php';

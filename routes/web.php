<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\TicketController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); 
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile'); 
    Route::get('/admin/calendar', [AdminController::class, 'AdminCalendar'])->name('admin.calendar'); 
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password'); 
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::controller(TicketController::class)->group(function(){
        Route::get('/tickets', 'IndexTicket')->name('index.ticket');
        Route::get('/tickets/create', 'CreateTicket')->name('create.ticket');
        Route::post('/tickets/store', 'StoreTicket')->name('store.ticket');
        Route::post('/tickets/{id}', 'ShowTicket')->name('show.ticket');
        Route::delete('/tickets/{ticket}', 'DestroyTicket')->name('destroy.ticket');
    });

});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::controller(CustomerController::class)->group(function(){
        Route::get('/create/customer', 'CreateCustomer')->name('create.customer');
        Route::post('/store/customer', 'StoreCustomer')->name('store.customer');
        Route::get('/edit/customer{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/update/customer', 'UpdateCustomer')->name('update.customer');
        Route::get('/delete/customer{id}', 'DeleteCustomer')->name('delete.customer');
    });
});

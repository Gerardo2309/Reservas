<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PaxController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login'); // regresar a welcome cuando hagaran reservas
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
       // if (auth()->user()->hasRole('Admin')) {
            return view('dashboards.dashboard-admin');
        /*} else if (auth()->user()->hasRole('Rep')) {
            return view('dashboards.dashboard-rep');
        }*/
    })->name('dashboard');

    Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
    Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');

    Route::get('/agencies', [AgencyController::class, 'index'])->name('agencies.index');

    Route::get('/type-tours', [SettingController::class, 'type_tour'])->name('type-tours.index');

    Route::get('/additionals', [SettingController::class, 'additionals'])->name('additionals.index');

    Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
    Route::get('tours/newtour', [TourController::class, 'create'])->name('tours.create');
    Route::post('tours/newtour', [TourController::class, 'store']);
    Route::get('tours/{tour:slug}', [TourController::class, 'show'])->name('tours.show');

    Route::get('/routes', [RouteController::class, 'index'])->name('routes.index');

    Route::get('/Users', [UserController::class, 'index'])->name('users.index');

    //Route::get('/paxes', [PaxController::class, 'index'])->name('paxes.index');
    //Ruta para procesar la imagenes en el controlador
    Route::post('/images', [ImageController::class, 'store'])->name('images.store');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDataController;

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
    return view('layout.home');
});

Route::get('/index', function () {
    return view('dashboard.index');
});

Route::get('/student/add', function () {
    return view('student.formadd');
});
Route::post('/student/add', function () {
    return view('student.formadd');
});

Route::resource('Student', StudentController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'index'])->middleware();
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::get('/dashboard/data', function () {
    return view('dashboard.data.create');
});

Route::post('/dashboard/data', function () {
    return view('dashboard.data.create');
});

Route::get('/dashboard/data/delete_data/{ID}', [DashboardDataController::class, 'delete_data']);

Route::get('/dashboard/data/edit_data/{ID}', [DashboardDataController::class, 'edit_data']);

Route::post('/dashboard/data/update_data/{ID}', [DashboardDataController::class, 'update_data']);

Route::resource('/dashboard/data', DashboardDataController::class);

Route::get('/data/export', [DashboardDataController::class, 'dataexport']);

Route::get('/data/search', [DashboardDataController::class, 'search']); 

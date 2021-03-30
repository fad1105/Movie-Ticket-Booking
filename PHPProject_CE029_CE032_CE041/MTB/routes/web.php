<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchRegisterController ;
use App\Http\Controllers\AddMovieController ;
use App\Http\Controllers\BookingController ;

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

Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_customer'); 


//for Admin

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//ADD branch
Route::post('admin/branch_register', [BranchRegisterController::class, 'branch_register'])->middleware('is_admin');

//add Movie
Route::post('admin/add_movie', [AddMovieController::class, 'add_movie'])->middleware('is_admin');



  

Route::middleware(['auth:sanctum', 'verified'])->get('/branch/home', function () {
    return view('branchHome');
})->name('branch.home');

Route::middleware(['auth:sanctum', 'verified'])->get('/branch/movies', function () {
    return view('branchMovie');
})->name('branch.movies');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/home', function () {
    return view('adminHome');
})->name('admin.home');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/branch_register', function () {
    return view('branch_register');
})->name('admin.branch_register');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/add_movie', function () {
    return view('add_movie');
})->name('admin.add_movie');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//coutomer
Route::get('/location', [App\Http\Controllers\HomeController::class, 'index'])->name('location')->middleware('is_customer');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'customerHome'])->middleware('is_customer'); 
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'customerHome'])->middleware('is_customer'); 
Route::post('/show_movie_detail' ,[BookingController::class, 'show_movie_detail'])->middleware('is_customer'); ;

Route::get('/show_movie_detail');

Route::post('/seat_booking' ,[BookingController::class, 'seat_booking'])->middleware('is_customer'); ;


Route::get('/seat_booking');

Route::post('/booking' ,[BookingController::class, 'booking'])->middleware('is_customer'); 

Route::post('/show_ticket' ,[BookingController::class, 'show_ticket'])->middleware('is_customer'); 





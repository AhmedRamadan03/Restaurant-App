<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

// users Routes
Route::get('users',[AdminController::class,'viewUsers'])->name('users.viewUsers');
Route::get('users-destroy/{id}',[AdminController::class,'deleteUser'])->name('users-destroy.deleteUser');

//routes of foods
Route::get('foods' , [FoodController::class,'index']);
Route::get('foods-create' , [FoodController::class,'create'])->name('foods-create.create');
Route::post('foods-store' , [FoodController::class,'store'])->name('foods-store.store');
Route::get('foods-edit/{id}' , [FoodController::class,'edit'])->name('foods-edit.edit');
Route::post('foods-update/{id}' , [FoodController::class,'update'])->name('foods-update.update');
Route::get('foods-destroy/{id}' , [FoodController::class,'destroy'])->name('foods-destroy.destroy');



Route::get('/redirects',[HomeController::class,'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

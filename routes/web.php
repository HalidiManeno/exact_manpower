<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;



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
    return  redirect(route('login'));
});

Auth::routes();

Route::get('normaluser', [PagesController::class, 'user_dashboard'])->name('normaluser')->middleware('normaluser'); 
Route::get('register-user', [PagesController::class, 'user_information'])->name('register-user');
Route::get('dashboard', [PagesController::class, 'admin_dashboard'])->name('dashboard')->middleware('admin'); Route::post('add-users', [PagesController::class, 'add_user'])->name('add-users');
Route::post('get-user', [PagesController::class, 'getuser']);
 Route::post('update-user', [PagesController::class, 'update_user']);
 Route::get('/delete-user{id}', [PagesController::class, 'destroy_user']);
 Route::get('manage-user', [PagesController::class, 'manage_user']);
 Route::post('change-password', [PagesController::class, 'hangepassword']);
 Route::post('update-profile', [PagesController::class,'updateprofile']);
 
 
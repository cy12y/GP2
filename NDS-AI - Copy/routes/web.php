<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncidentHistoryController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\TryNowController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;

// Login routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

// Logout route
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Profile route (example)
Route::get('profile', [ProfileController::class, 'index'])->name('profile');




// Registration Routes
//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [RegisterController::class, 'register']);
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
Route::get('/', function () { return view('home'); })->name('home');
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trynow', [TryNowController::class, 'index'])->name('trynow');
Route::post('/trynow/upload', [TryNowController::class, 'upload'])->name('trynow.upload');


//Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('signup', [SignUpController::class, 'index'])->name('signup');
Route::post('signup', [SignUpController::class, 'submit'])->name('signup.submit');

//Route::post('/signup/submit', [SignUpController::class, 'submit'])->name('signup.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::post('/alerts', [App\Http\Controllers\AlertController::class, 'store'])->name('alerts.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/alerts/{alertId}/incident-history', [IncidentHistoryController::class, 'index'])->name('incident-history.index');

Route::post('/alerts/{alertId}/incident-history', [IncidentHistoryController::class, 'store'])->name('incident-history.store');

Route::post('/alerts/store', [AlertController::class, 'store'])->name('alerts.store');

Route::post('/email/store', 'EmailController@store')->name('store.email');


Route::post('/upload', [UploadController::class, 'upload'])->middleware('auth');


use App\Models\User;

Route::get('/check-seeded-users', function () {
    $users = User::all();
    return $users; // Return seeded users as JSON response
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\TrancheController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/login', function () {
    return view('authentifications/login');
});
// Route::get('/', []);




Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
	Route::get('/home', 'TrancheController@index');
    Route::get('/home', [App\Http\Controllers\TrancheController::class, 'accueil'])->name('home');

    Route::get('/facture', function () {
        return view('facture');
    });
    Route::resource('/', AdminController::class)->middleware('auth');
    Route::resource('operateurs', OperateurController::class);
    Route::resource('machines', MachineController::class);
    Route::resource('blocs', BlocController::class);
    Route::resource('tranches', TrancheController::class);

Route::get('/get-all-tranches',[TrancheController::class,'getAlltranche']);
Route::get('/download-pdf',[TrancheController::class,'downloadPDF']);
Route::get('tranches/facture/{id}',[TrancheController::class,'facture'])->name('tranches');
});




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController ;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\SiswaController ;
use App\Models\siswas ;

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
    return view('welcome',[
        'datasiswa' => siswas::all()
    ]);
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'index' ]);
Route::post('/register', [RegisterController::class, 'store' ]);


Route::get('/login', [LoginController::class, 'index' ])
->name('login');
Route::post('/login', [LoginController::class, 'login' ]);

Route::get('/welcome', [SiswaController::class, 'index' ]);
Route::get('/create', [SiswaController::class, 'create' ]);
Route::get('/edit/{id}', [SiswaController::class, 'edit' ]);
Route::post('/simpandata', [SiswaController::class, 'store' ]);
Route::post('/updatedata/{id}', [SiswaController::class, 'update' ]);
Route::get('/deletedata/{id}', [SiswaController::class, 'destroy' ]);

Route::post('/logout', [LoginController::class, 'logout' ]);


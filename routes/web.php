<?php

use App\Http\Controllers\PaysController;
use App\Models\Pays;
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

Route::get('/', function () {
    $pays = Pays::all();
    return view('welcome', [
        'pays' => $pays
    ]);
});


Route::get('/pays',[PaysController::class, 'index']);

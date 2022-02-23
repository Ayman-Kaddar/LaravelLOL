<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionController; 

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

Route::get("/", [ChampionController::class, "index"])->name("champion.index");
Route::get("/campeon/{champion}", [championController::class, "show"])->name("champion.show");


Route::middleware(['auth:sanctum', 'verified'])->get('/champ', function () {
    return view('champ');
})->name('champ');



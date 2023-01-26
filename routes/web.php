<?php

use App\Http\Controllers\Comic;
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

Route::get("/", [Comic::class, "home"])->name("home");
Route::get("/", [Comic::class, "comics"])->name("comics");

Route::get("/comics", [Comic::class, "index"])->name("comics.index");
Route::get("/comics/create", [Comic::class, "create"])->name("comics.create");
// le parentisi {} stanno a segnare un valore dinamico e vanno messe prima dei valori statici per non creare "conflitto"
Route::get("/comics/{comic}", [Comic::class, "show"])->name("comics.show");
Route::post("/comics", [Comic::class, "store"])->name("comics.store");

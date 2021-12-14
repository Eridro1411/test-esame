<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/pizzas",[PizzaController::class,"pizza_list"]);
Route::get("/pizzas/{id}",[PizzaController::class,"pizza_detail"]);
Route::post("/pizzas",[PizzaController::class,"pizza_add"]);
Route::put("/pizzas/{id}",[PizzaController::class,"pizza_edit"]);
Route::delete("/pizzas/{id}",[PizzaController::class,"pizza_delete"]);
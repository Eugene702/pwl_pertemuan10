<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class, 'index'])->name("index");
Route::post("/", [HomeController::class, 'store'])->name("index.store");

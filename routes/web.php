<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("index-user",[UserController::class,"index"])->name("users.index");

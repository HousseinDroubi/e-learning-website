<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::group(["prefix"=> "v0.1"], function(){
   
    Route::group(["middleware" => "auth:api"], function(){
        Route::post("/me", [AuthController::class, "getUserData"])->name("get-user-data");
   });
   Route::post("/register", [AuthController::class, "register"])->name("register");
   Route::post("/login", [AuthController::class, "login"])->name("login");
   Route::get("/not_found", [AuthController::class, "notFound"])->name("not-found");
});
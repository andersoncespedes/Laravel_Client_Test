<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, "show"])->name("client_show");;
Route::prefix("Client")->group(function(){
    Route::get("/Create", [ClientController::class, "create"])->name("client_create");
    Route::post("/Save", [ClientController::class, "store"])->name("client_store");
    Route::delete("/Delete", [ClientController::class, "destroy"])->name("client_destroy");

});


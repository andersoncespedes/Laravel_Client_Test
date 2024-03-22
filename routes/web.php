<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, "show"])->name("client_show");;
Route::prefix("Client")->group(function(){
    Route::get("/Create", [ClientController::class, "create"])->name("client_create");
    Route::post("/Save", [ClientController::class, "store"])->name("client_store");
    Route::delete("/Delete/{id}", [ClientController::class, "destroy"])->name("client_destroy");
    Route::get("/Edit/{id}", [ClientController::class, "edit"])->name("client_edit");
    Route::put("/Update/{id}", [ClientController::class, "update"])->name("client_update");
});


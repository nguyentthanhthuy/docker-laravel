<?php

use App\Http\Controllers\BacSiController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\PhieuDatLichController;
use Illuminate\Support\Facades\Route;



// routes/api.php
Route::get('/test', function () {
    return response()->json([
        "status" => "success",
        "message" => "API hoạt động!"
    ]);
});







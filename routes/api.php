<?php

use App\Http\Controllers\BacSiController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\PhieuDatLichController;
use Illuminate\Support\Facades\Route;

Route::post("/phieu_dat_lich", [PhieuDatLichController::class,"dat_lich_kham"]);
Route::post("/danh_gia", [PhieuDatLichController::class,"danh_gia"]);

// routes/api.php
Route::get('/test', function () {
    return response()->json([
        "status" => "success",
        "message" => "API hoạt động!"
    ]);
});







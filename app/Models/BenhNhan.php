<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BenhNhan extends Model
{
    protected $table = 'benh_nhans';
    protected $fillable = [
        'ho_ten',
        'email',
        'mat_khau',
        'so_dien_thoai',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',
        'tinh_trang',
    ];
}

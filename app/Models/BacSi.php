<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BacSi extends Model
{
    protected $table = 'bac_sis';
    protected $fillable = [
        'ho_ten',
        'email',
        'mat_khau',
        'so_dien_thoai',
        'ngay_sinh',
        'gioi_tinh',
        'mo_ta',
        'hinh_anh',
        'chuc_danh',
        'so_nam_kinh_nghiem',
        'kinh_nghiem_lam_viec',
        'qua_trinh_dao_tao',
        'chung_chi',
        'thanh_tuu',
        'thanh_vien_to_chuc',
        'tinh_trang',
        'id_phong_kham',

    ];
}

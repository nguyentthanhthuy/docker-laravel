<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhieuDatLich extends Model
{
    protected $table = 'phieu_dat_lichs';
    protected $fillable = [
        'id_benh_nhan',
        'ngay_dat_hen',
        'ly_do_kham',
        'tinh_trang',
    ];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChuyenNganh extends Model
{
    protected $table = 'chuyen_nganhs';
    protected $fillable = [
        'ten_chuyen_nganh',
    ];
}

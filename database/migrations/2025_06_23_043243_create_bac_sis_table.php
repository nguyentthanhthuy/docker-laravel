<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bac_sis', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('mat_khau');
            $table->string('so_dien_thoai')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->text('mo_ta')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('chuc_danh')->nullable();
            $table->string('so_nam_kinh_nghiem')->nullable();
            $table->string('kinh_nghiem_lam_viec')->nullable();
            $table->string('qua_trinh_dao_tao')->nullable();
            $table->string('chung_chi')->nullable();
            $table->string('thanh_tuu')->nullable();
            $table->string('thanh_vien_to_chuc')->nullable();
            $table->integer('tinh_trang')->default(1);
            $table->integer('id_phong_kham')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac_sis');
    }
};

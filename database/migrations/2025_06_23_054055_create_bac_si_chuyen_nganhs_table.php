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
        Schema::create('bac_si_chuyen_nganhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bac_si')->nullable();
            $table->unsignedBigInteger('id_chuyen_nganh')->nullable();
            $table->integer('thoi_gian_du_kien')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac_si_chuyen_nganhs');
    }
};

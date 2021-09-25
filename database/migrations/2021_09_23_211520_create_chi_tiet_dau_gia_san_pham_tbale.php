<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDauGiaSanPhamTbale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_dau_gia_san_pham', function (Blueprint $table) {
            $table->bigIncrements('ctdgsp_id');

            $table->bigInteger('dgsp_id')->unsigned();
            $table->foreign('dgsp_id')->references('dgsp_id')->on('dau_gia_san_pham')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->bigInteger('kh_id')->unsigned();
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->bigInteger('ctdgsp_sogiaydaugia');
            $table->dateTime('ctdgsp_thoigianthuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_dau_gia_san_pham');
    }
}

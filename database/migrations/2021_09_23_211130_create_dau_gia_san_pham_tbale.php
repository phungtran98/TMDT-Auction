<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDauGiaSanPhamTbale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dau_gia_san_pham', function (Blueprint $table) {
            $table->bigIncrements('dgsp_id');
            $table->dateTime('dgsp_ngaybatdau');
            $table->dateTime('dgsp_ngayketthuc');
            $table->integer('dgsp_trangthai');

            $table->bigInteger('sp_id')->unsigned();
            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('dau_gia_san_pham');
    }
}

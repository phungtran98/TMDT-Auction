<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('kh_id')->unsigned();
            $table->string('username');
            $table->string('password');
            $table->string('kh_hoten');
            $table->string('kh_gioitinh');
            $table->string('kh_email');
            $table->string('kh_diachi');
            $table->string('kh_sdt');
            $table->bigInteger('lkh_id')->unsigned();
            $table->foreign('lkh_id')->references('lkh_id')->on('loaikhachhang');
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
        Schema::dropIfExists('khachhang');
    }
}

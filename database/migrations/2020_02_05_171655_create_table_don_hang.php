<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('dh_id');
            $table->integer('dh_tongtien');
            $table->integer('dh_madon');
            $table->string('dh_nguoinhan');
            $table->string('dh_noinhan');
            $table->string('dh_thoigiandathang');
            $table->string('dh_thoigiannhanhang')->nullable();
            $table->integer('dh_trangthai')->default(1);
            $table->integer('dh_quatrinhvanchuyen')->default(1);
            $table->bigInteger('kh_id')->unsigned();
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            // $table->bigInteger('htvc_id')->unsigned();
            // $table->foreign('htvc_id')->references('htvc_id')->on('hinhthucvanchuyen');
            // $table->bigInteger('httt_id')->unsigned();
            // $table->foreign('httt_id')->references('httt_id')->on('hinhthucthanhtoan');
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
        Schema::dropIfExists('donhang');
    }
}

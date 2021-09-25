<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChiTietDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ctdh_id');
            
            $table->bigInteger('sp_id')->unsigned();
            $table->integer('sp_dongia');
            $table->integer('sp_soluongsp');
            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->bigInteger('dh_id')->unsigned();
            $table->foreign('dh_id')->references('dh_id')->on('donhang')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('chitietdonhang');
    }
}

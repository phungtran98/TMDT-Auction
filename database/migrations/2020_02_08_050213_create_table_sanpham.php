<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Đây là các thuộc tính của bản sản phẩm
            $table->bigIncrements('sp_id')->unsigned();
            $table->string('sp_ten');
            $table->integer('sp_giagoc')->nullable();
            $table->integer('sp_giaban')->nullable();
            $table->integer('sp_giakhuyenmai')->nullable();
            $table->text('sp_thongtin');
            $table->integer('sp_danhgia')->nullable();
            $table->integer('sp_trangthai')->default(0)->comment('Trạng thái có 0 hoặc 1 chỉ Còn hàng hoặc Hết hàng');
            $table->string('sp_anhdaidien')->nullable();
            $table->integer('sp_soluong')->nullable();
            //Khóa ngoại đây
            $table->bigInteger('l_id')->unsigned();//khóa ngoại
            $table->foreign('l_id')->references('l_id')->on('loai');
            $table->bigInteger('cd_id')->unsigned();//khóa ngoại
            $table->foreign('cd_id')->references('cd_id')->on('congdung');
            $table->bigInteger('cdp_id')->unsigned();//khóa ngoại
            $table->foreign('cdp_id')->references('cdp_id')->on('congdungphu');
            $table->bigInteger('xx_id')->unsigned();
            $table->foreign('xx_id')->references('xx_id')->on('xuatxu');
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
        Schema::dropIfExists('sanpham');
    }
}

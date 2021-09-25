<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoaikhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaikhachhang', function (Blueprint $table) {
            $table->bigIncrements('lkh_id')->unsigned()->comment('ID loại khách hàng giá trị tự tăng');
            $table->string('lkh_ten')->comment('Tên của loại khách hàng đó');
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
        Schema::dropIfExists('loaikhachhang');
    }
}

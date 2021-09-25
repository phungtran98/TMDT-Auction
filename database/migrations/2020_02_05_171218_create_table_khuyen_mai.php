<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhuyenmai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('km_id')->unsigned();
            $table->string('km_ten')->comment('Tên của đợt khuyến mãi');
            $table->string('km_noidung')->comment('Nội dung của đợt khuyến mãi');
            $table->integer('km_giatri')->comment('Giá trị khuyến mãi');
            $table->date('km_batdau')->comment('Ngày bắt đầu');
            $table->date('km_ketthuc')->comment('Ngày kết thúc');
            $table->integer('km_trangthai')->comment('Trạng thái còn hay đã hêt');
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
        Schema::dropIfExists('khuyenmai');
    }
}

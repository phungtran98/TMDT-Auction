<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHinhthucthanhtoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhthucthanhtoan', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('httt_id')->unsigned();
            $table->string('httt_ten')->comment('Tên của hình thức thanh toán');
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
        Schema::dropIfExists('hinhthucthanhtoan');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChitietlo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietlo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('lo_id')->unsigned();
            $table->foreign('lo_id')->references('lo_id')->on('lo')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->bigInteger('sp_id')->unsigned();
            $table->foreign('sp_id')->references('sp_id')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');;
            $table->integer('ctl_dongia');
            $table->integer('ctl_soluong');

            // tạo khóa chính
            $table->primary(['lo_id','sp_id']);
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
        Schema::dropIfExists('chitietlo');
    }
}

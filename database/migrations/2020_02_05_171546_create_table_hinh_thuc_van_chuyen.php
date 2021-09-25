<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHinhthucvanchuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhthucvanchuyen', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('htvc_id')->unsigned();
            $table->string('htvc_ten')->comment('Tên của hình thức vận chuyển');
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
        Schema::dropIfExists('hinhthucvanchuyen');
    }
}

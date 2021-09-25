<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('lo_id')->unsigned();
            $table->string('lo_ten');
            $table->string('lo_ngaysanxuat');
            $table->string('lo_hansudung');
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
        Schema::dropIfExists('lo');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_giohang', function (Blueprint $table) {
            $table->increments('giohang_id');
            $table->integer('sanpham_id');
            $table->string('giohang_name');
            $table->string('giohang_image');
            $table->integer('giohang_soluong');
            $table->double('giohang_gia');
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
        Schema::dropIfExists('tbl_giohang');
    }
}

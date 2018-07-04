<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHanghoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanghoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenhang',50)->unique();
            $table->string('donvitinh');
            $table->double('dongia');
            $table->Integer('soluong');
            $table->string('hinhanh');
            $table->unsignedInteger('loaihang_id');
            $table->foreign('loaihang_id')
            ->references('id')->on('loaihangs')
            ->onDelete('cascade');
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
        Schema::dropIfExists('hanghoas');
    }
}

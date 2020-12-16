<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->text('judul');
            $table->string('penulis1', 50);
            $table->string('penulis2', 50)->nullable()->change();
            $table->string('penulis3', 50)->nullable()->change();
            $table->string('penulis4', 50)->nullable()->change();
            $table->string('penulis5', 50)->nullable()->change();
            $table->string('penulis6', 50)->nullable()->change();
            $table->text('penerbit');
            $table->date('tanggal')->nullable()->change();
            $table->text('halaman')->nullable()->change();
            $table->text('file')->nullable()->change();
            $table->text('link')->nullable()->change();
            $table->text('noreg')->nullable()->change();
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
        Schema::dropIfExists('datas');
    }
}

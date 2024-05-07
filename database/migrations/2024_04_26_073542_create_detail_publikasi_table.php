<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_publikasi', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('judul');
            $table->string('foto');
            $table->string('penulis')->nullable('');
            $table->string('tulisan')->nullable('');
            $table->integer('is_active')->default('1');
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
        Schema::dropIfExists('detail_publikasi');
    }
};

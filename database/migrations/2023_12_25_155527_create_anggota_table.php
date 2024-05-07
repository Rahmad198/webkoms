<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_lengkap')->default('');
            $table->string('tempat_tanggal_lahir')->default('');
            $table->string('asal')->default('');
            $table->string('jurusan');
            $table->string('lk1')->default('');
            $table->string('lk2')->default('');
            $table->string('lk3')->default('');
            $table->string('training_nonformal')->default('');
            $table->string('lembaga_nonhmi')->default('');
            $table->string('status_anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};

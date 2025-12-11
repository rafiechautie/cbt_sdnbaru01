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
        Schema::create('rekap_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')
                ->constrained('siswa')
                ->onDelete('cascade');

            $table->foreignId('jadwal_ujian_id')
                ->constrained('jadwal_ujian')
                ->onDelete('cascade');
            $table->integer('total_benar')->default(0);
            $table->integer('total_salah')->default(0);
            $table->float('nilai')->default(0);
            $table->integer('durasi_mengerjakan')->nullable(); 
            $table->timestamp('selesai_pada')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_nilai');
    }
};

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
        // Schema::create('jurusan_column', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama_jurusan');
        //     $table->foreignId('fakultas_id')->constrained('fakultas_column')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('jurusan_column');
    }
};

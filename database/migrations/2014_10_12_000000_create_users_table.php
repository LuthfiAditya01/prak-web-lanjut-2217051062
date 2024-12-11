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
        Schema::create('fakultas_column', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fakultas');
            $table->timestamps();
        });
        Schema::create('jurusan_column', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jurusan');
            $table->foreignId('fakultas_id')->constrained('fakultas_column')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas_column');
        Schema::dropIfExists('users');
        Schema::dropIfExists('jurusan_column');
    }
};

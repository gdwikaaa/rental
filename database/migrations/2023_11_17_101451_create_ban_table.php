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
        Schema::create('ban', function (Blueprint $table) {
            $table->id();
            $table->string('kdban')->unique();
            $table->string('nama');
            $table->string('harga');
            $table->foreignId('jenisban_id');
            $table->foreignId('merkban_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ban');
    }
};

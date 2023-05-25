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
        Schema::create('pinjamdana', function (Blueprint $table) {
            $table->id();
            $table->string('ktp');
            $table->string('petani');
            $table->integer('dana');
            $table->string('tujuan');
            $table->string('cicilan');
            $table->string('lahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamdana');
    }
};

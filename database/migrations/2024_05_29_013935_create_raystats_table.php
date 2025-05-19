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
        Schema::create('raystats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kebun');
            $table->string('namaDokument');
            $table->string('document');
            $table->timestamps();
            $table->foreign('id_kebun')->references('id')->on('kebuns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raystats');
    }
};

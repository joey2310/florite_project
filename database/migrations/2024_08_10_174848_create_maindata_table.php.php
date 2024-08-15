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
        Schema::create('mainData', function (Blueprint $table) {
         $table->id();
         $table->string('clientName');
         $table->string('location');
         $table->string('contactName');
         $table->string('email');
         $table->string('contactNo');
         $table->string('q1p');
         $table->string('q1pDate');
         $table->string('gemNo');
         $table->string('gemDate');
         $table->string('docNo');
         $table->string('docDate');
         $table->string('prepby');
         $table->string('checkby');
         $table->string('appby');
         $table->string('date');
         $table->string('pumpModel');
         $table->string('liquid');
         $table->string('spGr');
         $table->string('temp');
         $table->string('qty');
         $table->string('capacity');
         $table->string('head');
         $table->string('sucLift');
         $table->string('npsha');
         $table->string('npshr');
         $table->string('seal');
         $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mainData');
    }
};
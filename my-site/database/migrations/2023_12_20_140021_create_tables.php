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
        Schema::create('ObjectOfTrades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type')->unique();
            $table->string('description');
            $table->double('price')->unsigned();
            $table->string('imagesPath',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ObjectOfTrades');
    }
};

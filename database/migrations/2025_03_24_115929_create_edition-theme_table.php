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
        Schema::create('edition-theme', function (Blueprint $table) {
            $table->unsignedBigInteger('theme_id');
            $table->unsignedBigInteger('edition_id');
            $table->timestamps();
            $table->foreign('edition_id')->references('id')->on('editions');
            $table->foreign('theme_id')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

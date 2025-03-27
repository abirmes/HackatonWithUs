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
        Schema::create('juryfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedback_id');
            $table->unsignedBigInteger('jury_id');
            $table->timestamps();
            $table->foreign('feedback_id')->references('id')->on('feedbacks');
            $table->foreign('jury_id')->references('id')->on('juries');
            $table->engine = 'InnoDB';
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juryfeedbacks');
    }
};

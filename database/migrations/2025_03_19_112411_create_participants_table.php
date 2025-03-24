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
        Schema::create('participants', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->unsignedBigInteger('role_id');
                $table->foreign('role_id')->references('id')->on('roles');
                $table->unsignedBigInteger('equipe_id');
                $table->foreign('equipe_id')->references('id')->on('equipes');
                $table->rememberToken();
                $table->timestamps();
                $table->engine = 'InnoDB';
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};

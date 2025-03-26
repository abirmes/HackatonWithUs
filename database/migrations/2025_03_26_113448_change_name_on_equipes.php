<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::update('alter table `equipes` modify `name` VARCHAR(200) UNIQUE NOT NULL');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::update('alter table `equipes` modify `name` VARCHAR(200) NOT NULL');

    }
};

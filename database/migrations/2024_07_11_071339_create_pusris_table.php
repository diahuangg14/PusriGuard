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
        Schema::create('pusris', function (Blueprint $table) {
            $table->id();
            $table->string('project_id');
            $table->string('code_id');
            $table->string('practice_code');
            $table->longText('activities');
            $table->string('evidence');
            $table->string('attachment')->nullable();
            $table->string('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pusris');
    }
};

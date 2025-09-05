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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('type', ['lesson_plan', 'worksheet', 'presentation', 'assessment', 'other']);
            $table->text('file_path');
            $table->enum('subject', ['math', 'science', 'history', 'language_arts', 'other']);
            $table->string('grade_level');
            $table->timestamps();
            $table->int default 0 ('download_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};

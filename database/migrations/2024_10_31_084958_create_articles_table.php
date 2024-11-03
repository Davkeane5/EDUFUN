<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // Foreign key to courses table
            $table->foreignId('writer_id')->constrained('writers')->onDelete('cascade'); // Foreign key to writers table
            $table->string('title'); // Article title
            $table->text('content'); // Article content
            $table->date('published_at'); // Date of publication
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles'); // Drop the articles table
    }
};

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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->integer(column:'group_id')->default(value('0'));
            $table->string(column:'surname')->default(value(''));
            $table->string(column:'name')->default(value(''));
            $table->timestamps();

            $table->index('group_id', 'student_gropu_idx');
            $table->foreign('group_id', 'student_category_fk')->on('groups')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};

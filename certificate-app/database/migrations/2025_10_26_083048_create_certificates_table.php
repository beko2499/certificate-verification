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
         Schema::create('certificates', function (Blueprint $table) {
        $table->id();
        $table->string('student_name');
        $table->string('university');
        $table->string('degree');
        $table->string('serial_number')->unique();
        $table->boolean('is_verified')->default(false);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};

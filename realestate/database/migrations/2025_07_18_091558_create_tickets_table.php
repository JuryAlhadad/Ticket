<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('careerNumber');
            $table->string('phone');
            $table->string('title');
            $table->text('description');
            $table->enum('priority', ['Low', 'Medium', 'High']);
            $table->unsignedBigInteger('employee_id'); // لإسناد التذكرة لموظف
            $table->timestamps();

            // مفتاح أجنبي إلى جدول الموظفين
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};

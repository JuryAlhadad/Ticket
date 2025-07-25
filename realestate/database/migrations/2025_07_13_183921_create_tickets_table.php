<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // منشئ التذكرة
        $table->string('title');
        $table->enum('status', ['open', 'in_progress', 'closed'])->default('open');
        $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null'); // موظف تقني
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};

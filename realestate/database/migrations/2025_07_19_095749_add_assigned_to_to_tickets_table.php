<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('tickets', function (Blueprint $table) {
        $table->unsignedBigInteger('assigned_to')->nullable()->after('employee_id');
        $table->foreign('assigned_to')->references('id')->on('employees')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('tickets', function (Blueprint $table) {
        $table->dropForeign(['assigned_to']);
        $table->dropColumn('assigned_to');
    });
}

};

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
        Schema::create('custom_approval_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('request_type_id')->constrained();
            $table->unsignedInteger('level');
            $table->foreignId('approver_id')->constrained('employees');
            $table->timestamps();

            $table->unique(['employee_id', 'request_type_id', 'level']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_approval_flows');
    }
};

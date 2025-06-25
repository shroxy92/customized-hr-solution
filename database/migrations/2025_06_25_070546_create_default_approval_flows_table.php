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
        Schema::create('default_approval_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_type_id')->constrained();
            $table->unsignedInteger('level');
            $table->foreignId('role_id')->nullable()->constrained('roles');
            $table->foreignId('approver_id')->nullable()->constrained('employees');
            $table->timestamps();

            $table->unique(['request_type_id', 'level']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('default_approval_flows');
    }
};

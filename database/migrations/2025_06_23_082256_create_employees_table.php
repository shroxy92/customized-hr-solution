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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('dept_id');
            $table->unsignedBigInteger('role_id');
            $table->date('join_date');
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->timestamps();

            $table->foreign('dept_id')->references('id')->on('departments');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('manager_id')->references('id')->on('employees');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

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
        Schema::create('approval_flows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('initiator_role');
            $table->unsignedBigInteger('approver_role');
            $table->integer('level');
            $table->boolean('is_mandatory');
            $table->timestamps();

            $table->foreign('initiator_role')->references('id')->on('roles');
            $table->foreign('approver_role')->references('id')->on('roles');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approval_flows');
    }
};

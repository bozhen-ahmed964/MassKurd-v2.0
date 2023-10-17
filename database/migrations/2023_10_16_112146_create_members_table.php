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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('phoneNumber');
            $table->integer('age');
            $table->double('weight');
            $table->double('height');
            $table->string('gender');
            $table->string('game_type')->default('DefaultType');
            $table->string('pay');
            $table->string('coursePay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

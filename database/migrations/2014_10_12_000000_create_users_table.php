<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('emp_id');
            $table->string('designition');
            $table->string('date_joined');
            $table->string('emp_type');
            $table->string('company');
            $table->string('answers_to')->default('0');
            $table->string('department');
            $table->string('is_verified')->default('0');
            $table->string('is_superuser')->default('0');
            $table->boolean('is_active')->default('1');
            $table->string('is_supervisor')->default('0');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
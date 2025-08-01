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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username', 30);
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->string('role', 20);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('users_permissions', function(Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('permission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('users_permissions');
    }
};

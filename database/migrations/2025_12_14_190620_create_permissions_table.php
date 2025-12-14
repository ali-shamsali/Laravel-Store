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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->timestamps();
        });

        Schema::create('permissions_user', function (Blueprint $table) {
            $table->unsignedBigInteger('permissions_id');
            $table->foreign('permissions_id')->references('id')->on('laravel_store.permissions');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('laravel_store.users');
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('laravel_store.roles');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('laravel_store.users');
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('laravel_store.roles');
            $table->unsignedBigInteger('permissions_id');
            $table->foreign('permissions_id')->references('id')->on('laravel_store.permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permissions_user');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_nickname',50);
            $table->string('user_name',25);
            $table->string('user_password',22);
            $table->foreignId('user_type_id')->constrained('usertype', 'usertype_id')->onDelete('cascade');
            $table->foreignId('user_status_id')->constrained('user_status_models', 'user_status_id')->onDelete('cascade');
            $table->string('user_photo',255);
            $table->timestamps();
        });
    }
};

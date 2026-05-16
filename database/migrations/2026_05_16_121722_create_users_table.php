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
            $table->varchar('user_name',25);
            $table->varchar('user_password',22);
            $table->varchar('user_photo',255);
            $table->timestamps();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_message_models', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name');
            $table->text('customer_message');
            $table->timestamps();
        });
    }
};

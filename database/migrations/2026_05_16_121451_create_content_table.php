<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id('content_id');
            $table->text('ct_instagram');
            $table->text('ct_linkedin');
            $table->string('ct_number1',11);
            $table->string('ct_number2',11);
            $table->text('ct_address');
            $table->string('ct_mail',50);
            $table->timestamps();

        });
    }
};

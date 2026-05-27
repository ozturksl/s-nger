<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_request_models', function (Blueprint $table) {
            $table->id('servicereq_id');
            $table->string('servicereq_taker',255);
            $table->string('servicereq_number',12);
            $table->text('servicereq_message');
            $table->foreignId('service_type_id')->constrained('service_type_models', 'service_type_id');
            $table->timestamps();
        });
    }

};

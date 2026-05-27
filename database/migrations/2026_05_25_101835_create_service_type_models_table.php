<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_type_models', function (Blueprint $table) {
            $table->id('service_type_id');
            $table->string('service_type_name');
            $table->timestamps();
        });

         DB::table('service_type_models')->insert([
            ['service_type_name' => 'Makina Tamiri (Eve Servis)'],
            ['service_type_name' => 'Makina Tamiri'],
            ['service_type_name' => 'Makina Satış'],
            ['service_type_name' => 'Makina Kullanım Öğretimi'],
        ]);
    }
};

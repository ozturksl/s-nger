<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_status_models', function (Blueprint $table) {
            $table->id('user_status_id');
            $table->string('user_status_name');
            $table->timestamps();
        });

         DB::table('user_status_models')->insert([
            ['user_status_name' => 'Etkin'],
            ['user_status_name' => 'Etkin Değil'],
        ]);
    }  
};

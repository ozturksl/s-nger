<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 


return new class extends Migration
{

    public function up(): void
    {
       Schema::create('product_status', function (Blueprint $table) {
            $table->id('product_status_id');
            $table->string('product_status_name');
        });

        DB::table('product_status')->insert([
            ['product_status_name' => 'Etkin'],
            ['product_status_name' => 'Etkin Değil'],
        ]);
    }
};

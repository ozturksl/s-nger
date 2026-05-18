<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usertype', function (Blueprint $table) {
            $table->id('usertype_id');
            $table->string('usertype_name',60);
            $table->timestamps();
        });

        DB::table('usertype')->insert([
            ['usertype_name' => 'Yönetici'],
            ['usertype_name' => 'Kullanıcı'],
        ]);
    }
};

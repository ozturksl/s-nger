<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prodcategories', function (Blueprint $table) {
            $table->id('category_id');
            $table->varchar('category_name',60);
            $table->timestamps();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_price',7);
            $table->foreignId('category_id')->constrained('prodcategories', 'category_id')->onDelete('cascade');
            $table->text('product_comment');
            $table->text('product_feature');
            $table->timestamps();
        });
    }
};

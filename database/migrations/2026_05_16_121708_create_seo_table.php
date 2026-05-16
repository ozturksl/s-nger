<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id('seo_id');
            $table->varchar('seo_favicon',255);
            $table->varchar('seo_icon',255);
            $table->varhcar('seo_comment',160);
            $table->text('seo_keys');
            $table->timestamps();
        });
    }
};

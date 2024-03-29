<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_email')->unique();        
            $table->string('contact_number');
            $table->string('website')->nullable();
            $table->string('governorate');
            $table->string('region');
            $table->string('street')->nullable();
            $table->string('image_path');
            $table->integer('likes');
            $table->boolean('accepted')->defualt(0);
            $table->rememberToken();
            $table->timestamps();
        });
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};

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
        Schema::create('categories', function (Blueprint $table) {
            // Big intger , auto-inuc , uinsiged
            // $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->id();
            // Varchar 65000
            $table->string('name',255);
            $table->string('slug',255)->unique();
            $table->text('description')->nullable();
            // created_at, updated_at  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

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
        Schema::create('programmers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('professional_title');
            // Мы можем использовать JSON для хранения опыта работы и
            //образования
            $table->json('experience')->nullable();
            $table->json('education')->nullable();
            // Навыки могут храниться как JSON или мы можем использовать
            //отдельную таблицу для них
            // В данном случае будем хранить как JSON
             $table->json('skills')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmers');
    }
};

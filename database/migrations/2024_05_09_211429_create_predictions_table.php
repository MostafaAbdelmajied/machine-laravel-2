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
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->enum('Gender',['Male','Female']);
            $table->integer("Age");
            $table->integer("Height");
            $table->integer("weight");
            $table->enum("CALC",['no', 'Sometimes', 'Frequently', 'Always']);
            $table->enum("FAVC",["no",'yes']);
            $table->integer("NCP");
            $table->enum("SCC",["no",'yes']);
            $table->enum("SMOKE",["no",'yes']);
            $table->integer("CH2O");
            $table->enum("family_history_with_overweight",["no",'yes']);
            $table->integer("FAF");
            $table->integer("TUE");
            $table->enum("CAEC",["no",'yes']);
            $table->enum("MTRANS",['Public_Transportation', 'Walking', 'Automobile', 'Motorbike', 'Bike']);
            $table->string("prediction",255);
            $table->foreignId("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
    }
};

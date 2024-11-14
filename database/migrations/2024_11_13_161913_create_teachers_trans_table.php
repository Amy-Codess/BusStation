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
        Schema::create('teachers_trans', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');   
            $table->string('driver_name');      
            $table->integer('bus_number');       
            $table->time('arrival_time');         
            $table->time('departure_time');       
            $table->date('date'); 
            $table->string('city');               
            $table->string('neighborhood');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_trans');
    }
};

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
        Schema::create('city_trans', function (Blueprint $table) {
        $table->id();
        $table->string('company_name');        
        $table->integer('bus_number');       
        $table->time('arrival_time');         
        $table->time('departure_time');       
        $table->date('date');                 
        $table->string('gathering_point');    
        $table->string('destination_from');   
        $table->string('destination_to');     
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_trans');
    }
};

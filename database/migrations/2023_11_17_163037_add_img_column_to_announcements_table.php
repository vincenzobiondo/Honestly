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
        Schema::table('announcements', function (Blueprint $table) {
            // $table->string('img')->nullable(); questo metodo da la possibilita al campo di essere null 
            $table->string('img') 
            ->after('measurements') //indica alla migrazione dove inserire la nuova colonna img
            ->default("/img/default.jpg"); //indica valore predefinito da inserire nei record gia pre esistenti
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropColumn('img');
        });
    }
};

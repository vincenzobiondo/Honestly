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
        //le migrazioni sono file PHP che descrivono come deve essere una tabella all'interno del mio database
        //! schema => classe che crea le tabelle
        //! $table => oggetto che crea le colonne
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //crea una colonna con dei dati all'interno in questo modo: INT (interi), AUTO_INCREMENT(che il numero incrementa da solo), PRIMARY_KEY (chiave primaria che identifica in maniera univoca il nostro record)
            $table->string('name'); //creare una colonna che contiene al suo interno dati di tipo STRING, il parametro reale è il nome della colonna
            $table->string('email')->unique(); //crea una colonna di tipo STRING chiamata EMAIL, ogni email è univoca
            $table->timestamp('email_verified_at')->nullable(); //crea due colonne che identificano il quando è stata creata l'email oppure quando viene modificata
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

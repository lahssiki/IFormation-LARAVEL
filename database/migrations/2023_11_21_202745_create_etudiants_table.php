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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number_inscription');
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->enum('gender', ['homme', 'femme']);
            $table->date('date_naissance');
            $table->float('note')->nullable();
            $table->string('bac_image')->nullable();
            $table->enum('filiere', ['SM', 'SVT', 'PC','BAC Eco','Bac pro']);
            $table->enum('specialite', ['informatique', 'gestion', 'infographie']);
            $table->enum('stauts', ['admis', 'non_admis', 'liste_d_attente','null'])->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
              $table->foreignId('type_candidature_id')->constrained('type_candidatures');
            $table->foreignId('genre_id')->constrained('genres');
            $table->date('date_naissance');
            $table->text('lieu_naissance');
            $table->foreignId('nationalite_id')->constrained('nationalites');
            $table->integer('nombre_enfant');
            $table->string('numero_telephone');
            $table->string('deuxieme_numero_telephone')->nullable();
            
            $table->string('deuxieme_email')->nullable();
            
            $table->string('site_web');
            $table->foreignId('poste_id')->constrained('postes');
            $table->foreignId('statut_id')->constrained('statuts');
            $table->foreignId('situation_matrimoniale_id')->constrained('situation_matrimoniales');
            $table->foreignId('type_metier_id')->constrained('type_metiers');
            $table->boolean('localisation');
            $table->foreignId('user_id')->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}

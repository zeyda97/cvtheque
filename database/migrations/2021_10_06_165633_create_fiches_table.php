<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->foreignId('objet_contrat_id')->constrained('objet_contrats');
            $table->date('date_debut_contrat');
            $table->date('date_fin_contrat');
            $table->foreignId('motif_contrat_id')->constrained('objet_contrats');
            $table->text('memo_fin_contrat');
            $table->boolean('prolongation');
            $table->text('motif_prolongation');
            $table->integer('duree_prolongation');
            $table->date('debut_periode_prolongation');
            $table->date('fin_periode_prolongation');
            $table->string('autre_equipement-travail');
            $table->boolean('code_ethique');
            $table->boolean('reglement_interieur');
            $table->boolean('engagement_confidentialite');
            $table->boolean('procedure');
            $table->boolean('sensibilisation_qualite');
            $table->string('signataire_sensibilisation_qualite');
            $table->date('date_sensibilisation_qualite');
            $table->text('commentaire_sensibilisation_qualite');
            $table->boolean('sensibilisation_risque');
            $table->string('signataire_sensibilisation_risque');
            $table->date('date_sensibilisation_risque');
            $table->text('commentaire_sensibilisation_risque');
            $table->boolean('visa_direction_accueil');
            $table->boolean('signataire_visa_direction_accueil');
            $table->date('date_visa_direction_accueil');
            $table->text('commentaire_visa_direction_accueil');
            $table->boolean('visa_rh');
            $table->string('signataire_visa_rh');
            $table->date('date_visa_rh');
            $table->text('commentaire_date_visa_rh');
            $table->foreignId('niveaux_id')->constrained('niveauxs');
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
        Schema::dropIfExists('fiches');
    }
}

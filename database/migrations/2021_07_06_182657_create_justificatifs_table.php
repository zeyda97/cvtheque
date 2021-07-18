<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justificatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_justificatif_id')->constrained('type_justificatifs');
            $table->string('fichier');
            $table->foreignId('experience_id')->constrained('experiences');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('langue_id')->constrained('langues');
            $table->foreignId('competence_id')->constrained('competences');
            $table->foreignId('formation_id')->constrained('formations');
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
        Schema::dropIfExists('justificatifss');
    }
}

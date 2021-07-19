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
            $table->foreignId('experience_id')->nullable()->constrained('experiences');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('langue_id')->nullable()->constrained('langues');
            $table->foreignId('competence_id')->nullable()->constrained('competences');
            $table->foreignId('formation_id')->nullable()->constrained('formations');
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

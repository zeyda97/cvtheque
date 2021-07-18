<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_experience_id')->constrained('type_experiences');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('employeur');
            $table->string('lieu_experience');
            $table->string('client_prestation');
            $table->foreignId('poste_id')->constrained('postes');
            $table->string('activite_experience');
            $table->string('appreciation');

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
        Schema::dropIfExists('experiences');
    }
}

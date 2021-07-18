<?php

namespace Database\Factories;

use App\Models\Fiche;
use Illuminate\Database\Eloquent\Factories\Factory;

class FicheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fiche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
        'prenom' => $this->faker->word,
        'objet_contrat_id' => $this->faker->word,
        'date_debut_contrat' => $this->faker->word,
        'date_fin_contrat' => $this->faker->word,
        'motif_contrat_id' => $this->faker->word,
        'memo_fin_contrat' => $this->faker->text,
        'prolongation' => $this->faker->word,
        'motif_prolongation' => $this->faker->text,
        'duree_prolongation' => $this->faker->randomDigitNotNull,
        'debut_periode_prolongation' => $this->faker->word,
        'fin_periode_prolongation' => $this->faker->word,
        'autre_equipement-travail' => $this->faker->word,
        'code_ethique' => $this->faker->word,
        'reglement_interieur' => $this->faker->word,
        'engagement_confidentialite' => $this->faker->word,
        'procedure' => $this->faker->word,
        'sensibilisation_qualite' => $this->faker->word,
        'signataire_sensibilisation_qualite' => $this->faker->word,
        'date_sensibilisation_qualite' => $this->faker->word,
        'commentaire_sensibilisation_qualite' => $this->faker->text,
        'sensibilisation_risque' => $this->faker->word,
        'signataire_sensibilisation_risque' => $this->faker->word,
        'date_sensibilisation_risque' => $this->faker->word,
        'commentaire_sensibilisation_risque' => $this->faker->text,
        'visa_direction_accueil' => $this->faker->word,
        'signataire_visa_direction_accueil' => $this->faker->word,
        'date_visa_direction_accueil' => $this->faker->word,
        'commentaire_visa_direction_accueil' => $this->faker->text,
        'visa_rh' => $this->faker->word,
        'signataire_visa_rh' => $this->faker->word,
        'date_visa_rh' => $this->faker->word,
        'commentaire_date_visa_rh' => $this->faker->text,
        'niveaux_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

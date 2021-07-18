<?php

namespace Database\Factories;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_candidature_id' => $this->faker->word,
        'genre_id' => $this->faker->word,
        'date_naissance' => $this->faker->word,
        'lieu_naissance' => $this->faker->text,
        'nationalite_id' => $this->faker->word,
        'nombre_enfant' => $this->faker->randomDigitNotNull,
        'numero_telephone' => $this->faker->word,
        'deuxieme_numero_telephone' => $this->faker->word,
        'deuxieme_email' => $this->faker->word,
        'site_web' => $this->faker->word,
        'poste_id' => $this->faker->word,
        'statut_id' => $this->faker->word,
        'situation_matrimoniale_id' => $this->faker->word,
        'type_metier_id' => $this->faker->word,
        'localisation' => $this->faker->word,
        'user_id' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

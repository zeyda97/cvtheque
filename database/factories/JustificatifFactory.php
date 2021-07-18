<?php

namespace Database\Factories;

use App\Models\Justificatif;
use Illuminate\Database\Eloquent\Factories\Factory;

class JustificatifFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Justificatif::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_justificatif_id' => $this->faker->word,
        'fichier' => $this->faker->word,
        'experience_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'langue_id' => $this->faker->word,
        'competence_id' => $this->faker->word,
        'formation_id' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

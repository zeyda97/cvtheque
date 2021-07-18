<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_experience_id' => $this->faker->word,
        'date_debut' => $this->faker->word,
        'date_fin' => $this->faker->word,
        'employeur' => $this->faker->word,
        'lieu_experience' => $this->faker->word,
        'client_prestation' => $this->faker->word,
        'poste_id' => $this->faker->word,
        'activite_experience' => $this->faker->word,
        'appreciation' => $this->faker->word,
        'user_id' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

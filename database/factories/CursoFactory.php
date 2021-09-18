<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'codigo'=>substr($this->faker->sentence(1),1,11),
           'nombre'=>substr($this->faker->sentence(1),1,20),
           'estado'=>'1',
        ];
    }
}

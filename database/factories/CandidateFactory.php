<?php

namespace Database\Factories;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'nric' => $this->faker->numerify('######-##-####'),
            'phone_number' => '0'.$this->faker->numberBetween($min = 10, $max = 19).'-'.$this->faker->randomNumber($nbDigits = 7, $strict = true),
            'gender' => $this->faker->randomElement($array = array ('Male','Female')),
            'race' => $this->faker->randomElement($array = array ('Malay','Chinese','India')),
            'email' => $this->faker->unique()->safeEmail,
            'created_by' => 1,
            'marital_status' => $this->faker->randomElement($array = array ('Married','Single','Widow/Widower')),
            'expected_salary' => $this->faker->numberBetween($min = 10, $max = 99).'00',
            'status_id' => $this->faker->randomElement($array = array (NULL,1,2,3,4))
        ];
    }
}

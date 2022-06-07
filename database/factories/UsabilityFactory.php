<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UsabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'users_id' => User::factory(),
                'q1' => mt_rand(0,1),
                'q2' => mt_rand(0,1),
                'q3' => mt_rand(0,1),
                'q4' => mt_rand(0,1),
                'q5' => mt_rand(0,1),
                'q6' => mt_rand(0,1),
                'q7' => mt_rand(0,1),
                'q8' => mt_rand(0,1),
                'q9' => mt_rand(0,1),
                'q10' => mt_rand(0,1),
            ];
    }
}

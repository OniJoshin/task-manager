<?php

namespace Database\Factories;

use App\Models\ProjectGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectGroupFactory extends Factory
{
    protected $model = ProjectGroup::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->bs,
            'description' => $this->faker->sentence,
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}

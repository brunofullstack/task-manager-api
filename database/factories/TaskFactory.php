<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
    	return [
    	    'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph,
    	];
    }
}

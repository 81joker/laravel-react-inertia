<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'project/imag1/image1.png',
            'project/imag2/image2.png',
            'project/imag3/image3.png',
            'project/imag4/image4.png',
            'project/imag5/image5.png',
            'project/imag6/image6.png',
            'project/imag7/image7.png',
            'project/imag8/image8.png',
            'project/imag9/image9.png',
            'project/imag10/image10.png'];

        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'image_path' => $this->faker->randomElement($images), 
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}

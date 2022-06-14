<?php

namespace Database\Factories;

use App\Models\Wbs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wbs>
 */
class WbsFactory extends Factory
{
    protected $model = Wbs::class;
    public function definition()
    {
        return [
            'site_id' => $this->faker->randomNumber,
            'site_name' => $this->faker->title,
            'project_budget' => $this->faker->title,
            'regional' => $this->faker->title,
            'site_type' => $this->faker->title,
            'survey_date' => $this->faker->date,
            'consultant' => $this->faker->title,
            'cons_pic_name' => $this->faker->title,
            'tower' => $this->faker->title,
            'tower_height' => $this->faker->randomNumber,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unique'=>$this->faker->regexify('[A-Za-z0-9]{0,10}'),
            // 'name'=>$this->faker-> name()
        ];
    }
    public function newTitle()
    {
        return $this->state([
            'unique'=>'',
            // 'name'=>''
        ]);
    }
}

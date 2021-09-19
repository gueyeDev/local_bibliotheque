<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'author_id'=>$this->faker->randomDigitNotZero(),
            'description'=>$this->faker->paragraph(),
            'date_of_publication'=>$this->faker->date(),
            'created_at'=>now(),
            //
        ];
    }
}

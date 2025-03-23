<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_make' => $this->faker->randomElement(['Toyota', 'Ford', 'Honda', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen', 'Nissan', 'Hyundai']),
            'car_model' => $this->faker->randomElement(['Corolla', 'Civic', 'Mustang', 'Camaro', 'X5', 'C-Class', 'A4', 'Golf', 'Sentra', 'Elantra']),
            'car_year' => $this->faker->numberBetween(2000, date('Y')), // Años entre 2000 y el año actual
            'car_price' => $this->faker->randomFloat(2, 5000, 50000), // Precio entre $5,000 y $50,000
            'car_status' => $this->faker->boolean(80), // 80% de probabilidad de que sea true (disponible)
        ];
    }
}
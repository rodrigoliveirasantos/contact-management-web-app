<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function App\Support\str_only_numbers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /* Limita o tamanho do telefone para 9, que é o tamanho limite do telefone */
        $phone =  substr(str_only_numbers(fake()->phoneNumber()), 0, 9);
        return [
            'name' => fake()->name(),
            'contact' => $phone,
            'email' => fake()->email()
        ];
    }
}

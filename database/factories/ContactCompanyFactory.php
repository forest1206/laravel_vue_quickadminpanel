<?php

namespace Database\Factories;

use App\Models\ContactCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'company_address' => $this->faker->address,
            'company_website' => $this->faker->url,
            'company_email' => $this->faker->unique()->safeEmail,
        ];
    }
}

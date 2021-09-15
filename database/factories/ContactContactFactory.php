<?php

namespace Database\Factories;

use App\Models\ContactContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => 1,
            'contact_first_name' => $this->faker->firstName,
            'contact_last_name' => $this->faker->lastName,
            'contact_phone_1' => $this->faker->phoneNumber,
            'contact_phone_2' => $this->faker->phoneNumber,
            'contact_email' => $this->faker->email,
            'contact_skype' => $this->faker->userName,
            'contact_address' => $this->faker->address,
        ];
    }
}

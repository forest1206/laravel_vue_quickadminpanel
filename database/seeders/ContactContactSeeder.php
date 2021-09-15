<?php

namespace Database\Seeders;

use App\Models\ContactCompany;
use App\Models\ContactContact;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ContactContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = ContactContact::factory()->count(100)
            ->state(new Sequence(
                function ($sequence) {
                    return ['company_id' => ContactCompany::all()->random()];
                }
            ))
            ->create();
    }

}

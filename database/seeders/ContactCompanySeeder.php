<?php

namespace Database\Seeders;

use App\Models\ContactCompany;
use Illuminate\Database\Seeder;

class ContactCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = ContactCompany::factory()->count(10)->create();;
    }
}

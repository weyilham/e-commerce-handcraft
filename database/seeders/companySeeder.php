<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Company::create([
            'name' => 'PT. ABC',
            'email' => 'bHnDn@example.com',
            'logo' => 'logo.png',
            'website' => 'www.abc.com',
            'description' => 'Company ABC',
            'address' => 'Jl. ABC'
        ]);
    }
}

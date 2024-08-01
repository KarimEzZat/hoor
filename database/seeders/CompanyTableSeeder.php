<?php

namespace Database\Seeders;

use App\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'حور للدعاية والإعلان والطباعة بالرياض',
            'description' => 'حور للدعاية والإعلان والطباعة بالرياض',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'phone' => '966541465165',
            'photo' => 'عن الشركة'
        ]);
    }
}

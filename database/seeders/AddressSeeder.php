<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert([
            'email' => 'info@kamilotour.com',
            'tel' => '+251-11-111111',
            'tel2' => '+251-9122222',
            'address1' => 'lebu Addis Ababa',
            'address2' => '',
            'city' => 'Addis Ababa',
            'country' => 'Ethiopia',
            'fax' => '+251-11-111111',
            'facebook' => 'https://facebook.com/kamilo',
            'twitter' => 'https://twitter.com/kamilo',
            'instagram' => 'https://instagram.com/kamilo',

        ]);
    }
}

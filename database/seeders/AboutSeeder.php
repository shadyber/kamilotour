<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('abouts')->insert([
            'name' => 'Kamilo Tour and Travel Agency',
            'about' => 'Kamilo Tour and Travel Agency has a remarkable history and growth graph ever since it’s inception way back in the year 2000. as a tour operator offering private and customized tour packages in Ethiopia. We are  licensed by Ethiopian Tourism Regulatory Authority to offer Tours and travels.',
            'mission' => 'Dedicated to creating fun, enjoyable and relaxing experiences for our leisure clients and timely, no-nonsense travel for our business clients.
            To offer our clients with the best travel experience they wished to have when booking the trip.
            Improve the overall standard of the tourism industry in the country.',
            'vision' => 'To promote sustainable tourism in Ethiopia
            To promote environmental friendly travels
            To make sure that all members of the society around the attractions benefit from the industry
            To play a major role in making the country one of the middle income countries by 2025',

            'photo' => '/img/banner.jpg',
            'video' => 'https://youtube.com/watch/kamilo',

        ]);
    }
}

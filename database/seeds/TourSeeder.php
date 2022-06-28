<?php

use Illuminate\Database\Seeder;
use App\Models\Tour;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'name' => 'Tour del Monte Ubione',
                'distance' => 38,
                'altitude_delta' => 800,
                'duration' => '3.5 ore',
                'link_gps' => '',
                'description' => 'Lorem ipsum',
                'map_image' => '',
                'altimetry_image' => '',
            ],
        ];

        foreach ($tours as $tour){
            $_tour = new Tour();
            $_tour->name = $tour['name'];
            $_tour->slug = Str::slug($_tour->name, '-');
            $_tour->distance = $tour['distance'];
            $_tour->altitude_delta = $tour['altitude_delta'];
            $_tour->duration = $tour['duration'];
            $_tour->link_gps = $tour['link_gps'];
            $_tour->description = $tour['description'];
            $_tour->map_image = $tour['map_image'];
            $_tour->altimetry_image = $tour['altimetry_image'];
            $_tour->save();
        
    }
    }
}

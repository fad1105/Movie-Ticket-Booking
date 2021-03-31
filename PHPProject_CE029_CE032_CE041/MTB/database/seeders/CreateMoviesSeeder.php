<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class CreateMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $movie = [

        	[
               'movie_name'=>'Roohi',
               'language'=>'Hindi',
               'trailer_link'=>'https://www.youtube.com/embed/mTT_V0t89MI',
               'cinema_tags'=> 'BollyWood',
               'genres' => 'Horrer',
               'release_date' => '2021-02-12',
               'duration' => '03:00:00',
               'image_url' => 'https://d18hry5vavz86j.cloudfront.net/movieimages/14c1a4a7-8689-4b56-ae5c-4cd51f6b359a_240x297.jpg',
           ],

           [
               'movie_name'=>'Bahubali 2',
               'language'=>'Hindi',
               'trailer_link'=>'https://www.youtube.com/embed/G62HrubdD6o',
               'cinema_tags'=> 'TollyWood',
               'genres' => 'Action',
               'release_date' => '2017-04-28',
               'duration' => '02:40:02',
               'image_url' => 'https://stat1.bollywoodhungama.in/wp-content/uploads/2016/03/Baahubali-2-The-Conclusion-2.jpg',
           ],

            ];

            foreach ($movie as $key => $value) {
            	Movie::create($value); }
    }

}

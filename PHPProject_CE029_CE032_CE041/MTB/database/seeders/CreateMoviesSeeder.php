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
               'trailer_link'=>'https://www.youtube.com/watch?v=mTT_V0t89MI',
               'cinema_tags'=> 'HollyWood',
               'genres' => 'Horrer',
               'release_date' => '2021-02-12',
               'duration' => '03:00:00' 
           ],

           [
               'movie_name'=>'Bahubali 2',
               'language'=>'Hindi',
               'trailer_link'=>'https://www.youtube.com/watch?v=G62HrubdD6o',
               'cinema_tags'=> 'TollyWood',
               'genres' => 'Action',
               'release_date' => '2017-04-28',
               'duration' => '02:40:02' 
           ],

            ];

            foreach ($movie as $key => $value) {
            	Movie::create($value); }
    }
}

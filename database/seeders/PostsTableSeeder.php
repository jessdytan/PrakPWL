<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts =[];
        $faker =Factory::create();
        $author_id = DB::table('users')->pluck('id');
        
        for($i =1;$i <= 10 ;$i++)
        {
            $posts[] =[
                'title' => $faker->sentence($nbWords=5,$variableNbWords = true),
                'excerpt' => $faker-> text($maxNbChars=100),
                'content' => $faker->paragraph(5,true),
                'image' => $faker->image('public/storage/images',640,480,null,false),
                'author_id' =>$faker->randomElement($author_id),
                'updated_at' =>$faker->dateTime($max='now',$timezone=null),
                'created_at' =>$faker->dateTime($max='now',$timezone=null),
            ];
        }
        DB::table("posts")->insert($posts);
    }
}

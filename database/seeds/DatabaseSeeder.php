<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(App\Photo::class, 10)->create();

        // create some extra posts
        factory(App\BlogPost::class, 'extraPosts', 5)->create();
        
        factory(App\Photo::class, 'extraPhotos', 5)->create();

        $this->call('FeaturedBlogsSeeder');
        
        $this->call('CountriesTableSeeder');        

        Model::reguard();
    }
}

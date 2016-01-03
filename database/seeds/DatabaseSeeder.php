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

        factory(App\BlogPost::class, 10)->create();

        // create some extra posts
        factory(App\BlogPost::class, 'extraPosts', 10)->create();

        factory(App\BlogPost::class, 20)->create();

        $this->call('FeaturedBlogsSeeder');
        
        $this->call('CountriesTableSeeder');        

        Model::reguard();
    }
}

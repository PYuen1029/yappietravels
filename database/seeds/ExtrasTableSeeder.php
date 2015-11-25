<?php

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(1)
        	]);

        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(1)
        	]);

        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(1)
        	]);

        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(3)
        	]);

        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(4)
        	]);

        factory('App\Post')->create([
        	'blog_id' => App\Blog::findOrFail(4)
        	]);


        
    }
}

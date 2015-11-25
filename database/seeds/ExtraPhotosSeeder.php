<?php

use Illuminate\Database\Seeder;

class ExtraPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(2)->id
        	]);

        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(2)->id
        	]);

        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(1)->id
        	]);

        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(6)->id
        	]);

        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(4)->id
        	]);

        factory('App\Photo')->create([
        	'blog_post_id' => App\BlogPost::findOrFail(8)->id
        	]);
    }
}

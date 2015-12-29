<?php

use Illuminate\Database\Seeder;

class MorePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BlogPost::class, 'extraPosts', 15)->create([
        	'blog_id' => 10
        	]);
    }
}

<?php

use Illuminate\Database\Seeder;

class FeaturedBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog1 = App\Blog::findOrFail(1);
        $blog1->featured = true;
        $blog1->save();

        $blog2 = App\Blog::findOrFail(3);
        $blog2->featured = true;
        $blog2->save();

        $blog3 = App\Blog::findOrFail(4);
        $blog3->featured = true;
        $blog3->save();
        
        $blog4 = App\Blog::findOrFail(8);
        $blog4->featured = true;
        $blog4->save();
        
        $blog5 = App\Blog::findOrFail(12);
        $blog5->featured = true;
        $blog5->save();

    }
}

<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' 				=> $faker->name,
        'email' 			=> $faker->email,
        'password' 			=> bcrypt(str_random(10)),
        'remember_token' 	=> str_random(10),
        'hometown'          => $faker->city,
        'brief_description' => $faker->paragraph(5),
        'age'               => $faker->numberBetween(20, 50),
        'profile_pic'       => $faker->imageUrl(600, 450, 'people', true),
    ];
});

$factory->define(App\Blog::class, function (Faker\Generator $faker){
	return[
		'name' 				=> $faker->sentencenoperiod($nbWords = 4),
		'tagline' 			=> $faker->sentencenoperiod($nbWords = 13),
		'user_id' 			=> factory('App\User')->create()->id,
        'author'            => $faker->name,
	];
});

$factory->define(App\BlogPost::class, function (Faker\Generator $faker){
    return[
        'published_at'      => Carbon\Carbon::now(),
        
        'title'				=> $faker->sentencenoperiod(8),
        'tagline'			=> $faker->sentencenoperiod(13),
        'content'			=> $faker->paragraphs(4, true),
        'featured_image'    => $faker->imageUrl(600, 350, 'city', true),
        'blog_id'			=> factory('App\Blog')->create()->id,

    ];
});


$factory->defineAs(App\BlogPost::class, 'extraPosts', function ($faker) {
    return [
        'published_at'      => Carbon\Carbon::now(),
        
        'title'             => $faker->sentencenoperiod($nbWords=8),
        'tagline'           => $faker->sentencenoperiod($nbWords=13),
        'content'           => $faker->paragraphs($nb = 3, true),
        'featured_image'    => $faker->imageUrl(600, 350, 'city', true),
        'blog_id'           => App\Blog::findOrFail($faker->numberBetween($min = 1, $max = 10))->id,
    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker){
    return[
		'path'    			=> $faker->imageUrl(800, 640, 'city', true),
		'thumbnail_path'	=> $faker->imageUrl(800, 640, 'city', true),

		'blog_post_id'		=> factory('App\BlogPost')->create()->id,

    ];
});

$factory->defineAs(App\Photo::class, 'extraPhotos', function ($faker) {
    return [
        'path'              => $faker->imageUrl(800, 640, 'city', true),
        'thumbnail_path'    => $faker->imageUrl(800, 640, 'city', true),

        'blog_post_id'      => App\BlogPost::findOrFail($faker->numberBetween($min = 1, $max = 10))->id,
    ];
});



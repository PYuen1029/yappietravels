<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' 				=> $faker->name,
        'email' 			=> $faker->email,
        'password' 			=> bcrypt(str_random(10)),
        'remember_token' 	=> str_random(10),
    ];
});

$factory->define(App\Blog::class, function (Faker\Generator $faker){
	return[
		'name' 				=> $faker->sentence($nbWords = 4),
		'tagline' 			=> $faker->sentence($nbWords = 13),
		'user_id' 			=> factory('App\User')->create()->id,

	];
});

$factory->define(App\BlogPost::class, function (Faker\Generator $faker){
    return[
        'published_at'      => Carbon\Carbon::now(),
        
        'title'				=> $faker->sentence($nbWords=8),
        'tagline'			=> $faker->sentence($nbWords=13),
        'content'			=> $faker->paragraphs($nb = 3, true),

        'blog_id'			=> factory('App\Blog')->create()->id,

    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker){
    return[
		'path'    			=> $faker->imageUrl(800, 640, 'city', true),
		'thumbnail_path'	=> $faker->imageUrl(800, 640, 'city', true),

		'blog_post_id'		=> factory('App\BlogPost')->create()->id,

    ];
});




<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // SOME TIMESTAMPS FOR BLOG POSTS
            $table->timestamp('published_at');

            // THE ACTUAL CONTENT
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->string('content');
            $table->string('featured_image');

            // FOREIGN KEY FOR blog
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')
                    ->references('id')->on('blogs')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_posts');
    }
}

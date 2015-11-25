@extends('app')

@section('title')
Yappie Travels: Index
@stop

@section('css')
@stop

@section('js')
@stop

@section('content')
    <!-- masthead -->
    <div class="jumbotron">
        <div class="container">
            <h1>Yappie Travels</h1>
            <p>Post your adventures, you crazy 20-something</p>

        </div>
    </div>

    <!-- three collumns with sufficient margins for list of countries -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"> COUNTRIES </div>
            <div class="panel-body">
                <div class="row row-margin-left">
                    <?php foreach($countryList as $countryListNum): ?>
                        <div class="col-sm-{{ 12/$numRows }} list-group">
                            <?php foreach($countryListNum as $country): ?>
                                <a href="#" class="list-group-item">{{ $country->name }} </a>

                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                
                </div>
            </div>
        </div>
    </div>

    <!-- two collumns for featured blogs / recent posts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"> FEATURED BLOGS</div>
                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($featuredBlogs as $featuredBlog)
                                <a href="#" class="list-group-item">{{ $featuredBlog->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"> RECENT POSTS</div>
                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($recentPosts as $recentPost)
                                <a href="#" class="list-group-item">{{ $recentPost->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
@stop
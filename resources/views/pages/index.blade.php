@extends('app')

@section('css')
@stop

@section('js')
@stop

@section('content')
    <!-- masthead -->
    <div class="jumbotron">
        <div class="container">
            <h1>Yappie Travels</h1>
            <p>Post your travel experiences for others to see.</p>

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
                        <ul class="list-group">
                            <li class="list-group-item">Some Example Blog</li>
                            <li class="list-group-item">Some Example Blog</li>
                            <li class="list-group-item">Some Example Blog</li>
                            <li class="list-group-item">Some Example Blog</li>
                            <li class="list-group-item">Some Example Blog</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"> FEATURED BLOGS</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">Some Example Post</li>
                            <li class="list-group-item">Some Example Post</li>
                            <li class="list-group-item">Some Example Post</li>
                            <li class="list-group-item">Some Example Post</li>
                            <li class="list-group-item">Some Example Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
@stop
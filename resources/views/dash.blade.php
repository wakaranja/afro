@extends('myhome')
@section('content')
<div class="jumbotron header-background">
    <h1 class="afro-heading">Welcome to Africa Policy Review</h1>
    <p class="afro-heading">The Journal of Africa Policy</p>
    <p></p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-3">
            <div><img class="img-responsive" src="assets/img/china.jpg" alt="China" width="300" height="250"></div>
        </div>
        <div class="col-md-9">
            <h2 class="afro-title"><a href="{{ url('article',[$latest->id]) }}">{{ $latest->title }}</a></h2></div>
        <div class="col-md-9">
            <p class="afro-paragraph">{{ $latest->excerpt }}</p>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="afro-panel-title">Latest Submissions </h3></div>
                    <div class="panel-body"><span>
                      @foreach($articles as $article)
                          <p class="afro-paragraph"><a href="#">{{ $article->title }}</a></p>
                      @endforeach
                      </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="afro-panel-title">Most Viewed</h3></div>
                    <div class="panel-body"><span>
                      @foreach($populars as $popular)
                          <p class="afro-paragraph"><a href="#">{{ $popular->title }}</a></p>
                      @endforeach
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="afro-panel-title">Categories </h3></div>
                    <div class="panel-body"><span>Categories covered. </span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Contributors </h1>
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <div class="card">
                            <div class="card-image"><img class="img-responsive" src="assets/img/materialdesign_devices.png"><span class="card-title">Material Cards</span></div>
                            <div class="card-content">
                                <p>Contributor's details. Qualification and other relevant information.</p>
                            </div>
                            <div class="card-action"><a href="#" target="_blank">Link</a><a href="#" target="_blank">Link</a><a href="#" target="_blank">Link</a><a href="#" target="_blank">Link</a><a href="#" target="_blank">Link</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

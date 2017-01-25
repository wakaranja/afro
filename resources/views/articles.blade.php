@extends('layouts.app')

@section('content')
<div class="afro-front-image">
  <div class="afro-landing-header">
    Welcome to Africa Policy Review
  </div>

</div>
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        Details go here.
      </div>
      <div class="col-md-8">
        @foreach($articles as $article)
          <b><h3 class="afro-title">{{$article->title}}</h3></b><p>
            <b>Views: </b> {{$article->views}} | <b>Published: </b>{{$article->created_at}}<hr>
          {{$article->excerpt}}<hr>
          {{$article->body}}


        @endforeach
      </div>

    </div>

  </div>
@endsection

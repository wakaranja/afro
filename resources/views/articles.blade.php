@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @foreach($articles as $article)
          <b><h3>{{$article->title}}</h3></b><p>
            <b>Views: </b> {{$article->views}} | <b>Published: </b>{{$article->created_at}}<hr>

          {{$article->body}}
        @endforeach
      </div>

    </div>

  </div>
@endsection

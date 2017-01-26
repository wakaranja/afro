@extends('layouts.app')

@section('content')

      <div class="col-md-8 col-md-offset-2">

          <h3 class="afro-title">{{ $article->title }}</h3><p>
          <b>Views: </b> {{$article->views}} | <b>Published: </b>{{$article->created_at}}<hr>
          {{$article->body}}

      </div>


@endsection

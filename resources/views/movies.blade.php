@extends('layouts.app')

@section('main')
  <h1>MOVIES</h1>
  <div class="card-wrapper">
    @foreach ($movies as $movie)
    <div class="card">
      <h3>{{$movie->title}}</h3>
      <h4>{{$movie->original_title}} - ({{$movie->date}})</h4>
      <p>Nationality: {{$movie->nationality}}</p>
      <p>Vote: {{$movie->vote}}</p>
    </div>
  @endforeach
</div>
@endsection

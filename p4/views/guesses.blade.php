@extends('templates.master')

@section('title')
All Guesses
@endsection

@section('content')

@if($app->old('guessNotFound'))

<div class='alert alert-warning'>
    Sorry, the guess you were looking for is not available.
</div>
@endif

<h2>All Guesses</h2>

<ul>
    @foreach($guesses as $guess)
    <li><a href='/guess?id={{ $guess["id"] }}'>{{ $guess['name'] }}</li></a>
    @endforeach
</ul>

@endsection
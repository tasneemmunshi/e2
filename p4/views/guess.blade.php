@extends('templates.master')

@section('title')
{{ $guess['name'] }}
@endsection

@section('content')

<h2>{{ $guess['name'] }}</h2>

<p>
    {{ $guess['response'] }}
</p>

<a href='/guesses'>&larr; All guesses</a>

@endsection
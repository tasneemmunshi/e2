@extends('templates.master')

@section('title')
All Guesses
@endsection

@section('content')

<h2>All Guesses</h2>

</ul>
@foreach($guesses as $guess)
<li>{{ $guess['name'] }}</li>
@endforeach
</ul>

@endsection
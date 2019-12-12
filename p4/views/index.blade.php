@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

<form>
    <h1>A Halloween Riddle!</h1>

    <p><i>What is a ghost's favorite dessert?</i></p>
    <h2>Instructions</h2>
    <ul>
        <li>Using the hints, guess the Halloween Riddle</li>
        <li>Keep in mind, the answer is tailored to fit a halloween-theme, so think creatively!
        <li>Here is an example:<br><i>Riddle: What does a witch use in her hair?<br> Response: scare spray</i></li>
        <li>As you can see, the normal response would have been "hair spray", but we tweaked it to fit a halloween-theme
            :)</li><br>
        Good luck!
    </ul>
    <h3>Helpful hints:</h3>
    <ul>
        <li>It's cold</li>
        <li>Comes in all sorts of flavors</li>
        <li>Rhymes with the word dream</li>
    </ul>

    <label for='response'>Your guess:</label><br>
    <input type='text' name='response' id='response'><br>
    <label for='name'>Your name (include first name & last name):</label><br>
    <input type='text' name='name' id='name'><br>

    <button type='submit'>Submit</button>
</form>

@endsection
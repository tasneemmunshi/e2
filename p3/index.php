<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>P3 Application</title>
    <meta charset='utf-8'>

</head>

<body>

    <form method='GET' action='process.php'>
        <h1>A Halloween Riddle!</h1>

        <p><i>What is a ghost's favorite dessert?</i></p>
        <h2>Instructions</h2>
        <ul>
            <li>Using the hints, guess the Halloween Riddle</li>
            <li>Keep in mind, the answer is tailored to fit a halloween-theme, so think creatively!
            <li>Here is an example:<br><i>Riddle: What does a witch use in her hair?<br> Response: scare spray</i></li>
            <li>As you can see, the normal response would have been "hair spray", but we tweaked it to fit a halloween-theme :)</li><br>
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

        <button type='submit'>Submit</button>
    </form>

    <?php if($showResults) { ?>
        <?php if ($correct) { ?>
        That's correct!
        <?php } else { ?>
        Boo :( Please guess again!
        <?php } ?>
    <?php } ?>

</body>

</html>
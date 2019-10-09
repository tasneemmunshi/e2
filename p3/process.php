<?php

session_start();

if ($_GET['response'] == 'ice scream') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['correct'] = $correct;
header('Location: index.php');
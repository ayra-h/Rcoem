<?php
include 'views/greet.view.php';

if (!empty($_POST)) { 
    $name = $_POST['name'];
    $food = $_POST['food'];
    $hour = $_POST['current_time']; 

    if ($hour >= 2 && $hour < 11) {
        $greeting = "Good Morning";
    } elseif ($hour >= 11 && $hour < 16) {
        $greeting = "Good Afternoon";
    } elseif ($hour >= 16 && $hour < 21) {
        $greeting = "Good Evening";
    } else {
        $greeting = "Good Night";
    }

    echo "<h2>$greeting $name. Your favorite food is $food.</h2>";
}
?>

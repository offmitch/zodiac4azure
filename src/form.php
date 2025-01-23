<?php
$zodiac = array(
    "Monkey",
    "Rooster",
    "Dog",
    "Pig",
    "Rat",
    "Ox",
    "Tiger",
    "Rabbit",
    "Dragon",
    "Snake",
    "Horse",
    "Goat"
);

if (isset($_POST['year'])) {
    $year = $_POST['year'];
    // year has to be between 1990 and 2025 to work
    if ($year < 1900 || $year > 2025) {
        echo "<div class='card alert alert-danger'>";
        echo "<p>Year must be between 1900 and next year. Please Try again.</p></div>";
    } else {
        $remainder = $year % 12;
        echo "<div class='card alert alert-success m-5' style='width: 18rem'>";
        echo "<h4>You were born in the year $year </h4>";
        echo "<p>Your zodiac is <b> " . $zodiac[$remainder] . " </b></p>";
        echo "<img src='images/" . strtolower($zodiac[$remainder]) . ".png' alt='" . $zodiac[$remainder] . "' 
            class='card-img-bot'> 
            </div>";
    }
}

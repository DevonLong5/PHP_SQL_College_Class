<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>No Soup For You!</title>
    </head>
    <body>
        <h1>Mmm...soups</h1>
    <?php

    $soups = [
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday'=> 'Vegetarian',
        'Thursday'=> 'Chicken Noodle',
        'Friday'=> 'Chicken Tortilla',
        'Saturday'=> 'Italian',
        'Sunday'=> 'Tomato',
    ];
    foreach ($soups as $day => $soup) {
        print "<p>$day: $soup</p>\n";
    }

    ?>
    </body>
</html>
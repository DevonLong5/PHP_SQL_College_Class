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
    ];
    
    $count1 = count($soups);
    print "<p>The soups array orginally had $count1 elements.</p>";

    $soups['Thursday'] = 'Chicken Noodle';
    $soups['Friday'] = 'Chicken Tortilla';
    $soups['Saturday'] = 'Italian';
    $soups['Sunday'] = 'Tomato';

    $count2 = count($soups);
    print "<p>After adding 4 more soups, the array now has $count2 elements.</p>";

    print_r($soups);
    ?>
    </body>
</html>
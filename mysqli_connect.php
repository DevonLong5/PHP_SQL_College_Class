<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
</head>
<body>
    <?php
        if ($dbc = @mysqli_connect('localhost', 'root', '_v(pMsy6Ns2zJijm', 'myblog')) {
            print '<p>Successfully connected to the database!</p>';
            mysqli_close($dbc);
        } else {
            print '<p style="color:red;">Could not connect to the database:<br>' . mysqli_connect_error() . '.</p>';
        }
    ?>
</body>
</html>
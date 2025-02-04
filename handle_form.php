<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php

ini_set('display_errors', 1);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
print "<p>First Name: $first_name";
print "<p>Last Name: $last_name";
?>
</body>
</html>
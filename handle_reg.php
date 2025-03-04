<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php

$okay = true;

if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email adress.</p>';
	$okay = false;
}

if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = false;
}

if ($_POST['password'] != $_POST['confirmed_password']) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = false;
}

if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	if ($_POST['year'] <= 2025) {
		$age = 2025 - $_POST['year'];
	} else {
		print'<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = false;
	}
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = false;
}

if ( !isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = false;
}

if ($_POST['color'] == 'red') {
    $color_type = 'primary';
} else if ($_POST['color'] == 'yellow') {
    $color_type = 'primary';
} else if ($_POST['color'] == 'green') {
    $color_type = 'secondary';
} else if ($_POST['color'] == 'blue') {
    $color_type = 'primary';
} else if ($_POST['color'] == 'orange') {
    $color_type = 'secondary';
} else if ($_POST['color'] == 'purple') {
    $color_type = 'secondary';
} else {
    print '<p class="error">Please select your favorite color.';
    $okay = false;
}

if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
    print "<p>Your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>
<doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php

//Strip away extra spaces using trim()
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);

//Create a full name variable:
$name = $first_name . " " .  $last_name;


//Get a word count:
$words = str_word_count($posting);

//Take out the bad words:
$posting = str_ireplace('badword', 'XXXXX', $posting);


//Print a message
print "<div>Thank you, $name, for your posting:
<p>$posting...</p>
<p>($words words)</p></div>";

?>
</body>
</html>
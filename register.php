<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<div><p>Please complete this form to register:</p>

	<form action="handle_reg.php" method="post">
		<p>Email Address: <input type="text" name="email" size="30"></p>
		<p>Password: <input type="password" name="password" size="20"></p>
		<p>Confirm Password: <input type="password" name="confirmed_password" size="20"></p>
		<p>Date Of Birth:
			<select name="month">
				<option value="">Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select name="day">
				<option value="">Day</option>
				<?php
				for ($i = 1; $i <=31; $i++) {
					print "<option value=\"$i\">$i</option>\n";
				}
				?>
			</select>
			<input type="text" name="year" value="YYYY" size="4">
		</p>
		
		<p>Favorite Color:
			<select name="color">
				<option value="">Pick One</option>
				<option value="red">Red</option>
				<option value="yellow">Yellow</option>
				<option value="green">Green</option>
				<option value="blue">Blue</option>
				<option value="orange">Orange</option>
				<option value="purple">Purple</option>
		</select>
	</p>
		
		<p><input type="checkbox" name="terms" value="Yes"> I agree to the terms (whatever they may be).</p>
		
		<input type="submit" name="submit" value="Register">
	
		<?php
		if (empty($_POST['email']) || (substr_count($_POST['email'], '@') !=1)){
			$body = "Thank you, {$_POST['first_name']}, for registering with the J.D. Salinger fan club!'."; mail($_POST['email'], 'Registration Confirmation', $body, 'From: admin@example.com');
			$_POST = [];
		} else {
			print'<p class="text--error">Please try again!</p>';
		}
	?>


		<?php include('templates/footer.html');?>
</form>
</div>
</body>
</html>
	
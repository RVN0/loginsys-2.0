<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login System</title>
</head>
<body>

	<h1>Welcome</h1>

	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>		
	</h2>

	<?php
// Show the error message if set
if (isset($_SESSION['error'])) {
    echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
    // Unset the error message after displaying it
    unset($_SESSION['error']);
}
	?>


	<?php
	// Show the form even if someone is logged in
	?>
	<h1>Fill in the input fields below</h1>
	
	<!-- Display the form -->
	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName" required></p>
		<p><input type="password" placeholder="Password here" name="password" required></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>

	<!-- Show logout link only if someone is logged in -->
	<?php if (isset($_SESSION['firstName'])): ?>
		<a href="unset.php">Logout</a>
	<?php endif; ?>

</body>
</html>

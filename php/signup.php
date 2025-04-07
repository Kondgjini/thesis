<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <center>
	<h1>Registration Form</h1>
	<form action="signupdone.php" method="post">
		<label for="firstname">First Name:</label>
		<input type="text" id="firstname" name="firstname" required placeholder="enter your first name"><br><br>

		<label for="lastname">Last Name:</label>
		<input type="text" id="lastname" name="lastname" required placeholder="enter your last name"><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required placeholder="enter your email"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required placeholder="enter your password"><br><br>

		<input type="submit" value="Submit">
    </center>
	</form>
</body>
</html>

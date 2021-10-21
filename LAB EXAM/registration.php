<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration form</title>
</head>
<body>
	<form action="loinin.php" method="post">

		ID:<input type="text" name="id"><br>

		Password:<input type="password" name="password"><br>

		Confirm Password:<input type="password" name="confirmpassword"><br>

		Name:<input type="text" name="name"><br>
		User Type:
		<input type="radio" name="usertype" value="user">User
		<input type="radio" name="usertype" value="admin">Admin
		<br><br>

		<input type="submit" name="submit" value="Signup">
		
	</form>

</body>
</html>
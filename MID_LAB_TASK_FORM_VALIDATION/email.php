<?php
$emailerr="";
$email="";
if($_SERVER['REQUEST_METHOD']=="post")
{
	if(empty($_POST['email']))
	{
		$emailerr="email required";
	}
	else
	{
		$email=test_input($_POST["email"]);

		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailerr="put the right form of email";

		}
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>email validation</title>
</head>
<body>
	<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >

		Email:<input type="text" name="email">
		<span class="error">*<?php echo $emailerr; ?></span>
		<input type="submit" name="submit" value="SUBMIT">

	</form>

	<?php
	 echo $email;
	 ?>

</body>
</html>
<?php
$doberr="";
$dob="";
if($_SERVER['REQUEST_METHOD']=="post")
{
	if(empty($_POST['date']))
	{
		$doberr="date of birth required";
	}
	else
	{
		$dob=test_input($_POST["date"]);

		if(!preg_match("^[0-9]*$", $dob))
		{
			$doberr="fill it again";

		}
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>date of birth validation</title>
</head>
<body>
	<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >

		Date Of Birth:<input type="date" name="date">
		<span class="error">*<?php echo $doberr; ?></span>
		<input type="submit" name="submit" value="SUBMIT">

	</form>

	<?php
	 echo $dob;
	 ?>

</body>
</html>
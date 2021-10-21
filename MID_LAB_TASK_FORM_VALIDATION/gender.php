<?php
$generr="";
$gen="";
if($_SERVER['REQUEST_METHOD']=="post")
{
	if(empty($_POST['gender']))
	{
		$generr="gender required";
	}
	else
	{
		$gen=test_input($_POST["gender"]);	
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gender validation</title>
</head>
<body>
	<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >

		Gender:
		<input type="radio" name="gender" value="male"> Male
		<input type="radio" name="gender" value="female"> Female
		<span class="error">*<?php echo $generr; ?></span>
		<input type="submit" name="submit" value="SUBMIT">

	</form>

	<?php
	 echo $gen;
	 ?>

</body>
</html>
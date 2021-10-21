<?php
$namerr="";
$name="";
if($_SERVER['REQUEST_METHOD']=="post")
{
	if(empty($_POST['name']))
	{
		$namerr="name required";
	}
	else
	{
		$name=test_input($_POST["name"]);

		if(!preg_match("^[a-zA-Z]*$", $name))
		{
			$namerr="name must contains letter";

		}
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>name validation</title>
</head>
<body>
	<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >

		Name:<input type="text" name="name">
		<span class="error">*<?php echo $namerr; ?></span>
		<input type="submit" name="submit" value="SUBMIT">

	</form>

	<?php
	 echo $name;
	 ?>

</body>
</html>
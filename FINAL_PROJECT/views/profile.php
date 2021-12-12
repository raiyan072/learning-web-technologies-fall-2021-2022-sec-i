<?php
  
     session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Profile</title>
  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
  <div align="center" style="background-color: lightgray;">
  <p>Give the best gift card to your client !!!!!!!!!</p>
	
  <nav>
  <ul>
  <li><a href="homepage.php"><b>Home</b></a> </li>
  <li><a href="transaction.php"><b>Transaction</b></a> </li>
  <li><a href="help.php"><b>Help</b></a></li> 
  <li><a href="add.php"><b>Add Gift Card</b></a> </li>
  <li><a href="contact.php"><b>Contact</b></a></li> 
  <li><a href="login.php"><b>Log Out</b></a> </li>
  <li><a href="store.php"><b>Store</b></a> </li>
  <li><a href="profile.php"><b>Profile</b></a></li>
</nav>
</ul>
    <!-- <h2>This is your Profile</h2> 
    </div>
    <div align="center";>
  <fieldset style="height: 200px; width: 50px; text-align: center; align-items: center; border:0">
    <table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?php echo $_SESSION["username"] ?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?php echo $_SESSION["password"] ?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?php echo $_SESSION["email"] ?>"></td>
				</tr>
			
			</table>
      </fieldset>
      </div> -->

      <div class="container">
        <form class="form" id="form" action="../controller/updateprofile.php"  method="post">
         <h1>Profile</h1>
         <div class="form-control">
          <label for="username">User Name</label>
          <input type="text" name="username" id="username" placeholder="Your User Name Here">
          
         </div>

         <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Your Password Here">
          
         </div>

         <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Your Email Here">
          
         </div>
         
        
         
         <!-- <div class="from-control">
        <label for="photo">Photo</label>
        <input type="file" accept="image/*" id="photo" name="photo">
       </div> -->
         <button type="submit" name="submit">Update Profile</button>
        </form>
       </div>
      
       <script>
         window.addEventListener('load', (event) =>
      {
       $requestData = 'data';
       
       let xhttp = new XMLHttpRequest();
       xhttp.open('POST', '../controller/viewprofile.php', true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send('data='+$requestData);
       
       xhttp.onreadystatechange = function()
       {
        if(this.readyState == 4 && this.status == 200)
        {
         let obj = JSON.parse(this.responseText);
         document.getElementById("username").value = obj.username;
         document.getElementById("password").value = obj.password;
         document.getElementById("email").value = obj.email;
         
        }
       }
      });
       </script>


</body>
</html>
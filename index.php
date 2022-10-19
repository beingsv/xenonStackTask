<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="head">
		<img src="assets/247.png" alt="24*7" height="70px" width="70px">
		<h1>Welcome to cars 24*7</h1>
	</div>
	
    <form action="login.php" method="post">
    	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
    </form>


	 <a href="contact.php" class="contact">Contact us</a>
</body>
</html>
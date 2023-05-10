<?php
require('db.php');
?>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style_login.css" />
		<link rel="icon" type="image/x-icon" href="favicon.ico">

		<title>ETE RS</title>

	</head>


	<body>
		
		<div class="main-body">
			
			<div class="intro_heading">
				
				<div class="top_par">
		
					<img src="images/logo.png" width="100%" class="top_logo">
					
					<h1 class="heading" align="center">ETE RESEARCH SOCIETY</h1>
			
				</div>
				
				<div align="center" class="motto"><a class="motto">Guiding the path to the light of knowledge through research</a></div>
			
			</div>
			<br>
			<br>
			<br>
			
			
			
			<?php
				require('db.php');
				session_start();

				if (isset($_POST['username'])){
					
					$username = stripslashes($_REQUEST['username']);
					$username = mysqli_real_escape_string($con,$username);
					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($con,$password);
					
					$query = "SELECT * FROM `register` WHERE username='$username' and password='".md5($password)."'";
					
					$result = mysqli_query($con,$query) or die(mysql_error());
					$rows = mysqli_num_rows($result);
						if($rows==1){
						$_SESSION['username'] = $username;
						
						while($row = $result->fetch_assoc()) {
							$_SESSION['id'] = $row["id"];
							$_SESSION['etersid'] = $row["etersid"];
							$_SESSION["loggedin"] = true;
						}
						
						
						header("Location: profile.php?Sigin_Success");
						 }else{
					echo "<div class='form'>
							<h3>Provided Username or password is incorrect.</h3>
							<br/>Click here to <a href='login.php'>Login</a></div>";
						}
					}

				
					else{
				?>
			
			
			
			
			<div class="form_holder">
				
				<form action="" method="post" name="signin">
					
					<h2>Welcome back</h2>
					
					<div class="input-container">
						
						<input class="input-field" type="text" placeholder="Username" name="username" required>
					</div>

					<div class="input-container">
						
						<input class="input-field" type="text" placeholder="ETERS ID" name="etersid" required>
					</div>

					<div class="input-container">
						
						<input class="input-field" type="password" placeholder="Password" name="password" required>
					</div>
					
						<p class="profile_text"><button type="submit" class="button_panel">Sign in</button></a></p>
					
				</form>
				
				<br><br>
				
				<p class="profile_text">
				
					<b><a style="color: red;">*</a></b> In case of forgetting your password, please contact the webmaster.
					
					<br>					
						
					<b><a style="color: red;">*</a></b>To open an account, please contact the coordinator.
						
					
				</p>
			
			</div>
			
					<?php } ?>
			
			
			
			
			
			
			
			
			
		</div>
	</body>
</html>
<?php 

require('db.php');
include("auth.php");

/*
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: login.php");
  exit;
}
*/
?>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style_profile.css" />
		<link rel="icon" type="image/x-icon" href="favicon.ico">

		<title>ETE RS</title>

	</head>


	<body>
		
		<div class="main-body">
			
			<h3 align="center">Welcome to</h3>
			
			<div class="intro_heading">
				
				<div class="top_par">
		
					<img src="images/logo.png" width="100%" class="top_logo">
					
					<span class="top_par_head">
					
						<h1 class="heading" align="center">ETE RESEARCH SOCIETY</h1>
			
					</span>

				</div>
			
			</div>
			
			
			<div align="center" class="motto"><a class="motto">Guiding the path to the light of knowledge through research</a></div>
			
			<br>
		</div>

		<div class="topnav" id="myTopnav">
			<a class="active" href="#home">Home</a>
			<a href="panel.html">Executive Panel</a>
			<a href="membership.html">Membership & Benefits</a>
			<a href="about.events">Events</a>
			<a href="gallery.html">Gallery</a>
			<a href="articles.html">Articles</a>
			<a href="projects.html">Projects</a>
			<a href="prev_committee.html">Previous Executives</a>
			<?php 
			
				if($_SESSION["loggedin"]){
					echo "<a href='profile.php' style='background-color: blue;'>".$_SESSION['etersid']."</a>";
				}
				else{
			
			?>
				<a href="login.php">Sign in</a>
			<?php } ?>
			<a href="contact.html">Contact Us</a>
			
			<!-- <a href="javascript:void(0);" onclick="modeSwitch()"> Theme </a> -->
			
			<a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa-solid fa-bars"></i> </a>
		</div>
		
		
		<div class="hero-image">
			<div class="hero-text">
				<h1><?php echo $_SESSION['username']; ?></h1>
				<p><a class="motto">Born with a vision to grow and nurture the habit and passion of research among the students and guide those who are involved in research.</a>
				</p>
				<!--<button>Hire me</button>-->
			</div>
		</div>
		
		
		<div>
			<!--<h1 class="heading" align="center">INTRODUCING OURSELVES</h1>
			<p class="prologue">
				
				The first ever society of the Department of <a class="motto">Electronic and Telecommunication Engineering</a>,<br>established in 2022
				with a vision to grow and nurture the habit and passion of research among the students and guide those who are involved in research.<br><br>
				
				So far quite a few seminars, webinars and workshops have been arranged and each of them has seen an exceptionally high rate of participation among students.<br>
				<br>
				
				The society boasts a highly active executive panel consisting of an apt and dedicated team of ETE students and faculty members.<br>
			</p>
			
			-->
		
		</div>
		
		<p>
		<h1 align="center">PROFILE</h1>
		<h1 align="center"><a align="center" href="logout.php" style='background-color: yellow; color: black; margin: right;'><b>Sign Out</b></a></h1>
		
		</p>
		
		<footer>
		
			<div class="column">
			
				<h3 align="center"> <br> </h3>
				
				<ul align="left">
					
					<li><a class="footer_link" href="about.html" target="new">About Us</a></li>
					<li><a class="footer_link" href="contact.html" target="new">Contact Us</a></li>
					<li><a class="footer_link" href="#facebook" target="new">Facebook</a></li>
					<li><a class="footer_link" href="#WhatsApp" target="new">WhatsApp</a></li>
					
				</ul>
				
			</div>
			
			<div class="column">
				
				<h3 align="center"> <b>ETE RESEARCH SOCIETY</b></h3>
				
				<img src="images/iiuc-logo.jpg" id="footer_logo_iiuc">
				<img src="images/logo.jpg" class="footer_logo">
				
			</div>
			
			<div class="column">
			
				<h3 align="center"> <br> </h3>
				
				<!--<p>Ignorance leads to fear, fear leads to hate, and hate leads to violence. This is the equation. Ibn Rushd (Averroes)</p>-->
				<p class="qoute"><i>Knowledge without action is insanity</i><br>&<br><i>Action without knowledge is vanity</i><br><br>- Imam Al-Ghazali<p>
				
			</div>
			
			<div id="meta-links">
				All Rights Reserved &copy; | Built and Maintained by <b>ETE Reseasearch Society</b>
			</div>
		
		</footer>

		<script>
		
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
			
			function modeSwitch() {
				var element = document.body;
				element.classList.toggle("dark-mode");
			}
		
		</script>

	</body>

</html>
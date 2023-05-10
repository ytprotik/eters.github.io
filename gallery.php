<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style_gallery.css" />
		<link rel="icon" type="image/x-icon" href="favicon.ico">

		<title>ETERS Gallery</title>

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
		</div>
		
		<br>
		<div class="topnav" id="myTopnav">
			<a href="index.php">Home</a>
			<a href="panel.php">Previous Executives</a>
			<a href="membership.php">Membership & Benefits</a>
			<!--<a href="prev_committee.html">Previous Executives</a>-->
			<a href="events.php">Events</a>
			<a class="active" href="#gallery">Gallery</a>
			<a href="articles.php">Research Publications</a>
			<a href="projects.php">Projects</a>
			
			
			<a href="notice.php">Notice</a>
			<a href="login.php">Sign in</a>
			
			<a href="contact.php">Contact Us</a>
			
			<!-- <a href="javascript:void(0);" onclick="modeSwitch()"> Theme </a> -->
			
			<a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa-solid fa-bars"></i> </a>
		</div>
		
		<div class="main-body">
			<div class="intro_heading">
				
				<div class="top_par">
		
					<h1 class="heading" align="center">Previous Workshops and Seminars</h1>
			
				</div>
				
				
			</div>
		</div>

		
		<!-- ====================================== IMAGE SLIDESHOW GALLERY 1 ========================================================== -->
		
		<!-- Slideshow container -->
		<div class="slideshow-container">

		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="events/career_path.jpeg" style="width:100%">
			<div class="text">Discussion on Career Pathways</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img src="events/road_to_gre_ielts.jpeg" style="width:100%">
			<div class="text">Webinar on Roadmap to GRE and IELTS Success</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="events/write_research.jpeg" style="width:100%">
			<div class="text">Meaningful Way to Write Research</div>
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<!-- ===================================== IMAGE SLIDESHOW GALLERY 1 ENDS ======================================================== -->
		
		<!-- ===================================== IMAGE SLIDESHOW GALLERY 2 STARTS ====================================================== -->
		
		
		<div class="main-body">
			<div class="intro_heading">
				
				<div class="top_par">
		
					<h1 class="heading" align="center">Activities</h1>
			
				</div>
				
				
			</div>
		</div>
		
		<div style="text-align:center">
        <h1>GeeksforGeeks</h1>
          
        <h4>A Computer Science Portal for Geeks</h4>
				  
		<p>Tab Image Gallery</p>
		  
			</div>
		  
			<!-- gallery pic -->
			<div class="row">
				<div id="geeks">
					<img src="">
				</div>
		  
				<div class="column_tab_gal">
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20191129163105/geeksforgeeks_sale.png"	style="width:100%" onclick="gfg(this);">
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20191128181646/perl-Tutorial.png" style="width:100%" onclick="gfg(this);">
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20191127161209/BF-TokenMail-min-min.png" style="width:100%" onclick="gfg(this);">
				</div>
		  
				<div class="column">
					<span onclick=
						"this.parentElement.style.display='none'">
					</span>
					  
					<img id="expand" style="width:70%; height: 50%; margin-top: 15px;">
				</div>
			</div>
		
		<!-- ===================================== IMAGE SLIDESHOW GALLERY 2 ENDS ======================================================== -->
		
		
		<footer>
		
			<div class="column">
			
				<h3 align="center"> <br> </h3>
				
				<ul>
					
					<li><a class="motto" href="about.html" target="new">About Us</a></li>
					<li><a class="motto" href="contact.html" target="new">Contact Us</a></li>
					<li><a class="motto" href="#facebook" target="new">Facebook</a></li>
					<li><a class="motto" href="#WhatsApp" target="new">WhatsApp</a></li>
					
				</ul>
				
			</div>
			
			<div class="column">
				
				<h3 align="center"> ETE RS 	 </h3>
				
				<img src="images/logo.jpg" class="footer_logo">
				
			</div>
			
			<div class="column">
			
				<h3 align="center"> <br> </h3>
				
				<p>Here goes a qoute about research or something like that</p>
				
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
			
			let slideIndex = 1;
			showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			// Thumbnail image controls
			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  let i;
			  let slides = document.getElementsByClassName("mySlides");
			  let dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			  }
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";
			  dots[slideIndex-1].className += " active";
			}
		
			    function gfg(imgs) {
				var expandImg = document.getElementById("expand");
				var imgText = document.getElementById("geeks");
				expandImg.src = imgs.src;
				imgText.innerHTML = imgs.alt;
				expandImg.parentElement.style.display = "block";
				}
		</script>

	</body>

</html>
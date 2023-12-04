<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		<title>Healthcare</title><meta charset="utf-8">

			<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="icon"href="images/favicon.png" >
		  <link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/owl.carousel.min.css" rel="stylesheet">
		  <link href="css/owl.theme.default.min.css" rel="stylesheet">
		  <link href="css/all.min.css" rel="stylesheet">
		  <link href="css/style.css" rel="stylesheet">
	
    </head>
    <body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light stroke" id="topbut">
			  <div class="container-fluid">
			  <div class="row w-100">
				<div class="col-md-3 col-6">
					<a class="navbar-brand favicon" href="index.html"><img src="images/favicon.png"><span>MEDSPEC</span></a>
				</div>
				<div class="col-md-9 col-6">
				<div class="row">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
						<span><i class="fas fa-bars" style="color:#3cb5ef; font-size:24px;"></i></span>
					</button>
				<div class="col-lg-8 col-md-12">
					<div class="collapse navbar-collapse" id="mynavbar">
						  <ul class="navbar-nav me-auto">
							<li class="nav-item">
							  <a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="doctors.html">Doctors</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="service.html">Services</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="about_two.php">About</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="contact.html">Contact</a>
							</li>
						  </ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="collapse navbar-collapse appot" id="mynavbar">
						<a href="about.html#appointment"><button class="btn btn-primary" type="button">Appointment</button></a>
					</div>
				</div>
				</div>
				</div>
			  </div>	
			 </div>
		</nav>
		
		<div class="back">
			<h5>About Us</h5>
			<p><a href="index.html"><i class="fa-solid fa-house"></i>&nbsp; &nbsp; &nbsp;<span>Home</span></a><span> &nbsp;&nbsp;&nbsp;<a href="about.html"><i class="fa-solid fa-angles-right"></i> &nbsp;&nbsp;&nbsp;About Us</span></a></p>
		</div>
		
	<div id="aboutsec"></div>
		<section style="margin-top: 4rem;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="aboutimg">
							<img src="images/doctor-nine.jpg">
						</div>
					</div>
					<div class="col-md-6">
						<div class="aboutcont">
						<p style="font-weight: 600;" class="mb-0">"Your Health, Our Priority"</p>
							<h2 class="text-left">Welcome to MEDSPEC</h2>
							<p>Established in [2000], [MEDSPEC] has a rich history of providing exceptional healthcare services. At the heart of our hospital is a commitment to patient-centric care. We understand that each patient is unique, and we tailor our services to meet individual needs. From preventive care to complex medical treatments, we prioritize the health and comfort of our patients.</p>
							<p>Our team comprises highly skilled and compassionate healthcare professionals dedicated to making a positive difference in the lives of those we serve. From doctors and nurses to support staff, each member plays a crucial role in our collective mission.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div id="appointment"></div>
		<section style="margin-top:4rem;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="aboutcont">
							<h2>Make an appointment</h2>
							<form action="" method="post" autocomplete="off">
								<div class="row">
								<div class="col-md-6" style="margin: 10px 0;">
									<label for="date">Name</label>
									<input type="text" class="form-control" autocomplete="off"  name="name" placeholder="Full Name">
								  </div>
								  <div class="col-md-6"style="margin: 10px 0;">
									<label for="date">Email</label>
									<input type="text" class="form-control" name="email" placeholder="Full Email">
								  </div>
								  <div class="col-md-6 col-sm-6" style="margin: 10px 0;">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                                   </div>
								   <div class="col-md-6 col-sm-6" style="margin: 10px 0;">
                                        <label for="date">Phone Number</label>
                                        <input type="tel" name="phone" value="" class="form-control" placeholder="Phone Number">
                                   </div>
								   <div class="col-md-12" style="margin: 10px 0;">
										<label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="msg" placeholder="Message"></textarea>
								   </div>
								  <div class="col-12" style="margin: 10px 0;">
									<button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
								  </div>
								</div>
							  </form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="aboutimg">
							<img src="images/doctor_seven.jpg">
						</div>
					</div>
				</div>
			</div>
		</section>
		
	<footer class="mainfooter">
	<div class="container">
		<div class="foot">
			<div class="row">
				<div class="col-md-3">
					<div style="line-height:27px;">
						<div class="favimage">
							<img src="images/favicon.png">
							<h6>MEDSPEC</h6>
						</div>
						<div class="aboutcom"><i class="fa-solid fa-phone"></i> +91 9784589790</div>
						<div class="aboutcom"><i class="fa-solid fa-location-dot"></i> Suite 965 4796 Mike Lodge, East Jutta, MT 80614 U.S.A</div>
						<div class="icons">
							<i class="fa-brands fa-facebook-f" id="facebook"></i>
							<i class="fa-brands fa-twitter"  id="twitter"></i>
							<i class="fa-brands fa-instagram"  id="instagram"></i>
							<i class="fa-brands fa-pinterest-p"  id="pinterest"></i>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="navfoot">
						<h5 class="text-center">Company</h5>
						<div class="navfoots">
							<ul>
								<li>Home</li>
								<li>About us </li>
								<li>Contact us</li>
								<li>Services</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div style="text-align: justify;">
						<h5>About</h5>
						<p>It's important to note that healthcare systems and hospitals can vary significantly between countries and regions. Each hospital plays a crucial role in supporting the health and well-being of its community. If you have a specific aspect of healthcare hospitals you're interested in or if you have more specific questions, feel free to ask!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="text-center">
				<p class="last mb-0 py-2">Copyrights © 2023 All Rights Reserved. Designed and Developed by Fabvance Solutions</p>
			</div>
		</div>
	</div>
</footer>
		
	  
	    <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.bundle.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/myjs.js"></script>
	  
	
    </body>
</html>

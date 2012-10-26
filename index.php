	<!DOCTYPE html>
	<html lang="en">
		<head>
			<title></title>
		<!-- Bootstrap -->
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Overriding CSS -->
			<link rel="stylesheet" type="text/css" href="css/override.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
		<!-- End Overriding CSS -->
		</head>
		<body>
			<!-- Body Container -->
			<div class="container">

				<!-- Title -->
				<div class="row">
					<div class="span10">
						<h1>Captivating Photography</h1>
						<!--<img src="http://fakeimg.pl/960x200/?text=Title&font=lobster" alt="image"> -->
					</div>
					
							<nav>
					<ul>
						<li id="login">
							<a id="login-trigger" href="#">
								Log in 
							</a>
							<div id="login-content">
								<form action="login.php" method="post">
									<fieldset id="inputs">
										<input id="username" type="email" name="Email" placeholder="Your email address" required>   
										<input id="password" type="password" name="Password" placeholder="Password" required>
									</fieldset>
									<fieldset id="actions">
										<input type="submit" id="submit" value="Log in">
										<label><input type="checkbox" checked="checked"> Keep me signed in</label>
									</fieldset>
								</form>
							</div>                     
						</li>
						<li id="signup">
							<a href="signup.html">Sign up FREE</a>
						</li>
					</ul>
				</nav>
			</div>

				<!-- End Title -->

				<!-- Nav Bar -->
				<div class="row">
					<div class="span12">
							<div class="navbar">
							  <div class="navbar-inner">
							    <a class="brand" href="#">Nav</a>
							    <ul class="nav">
							      <li class="active"><a href="#">Home</a></li>
							      <li><a href="Gallery.php">Gallery</a></li>
							    </ul>
							    <form class="navbar-search pull-right">
	 							 <input type="text" class="search-query" placeholder="Search">
								</form>
							  </div>
							</div>
							<hr />
					</div>
			    </div>
			    <!-- End Nav Bar -->


			    <!-- Main Content/Sidebar -->
			    <div class="row">

			    	<!-- Content -->
					<div class="span8">
							
							<div class="content"> 
								<ul>
									<li>
										<h2>Post Title</h2>
									 	<p>Bear claw apple pie donut tootsie roll marzipan wypas apple pie. Danish applicake cheesecake fruitcake. Carrot cake soufflÃ© chocolate bar sweet roll wypas gummi bears. Pastry bear claw pie chocolate bar powder faworki ice cream caramels donut. Carrot cake cake jelly beans apple pie jelly-o tart jelly-o lemon drops gummi bears. Gummies halvah chocolate bonbon biscuit oat cake. Jelly muffin soufflÃ© jujubes fruitcake chupa chups caramels dessert.</p>
										<span class="content-link">Read/View more &rarr;</span>
											<ul class="thumbnails">
											  <li class="span3">
											    <a href="#" class="thumbnail">
											      <img src="http://placehold.it/240x180" alt="">
											    </a>
											  </li>
											  											  <li class="span3">
											    <a href="#" class="thumbnail">
											      <img src="http://placehold.it/240x180" alt="">
											    </a>
											  </li>
											</ul>

									
										
										
									</li>
								
								</ul>
								<hr />

							</div>

					</div>
					<!-- Sidebar -->
						<div class="span4">
						<?php //if ($_SESSION['valid'] == 1):  ?>
							<!-- Registered User? Unhind Side links.  -->
							<ul class="nav nav-list">
								<li class="nav-header"> Header</li>
								<li class="active"><a href="#">Link</a></li>
								<li class="active"><a href="#">Link</a></li>
								<li class="active"><a href="#">Link</a></li>
								<li class="active"><a href="#">Link</a></li>
							</ul>
							<?php //else:  ?>
							<!-- Empty Area -->
						<?php //Endif;  ?>
							<div class="sidebar-content">
								<h4>Announcements</h4>
							<p><small>Bear claw apple pie donut tootsie roll marzipan wypas apple pie. Danish applicake cheesecake fruitcake. Carrot cake soufflé chocolate bar sweet roll wypas gummi bears. Pastry bear claw pie chocolate bar powder faworki ice cream caramels donut. Carrot cake cake jelly beans apple pie jelly-o tart jelly-o lemon drops gummi bears. Gummies halvah chocolate bonbon biscuit oat cake. Jelly muffin soufflé jujubes fruitcake chupa chups caramels dessert.</small></p>
							<h4>Random Image</h4>
							<ul class="thumbnails">
								 <li class="span4">
									   <a href="#" class="thumbnail">
										   <img src="http://placehold.it/340x180" alt="">
									  </a>
									</li>
							</ul> 
							</div>
					</div>

			    </div>

			    <!-- End Main Content -->

			    <!-- Footer -->
			    <div class="row">
			    	<hr />
					<div class="span3">
							<img src="http://fakeimg.pl/840x100/?text=Copyright&amp;font=lobster" alt="image">
					</div>
						<div class="span9">
							<ul class="nav nav-pills pull-right">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>	
						</div>
			    </div>
			    <!-- End Footer -->

			</div>
		    <!-- End Body Container -->
		<!-- All Javascripts at end of code -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/login.js"></script>
		</body>

	</html>
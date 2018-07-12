<!DOCTYPE html>

<?php
session_start();
?>
<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Online Grocery London</title>
		<meta name="description" content="ONLINE GROCERY LONDON">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
		<div class="container">
		<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse"type="button">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
			<a class="navbar-brand" href="#"><img src="" alt="Online Grocery"></a>
			
			<div class="nav-collapse collapse navbar-responsive-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">HOME</a>
					</li>
					
					<li>
						<a href="#">UPLOAD SHOPPING LIST</a>
					</li>
					
					<li>
						<a href="#">TERMS AND CONDITIONS</a>
					</li>

					<li>
						<a href="#">CONTACT</a>
					</li>
					
					<li>
						<a href="#"></a>
					</li>
					
					
				</ul><!--end nav-->
				<form class="navbar-form pull-left">
					<input type="text" class="form-control" placeholder="Search" id="searchInput">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span ></button>
					</form><!--end form-->
					
					<ul class="nav navbar-nav pull-right">
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
					<li>
					<a href="#"><span class="glyphicon glyphicon-refresh"></span> Edit profile</a>
					</li>
					<li>
					<a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
					</li>
					
					<li class="divider"></li>
					<li>
					<a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a>
					</li>
					</li>
					
					</ul><!--end nav pull-right-->
			</div><!--end nav-collapse-->
		</div><!--end container-->
	</div><!--end navbar-->
			
			
			<div class="carousel slide" id="myCarousel">
			
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide2">
						<div class="carousel-caption">
							
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide3">
						<div class="carousel-caption">
							
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div><!-- end myCarousel -->
			
			
			<div class="row" id="bigCallout">
				<div class="col-12">
					
					
					
					<!-- Visible only on small devices -->
					<div class="well well-small visible-sm">
						<a href="" class="btn btn-large btn-block btn-default"><span class="glyphicon glyphicon-phone"></span> Call:5194510150</a>
					</div><!-- end well-small -->
					
					<div class="well">
						
						
						<p class="lead">We bring you home the fresh grocery available in London @ the cheapest rates.Sit in your couch and tell us What you want.</p>
												<?php
												include_once("loginclass.php");
												if(isset($_POST['email']))
												{
													$email=$_POST['email'];
													$pass=$_POST['password'];
													$ob1=new login();
													$res=$ob1->check($email,$pass);
													$r=mysqli_num_rows($res);
													if($r==0)
													{
														?>
													<script type="text/javascript">
													window.alert("Incorrect Email/Password")
													</script>
													<?php
													}
													else
													{
														$d=mysqli_fetch_array($res);
														$_SESSION["id"]=$d[0];
													echo "<script>location.assign('members.php')</script>";	
													}
													
													
													
													
												
												}
												?>
												
						<a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Sign In</a>
						<div class="modal fade" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
											
											<div class="modal-body">
											<button class="close" data-dismiss="modal">&times;</button>
												<hr>
												
												
												<form class="form-horizontal" action="" method="POST">
								<div class="form-group">
								<div class="col-sm-10">
								<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-user" id="basic-addon1"></span></span>
								<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
								</div>
								</div>
								<div class="col-sm-10">
								<br>
								<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-star" id="basic-addon1"></span></span>
									<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
								</div>
								</div>
								<div class="col-sm-offset-3 col-sm-10">
								<br>
								<button type="submit" class="btn btn-primary">Sign In</button>
	  
							</div>
							</div>
								
  
<center><a href="signup.php" style="color:grey;text-decoration:none">Create an Account | </a><a href="" style="color:grey;text-decoration:none"> Forgot Password ? </a> 
	<hr>
</form>
											</div><!-- end modal-body -->
											
											
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->

					
						
					</div><!-- end well -->
					
				</div><!-- end col-12 -->
			</div><!-- end bigCallout -->
			
			
			
			
			<div class="row" id="features">
				
				
				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"></h3>
						</div><!-- end panel-heading -->
						<img src="images/freshco.jpg" alt="CSS3" class="img-circle">
						
						
						
						<a href="http://www.freshco.com/Home.aspx" target="_blank" class="btn btn-danger btn-block"><strong>FreshCo Flyers</strong></a>
					</div><!-- end panel -->
				</div><!-- end feature -->

				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"></h3>
						</div><!-- end panel-heading -->
						<img src="images/nofrills.png" alt="CSS3" class="img-circle">
						
						
						
						<a href="http://www.nofrills.ca/en_CA/flyers.html" target="_blank" class="btn btn-success btn-block"><strong>NoFrills Flyers</strong></a>
					</div><!-- end panel -->
				</div><!-- end feature -->

				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"></h3>
						</div><!-- end panel-heading -->
						<img src="images/walmart.jpg" alt="HTML5" class="img-circle">
						
						
						
						<a href="http://www.walmart.ca/flyer" target="_blank" class="btn btn-warning btn-block"><strong>Walmart Flyers</strong></a>
					</div><!-- end panel -->
				</div><!-- end feature -->
				
				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"></h3>
						</div><!-- end panel-heading -->
						<img src="images/united.jpg" alt="Bootstrap 3" class="img-circle">
						
						
						
						<a href="http://www.unitedsupermarketlondon.ca/united_flyers" target="_blank" class="btn btn-info btn-block"><strong>United Flyers</strong></a>
					</div><!-- end panel -->
				</div><!-- end feature -->
			</div><!-- end features -->


			
			
			<div class="row" id="moreInfo">
				<div class="col-sm-6">
					
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab"><strong>About Us</strong></a></li>
							
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.746850406249!2d-81.22224700000001!3d43.00466479999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eed91a80f00d7%3A0x6a4056cb35041232!2s1004+Oxford+St+E%2C+London%2C+ON+N5Y+3K7!5e0!3m2!1sen!2sca!4v1431953845698" width="100%" height="200" frameborder="0" style="border:0"></iframe>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div><!-- end tab-pane -->
							
							
						</div><!-- end tab-content -->
					</div><!-- end tabbable -->
				</div><!-- end col-sm-6 -->
				
				<div class="col-sm-6">
					<h4>Useful Links</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<h4>A List Group</h4>
					
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
					</div><!-- list-group -->
					
					
				</div><!-- end col-sm-6 -->
			</div><!-- end moreInfo -->
			
			<hr>
			
			
		</div><!-- end container -->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
					<h6>Copyright &copy; 2015 All Rights Reserved</h6>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4">
						<h6>About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- end col-sm-4 -->
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Upload Shopping List</a></li>
							<li><a href="#">Flyers</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					
					
					<div class="col-sm-2">
						<h6>Developed By Sony N Scaria</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>


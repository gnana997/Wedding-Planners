<?php
	require 'config/config.php';
	require 'login_handler.php';
	$user = $_SESSION['username'];
	
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Planners</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- header -->
			<div class="w3_agile_menu">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="cart.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Cart">Cart</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="about.html" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="work.html" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="contact.html" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<?php 
									if($user == null){
										echo '<li class="m_nav_item" id="moble_nav_item_7"> <a href="login.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_8"> <a href="register.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Register">Register</span></a></li>';
									}else{
										echo '<li class="m_nav_item" id="moble_nav_item_7"> <a href="index.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="'.$user.'">'.$user.'</span></a></li>';
									}
								?>
								
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="index.html">Wedding Planners</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!-- //header -->
			<div class="w3ls_banner_info">
				<section class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p></p>
					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
					</div>
				</li>
			</ul>
		</div>
	</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- services -->
	<div class="agile-ser">
		<div class="container">
			<h3 class="w3layouts_head">Our <span>Services</span></h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus.</p>
				<div class="agile-ser-tp">
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/4.jpg" class="img-responsive" alt="">
						</div>
						<h4><a href="halls.php" style="color: #000">Party Locations</a></h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/5.jpg" class="img-responsive" alt="">
						</div>
						<h4><a href="caterers.php" style="color: #000">Catering & Food</a></h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/9.jpg" class="img-responsive" alt="">
						</div>
						<h4><a href="decor.php" style="color: #000">Decor & Decorations</a></h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //services -->
<!-- quicklinks -->
	<div class="quicklinks-agile-info">
		<div class="container">
			<h3 class="w3layouts_head">Quick <span>Links</span></h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-right ece">
							<h4>Wedding Parties</h4>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding & Engagement Rings</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Bridal Gowns</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Cakes</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photo & Video</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Officiants</a></li>
								<li><a href="halls.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Ceremony Locations</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Balloons & Flowers</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Limos & Transportation</a></li>																
					</div>
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/2.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //quicklinks -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="index.html">Wedding Planners</a></h2>
			<h3>(+91) 123 456 789</h3>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value=" ">
			</form>
			<div class="agileits_w3three_nav">
				<div class="agileits_w3three_nav_left">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="work.html">Our Work</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
					</ul>
				</div>
				<div class="agileits_w3three_nav_right">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
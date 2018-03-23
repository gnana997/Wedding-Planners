<?php
require_once('config/config.php');
require_once('login_handler.php');
$user = $_SESSION['username'];

$query = mysqli_query($con,"SELECT * FROM orders WHERE username = '$user'");
$total = 0;

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


		<div class="banner">
			<div class="container" >


					<!-- HEADER -->
					<div class="w3_agile_menu" style="background: none;">
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
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="services.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Services</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="cart.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Cart</span></a></li>
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
					<h1><a href="index.php">Wedding Planners</a></h1>
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
					<!-- end header -->

					<div class="section-title">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="section__inner" >
										<h1 class="ui-title-page" style = "color: #fff; margin-top:30px; font-size: 40px">Shopping Cart</h1>
										<ol class="breadcrumb" style="background-color: transparent;">
											<li><a href="index.php" style = "color: #fff; font-size: 30px">Home</a></li>
											<li class="active" style = "color: #fff; font-size: 30px">Cart</li>
										</ol>
									</div>
									<!-- end section__inner -->
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->
						</div>
						<!-- end container -->
					</div>
					<!-- end section-title -->


					<div class="section_mod-d">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
								
									<div class="table-container">
										<table class="table table-cart-order">
											<thead>
												<tr>
													<th>PRODUCT</th>
													<th>price</th>
													<th>TOTAL</th>
												</tr>
											</thead>
											<tbody>
											<?php 
												if(mysqli_num_rows($query) > 0 )
												{
													while($row = mysqli_fetch_array($query))
													{ 
														$indCost = (int)$row['cost'];
														$total += (int)$row['cost']; 
											?>
												<tr>
												
													<td class="">
														<span class="table-cart-order__name"><?php echo $row['name']; ?></span>
													</td>
													<td class=""><span class="table-cart-order__price">&#8377;<?php echo $indCost;?></span></td>
													<td class=""><span class="table-cart-order__price">&#8377;<?php echo (int)$row['cost']; ?></span></td>
													<td style="text-align: center"><span style="cursor:pointer;" class="removeFromCart" data-id="<?php echo $row['name']; ?>">Remove</span></td>
													
												</tr>
												<?php
													}
												}	
												?>
											</tbody>
										</table>
									</div>
									
									<script  type="text/javascript">
										$( "span.removeFromCart" ).on( "click" , function() {
										var id = $(this).attr( "data-id" );
										$.ajax({
										type: "GET",
										url: "ajax.php?id=" + id + "&action=remove"
										})
										.done(function()
										{
										alert("Product has been removed.");
										location.reload();
										});
										});
									</script>
									<div class="row">
										<div class="col-md-6">
											<section class="section_mod-f">
												<h2 class="ui-title-inner ui-title-inner_mod-c" style = "color: #fff; margin-top:30px; font-size: 40px">Promotional Code</h2>
												<form class="ui-form">
													<input class="form-control" type="text" placeholder="Enter your promotional code">
													<button class="ui-btn ui-btn-primary btn-effect">apply</button>
												</form>
											</section>
										</div>
									</div>
								</div>
								<!-- end col -->

								<div class="col-md-4">
									<section class="section-table-order">
										<h2 class="table-totals__title ui-title-inner" style = "color: #fff; font-size: 30px">Cart Totals</h2>
										<table class="table-totals">
											<tbody>
												<tr>
													<td><b>CART SUBTOTAL</b></td>
													<td class="text-right">&#8377;<?php echo $total;?></td>
												</tr>
												<tr>
													<td class="border-cell"><b>VAT</b></td>
													<td class="border-cell text-right">5%</td>
												</tr>
												<tr>
													<td class="table-totals__total">Order Total</td>
													<td class="table-totals__total">&#8377;<?php $order_total = $total + ($total*5)/100; echo $order_total; ?></td>
												</tr>
												
											</tbody>
										</table>
										</br>
										<button class="table-totals__btn ui-btn ui-btn-primary btn-effect" style='margin: 15px'><a class="table-totals__btn ui-btn ui-btn-primary btn-effect" href="checkout.php" style="color: #fff; ">proceed to checkout</a></button>
										<?php $_SESSION['order'] = $order_total/65; ?>	
									</section>
									<!-- end section-table-order -->
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->
						</div>
						<!-- end container -->
					</div>
					<!-- end section_mod-b -->


					<section class="section-subscribe">
						<form class="form-subscribe" action="post">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="ui-title-block ui-title-block_mod-a form-subscribe__title" style = "color: #fff; margin-top:30px; font-size: 40px">Sign up for the newsletter and get exclusive deals.</h2>
										<input class="form-control" type="text" placeholder="Enter your email address" required style="width: 45%">
										<button class="ui-btn ui-btn_mod-c btn-effect btn-effect">subscribe</button>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
							<!-- end container -->
						</form>
						<!-- end footer-form -->
					</section>
					<!-- end section-subscribe -->
				<!-- end footer -->
			</div>

		</div>
		<!-- end layout-theme -->
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
						<li class="active"><a href="index.phps">Home</a></li>
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
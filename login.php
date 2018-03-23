<?php
    require("config/config.php");
    require("login_handler.php");
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
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    

</head>
    

<body>
<div class="footer">
		<div class="container">
			<h2><a href="index.html">Wedding Planners</a></h2>
			<form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Your email..." required="">
                <input type="password" name="password" placeholder="Your password..." required="">
                <input type="submit" value="Login" name='login_button'>
                <a href="register.php"><button>Register</button></a> 
            </form>
        </div>
</div>

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
</body>
    
    

</html>
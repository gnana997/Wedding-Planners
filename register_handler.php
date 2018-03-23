<?php
$name = ""; 
$em = ""; 
$password = ""; 
$password1 = ""; 
$gender="";
$city="";
$error_array = array(); 

if(isset($_POST['register_button'])){

	$name = strip_tags($_POST['username']); 
	$name = str_replace(' ', '', $name); 
	$name = ucfirst(strtolower($name)); 
	$_SESSION['name'] = $name; 

	$em = strip_tags($_POST['email']); 
	$em = str_replace(' ', '', $em); 
	$em = ucfirst(strtolower($em)); 
	$_SESSION['email'] = $em;

	$password = strip_tags($_POST['password']); 
	$password1 = strip_tags($_POST['confpassword']);

	$gender = strip_tags($_POST['gender']); 
	$gender = str_replace(' ', '', $gender); 
	$gender = ucfirst(strtolower($gender)); 
    $_SESSION['gender'] = $gender;
    
    $city = strip_tags($_POST['city']); 
	$city = str_replace(' ', '', $city); 
    $city = ucfirst(strtolower($city));
    $_SESSION['city'] = $city;


	if($password == $password1) {
		
		if(filter_var($em, FILTER_VALIDATE_EMAIL)) {

			$em = filter_var($em, FILTER_VALIDATE_EMAIL);

			
			$e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");

			
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
				array_push($error_array, "Email already in use<br>");
			}

		}
		else {
			array_push($error_array, "Invalid email format<br>");
		}


	}
	else {
		array_push($error_array, "passwords don't match<br>");
	}


	if(empty($error_array)) { 

		$query = mysqli_query($con, "INSERT INTO users VALUES ('$em', '$name', '$password','$gender','$city')");

		array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

		$_SESSION['reg_name'] = "";
		$_SESSION['reg_email'] = "";
	}

}
?>
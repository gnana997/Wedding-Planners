<?php  

if(isset($_POST['login_button'])) {

	$email = strip_tags($_POST['email']); 
	$email = str_replace(' ', '', $email); 
	$email = ucfirst(strtolower($email)); 

	$_SESSION['email'] = $email; 
	$password = $_POST['password']; 
	echo $email;
	echo $password;
	$check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$result = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'");
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['gender'] = $row['gender'];

		header("Location: index.php");
		
		exit();
	}
	else {
		array_push($error_array, "Email or password was incorrect<br>");
	}


}

?>
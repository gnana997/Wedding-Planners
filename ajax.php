<?php
    require_once('config/config.php');
    require_once('cart.php');
    $name = $_GET['id'];
    $query = mysqli_query($con,"DELETE FROM orders WHERE name = '$name'");
?>
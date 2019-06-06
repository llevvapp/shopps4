<?php $connect = mysqli_connect('127.0.0.1', 'root', '','shopps4');
		$query = mysqli_query($connect, "INSERT INTO store (name, price, image) VALUES ('" . $_POST['post_name'] . "', '" . $_POST['post_price'] . "', '" . $_POST['post_image'] . "' )");
header('Location: http://shopps4/admin.php');?>
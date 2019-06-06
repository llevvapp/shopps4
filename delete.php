<?php $connect = mysqli_connect ('127.0.0.1', 'root', '', 'shopps4');
$id = $_POST['del'];
$query = mysqli_query ($connect, "DELETE FROM store WHERE id='". $id . "'");
header('Location: http://shopps4/admin.php');
?>
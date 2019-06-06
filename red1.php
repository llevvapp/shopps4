<?php $connect = mysqli_connect('127.0.0.1', 'root', '' , 'shopps4');
$query = mysqli_query($connect, "UPDATE store SET name='".$_POST['up2']."', price='".$_POST['up3']."', image='".$_POST['up4']."' WHERE id='".$_POST['up1']."'");
header('Location: http://shopps4/admin.php')
?>
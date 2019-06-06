<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="red1.php" method="post">
		<?php  
		
	echo '<textarea style="display:none" name = "up1">'. $_POST['update1'].'</textarea>' ;
	echo '<textarea name = "up2">'. $_POST['update2'].'</textarea>' ;
	echo '<textarea name = "up3">'. $_POST['update3'].'</textarea>' ;
	echo '<textarea name = "up4">'. $_POST['update4'].'</textarea>' ;
	echo '<button>Сохранить</button>';
	
	
	?>
	</form>
</body>
</html>

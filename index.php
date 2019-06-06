<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="header col-12" style="background: gray;height: 50px">
	<div class="w-100 mx-auto py-2 row" style="width: 700px;background: gray">
	<form action="admin.php">
	<button class="">Админская панель</button>
	</form>
	<form action="trash1.php">
	<button>Корзина</button>
	</form>
	</div>
	</div>

<div class="container">
	<div class="row col-12">
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '','shopps4');
		$query = mysqli_query($connect, 'SELECT * FROM store ORDER by id DESC');
		for ($i=0; $i < $query->num_rows; $i++) { ?>
			<div class="col-4 w-25">
				<?php $game = $query->fetch_assoc();
				echo  '<img style="margin-top:50px;height:300px" src="' . $game['image'] . '">';
				echo '<h6>'.$game['name'].'</h6>';
				echo ' ';
				echo '<p>'.$game['price'].'</p>';?>
			
			<form method="post" action="trash.php">
			<?php echo '<button name="post_id" value="'. $game['id'] . '">В корзину</button>';
				echo '<input type = "hidden" name="post_name" value="'. $game['name'] . '">';
				echo '<input type = "hidden" name="post_price" value="'. $game['price'] . '">';
				echo '<input type = "hidden" name="post_image" value="'. $game['image'] . '">';
			 ?>

			</form>
		</div>
		<?php } ?>
	</div>
	</div>
</body>
</html>
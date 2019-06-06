<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="header" style="background: gray;height: 50px">
	<div class="mx-auto py-2" style="width: 700px;background: gray">
	<form action="add.php" method="POST">
	<input type="text" name = "post_name" placeholder="Название товара">
	<input type="text" name = "post_price" placeholder="Цена">
	<input type="text" name = "post_image" placeholder="Ссылка на картинку">
	<button name="btn_add">Добавить</button>
	</form>
	</div>
	<form action="index.php"><button>В магазин!</button></form>
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
			
			
			<form method="post" action="delete.php">
			<?php echo '<button name="del" value="'. $game['id'] . '">Удалить</button>'; ?>
			</form>
		
			<form method="post" action="red.php">
			<?php echo '<button name="update1" value="'. $game['id'] . '">Редактировать</button>';
				echo '<input type="hidden" name = "update2" value = "'. $game['name'] .'">';
				echo '<input type="hidden" name = "update3" value = "'. $game['price'] .'">';
				echo '<input type="hidden" name = "update4" value = "'. $game['image'] .'">';
				?>
			</form>
			</div>
		<?php } ?>
	</div>
	</div>
</body>
</html>
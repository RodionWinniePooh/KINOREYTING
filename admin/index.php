<?php
require_once "start.php"

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Admin панель</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color:#2d3246">





		<?php

		$coment = '<!-- Put this script tag to the <head> of your page -->
		<script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
		<script type="text/javascript">VK.init({apiId: 6723741, onlyWidgets: true});</script>

		<!-- Put this div tag to the place, where the Comments block will be -->
		<div id="vk_comments"></div>
		<script type="text/javascript">VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});</script>';




$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

if(isset($_POST['submit']))
	{



	$id = mysqli_real_escape_string($dbc, trim($_POST['id']));
	$title = mysqli_real_escape_string($dbc, trim($_POST['title']));
	$poster = mysqli_real_escape_string($dbc, trim($_POST['poster']));
	$full_text = mysqli_real_escape_string($dbc, trim($_POST['full_text']));
	$img = mysqli_real_escape_string($dbc, trim($_POST['img']));
	$mp4 = mysqli_real_escape_string($dbc, trim($_POST['mp4']));
	$category = mysqli_real_escape_string($dbc, trim($_POST['category']));



			$query ="INSERT INTO cartoons (title, coment, full_text, img, mp4, poster, category) VALUES ( '$title', '$coment', '$full_text', '$img', '$mp4', '$poster', '$category')";
			mysqli_query($dbc,$query);
						$otvet = 'Мультфильм добавлен';
			mysqli_close($dbc);



	}


?>


<div class="container" style="background-color:black;">
	<h3 ><a href="/" style="text-decoration:none; color:white;">Переход на главную</a></h3>
</div>


<div class="container" style="background-color:white;">


<center><h1 style=" background-color:white;">Добавление Мультфильма</h1></center>

	<form method="POST">
												<h3>Введите название мультфильма</h3>
                        <label class="field a-field a-field_a1 page__field">
														<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="title">
                        </label>
<br>
												<h3>Введите категорию мультфильма</h3>
												<label class="field a-field a-field_a1 page__field">
													<input type="text" class="field__input a-field__input" placeholder="Введите категорию" required name="category">
												</label>
<br>
												<h3>Введите описание к мультфильму</h3>
                        <label class="field a-field a-field_a1 page__field">
      										<textarea name="full_text" class="form-control" rows="6" cols="36"></textarea>
                        </label>
<br>
												<h3>Выберите картинку из папки img</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название картинки" required name="img">
                        </label>
<br>
												<h3>Выберите видео из папки mp4</h3>
                        <label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название из папки mp4" required name="mp4">
                        </label>
<br>
												<h3>Выберите постер из папки poster</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите постера" required name="poster">
                        </label>
<br>
                        <button class="btn btn-info" type="submit" name="submit" style="margin-top:20px;">Добавить</button>
												<?php echo $otvet ?>
	</form>

	<?php
		$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

		if(isset($_POST['submit1']))
			{
			$titlecartoon = mysqli_real_escape_string($dbc, trim($_POST['titlecartoon']));

			$query ="DELETE FROM cartoons WHERE title = '$titlecartoon'";
			mysqli_query($dbc,$query);
			$otvetdelete = 'Мультфильм удален';
			mysqli_close($dbc);
	}
	?>

<center><h1 style=" background-color:white;">Удаление Мультфильма</h1></center>
	<form   method="post">
		<label class="field a-field a-field_a1 page__field">
			<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="titlecartoon">
		</label>
		<button class="btn btn-danger" type="submit" name="submit1">Удаление мультфильма по названию</button>
		<?php echo $otvetdelete ?>
	</form>
	<br>

</div>








<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->
<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->
<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->
<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->
<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->
<!--  Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы Добавление поля фильмы -->


<div class="container" style="background-color:black;">
	<h3 ><a href="/" style="text-decoration:none; color:white;">Переход на главную</a></h3>
</div>




<?php

$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

if(isset($_POST['submit2']))
	{



	$id = mysqli_real_escape_string($dbc, trim($_POST['id2']));
	$title = mysqli_real_escape_string($dbc, trim($_POST['title2']));
	$poster = mysqli_real_escape_string($dbc, trim($_POST['poster2']));
	$full_text = mysqli_real_escape_string($dbc, trim($_POST['full_text2']));
	$img = mysqli_real_escape_string($dbc, trim($_POST['img2']));
	$mp4 = mysqli_real_escape_string($dbc, trim($_POST['mp42']));
	$category = mysqli_real_escape_string($dbc, trim($_POST['category2']));



			$query ="INSERT INTO film (title, coment, full_text, img, mp4, poster, category) VALUES ( '$title', '$coment', '$full_text', '$img', '$mp4', '$poster', '$category')";
			mysqli_query($dbc,$query);
						$otvet = 'Фильм добавлен';
			mysqli_close($dbc);



	}


?>


<div class="container" style="background-color:white;">


<center><h1 style=" background-color:white;">Добавление Фильма</h1></center>

	<form method="POST">
												<h3>Введите название фильма</h3>
                        <label class="field a-field a-field_a1 page__field">
														<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="title2">
                        </label>
<br>
												<h3>Введите категорию фильма</h3>
												<label class="field a-field a-field_a1 page__field">
													<input type="text" class="field__input a-field__input" placeholder="Введите категорию" required name="category2">
												</label>
<br>
												<h3>Введите описание к фильму</h3>
                        <label class="field a-field a-field_a1 page__field">
      										<textarea name="full_text2" class="form-control" rows="6" cols="36"></textarea>
                        </label>
<br>
												<h3>Выберите картинку из папки img</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название картинки" required name="img2">
                        </label>
<br>
												<h3>Выберите видео из папки mp4</h3>
                        <label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название из папки mp4" required name="mp42">
                        </label>
<br>
												<h3>Выберите постер из папки poster</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите постера" required name="poster2">
                        </label>
<br>
                        <button class="btn btn-info" type="submit" name="submit2" style="margin-top:20px;">Добавить</button>
												<?php echo $otvet ?>
	</form>

	<?php
		$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

		if(isset($_POST['submit3']))
			{
			$titlefilm = mysqli_real_escape_string($dbc, trim($_POST['titlefilm']));

			$query ="DELETE FROM film WHERE title = '$titlefilm'";
			mysqli_query($dbc,$query);
			$otvetdeletefilm = 'Фильм удален';
			mysqli_close($dbc);
	}
	?>

<center><h1 style=" background-color:white;">Удаление фильма</h1></center>
	<form   method="post">
		<label class="field a-field a-field_a1 page__field">
			<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="titlefilm">
		</label>
		<button class="btn btn-danger" type="submit" name="submit3">Удаление фильма по названию</button>
		<?php echo $otvetdeletefilm ?>
	</form>
	<br>

</div>





<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->
<!--  Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы Добавление поля сериалы -->


<div class="container" style="background-color:black;">
	<h3 ><a href="/" style="text-decoration:none; color:white;">Переход на главную</a></h3>
</div>




<?php

$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

if(isset($_POST['submit3']))
	{



	$id = mysqli_real_escape_string($dbc, trim($_POST['id3']));
	$title = mysqli_real_escape_string($dbc, trim($_POST['title3']));
	$poster = mysqli_real_escape_string($dbc, trim($_POST['poster3']));
	$full_text = mysqli_real_escape_string($dbc, trim($_POST['full_text3']));
	$img = mysqli_real_escape_string($dbc, trim($_POST['img3']));
	$mp4 = mysqli_real_escape_string($dbc, trim($_POST['mp43']));
	$category = mysqli_real_escape_string($dbc, trim($_POST['category3']));



			$query ="INSERT INTO serials (title, coment, full_text, img, mp4, poster, category) VALUES ( '$title', '$coment', '$full_text', '$img', '$mp4', '$poster', '$category')";
			mysqli_query($dbc,$query);
						$otvet = 'Сериал добавлен';
			mysqli_close($dbc);



	}


?>


<div class="container" style="background-color:white;">


<center><h1 style=" background-color:white;">Добавление Сериала</h1></center>

	<form method="POST">
												<h3>Введите название сериала</h3>
                        <label class="field a-field a-field_a1 page__field">
														<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="title3">
                        </label>
<br>
												<h3>Введите категорию фильма</h3>
												<label class="field a-field a-field_a1 page__field">
													<input type="text" class="field__input a-field__input" placeholder="Введите категорию" required name="category3">
												</label>
<br>
												<h3>Введите описание к фильму</h3>
                        <label class="field a-field a-field_a1 page__field">
      										<textarea name="full_text3" class="form-control" rows="6" cols="36"></textarea>
                        </label>
<br>
												<h3>Выберите картинку из папки img</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название картинки" required name="img3">
                        </label>
<br>
												<h3>Выберите видео из папки mp4</h3>
                        <label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите название из папки mp4" required name="mp43">
                        </label>
<br>
												<h3>Выберите постер из папки poster</h3>
												<label class="field a-field a-field_a1 page__field">
                          <input type="file" class="field__input a-field__input" placeholder="Введите постера" required name="poster3">
                        </label>
<br>
                        <button class="btn btn-info" type="submit" name="submit3" style="margin-top:20px;">Добавить</button>
												<?php echo $otvet ?>
	</form>

	<?php
		$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');

		if(isset($_POST['submit4']))
			{
			$titleserial = mysqli_real_escape_string($dbc, trim($_POST['titlefilm']));

			$query ="DELETE FROM serials WHERE title = '$titleserial'";
			mysqli_query($dbc,$query);
			$otvetdeleteserial = 'Сериал удален';
			mysqli_close($dbc);
	}
	?>

<center><h1 style=" background-color:white;">Удаление сериала</h1></center>
	<form   method="post">
		<label class="field a-field a-field_a1 page__field">
			<input type="text" class="field__input a-field__input" placeholder="Введите название" required name="titlefilm">
		</label>
		<button class="btn btn-danger" type="submit" name="submit4">Удаление сериала по названию</button>
		<?php echo $otvetdeleteserial ?>
	</form>
	<br>

</div>





























  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>

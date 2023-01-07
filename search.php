

<!DOCTYPE html>
<html lang="en">
<head>
	    <?php

    $title = "Новости обо всем";
    require_once "blocks/head.php";

    ?>
</head>
<body>

    <?php require_once "blocks/header.php"; ?>



<?php


	$connect = mysqli_connect("localhost", "root","","kinoreyting") or die("Error");

	$query = mysqli_query($connect, "SELECT * FROM film");



?>





<div class="container"><h2>Найденное по вашему запросу:</h2></div>

<div class="container">

<?php

	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$query = mysqli_query($connect, "SELECT * FROM `film` WHERE `title` LIKE '%$search%' OR `full_text` LIKE '%$search%' ");
		    while($row = mysqli_fetch_assoc($query)) echo '

<div class="container">
		<div class="col-md-3" style="margin-bottom:20px;">
			<div class="card-block">
				<div class="img-card" style="width: 18rem; margin:20px">
					<a href="/film.php?id='.$row["id"].'">
						<img src="/img/film/'.$row["img"].'" class="w-100">
					</a>
				</div>
			</div>
		</div>

		<a href="/film.php?id='.$row["id"].'">
			<h2 style="font-weight: 600; color:black;">'.$row["title"].'</h2>
   	</a>
		<p class="text-justify" style="font-weight: 600">'.$row["full_text"].'</p>
</div>
         ';
	}




	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$query = mysqli_query($connect, "SELECT * FROM `serials` WHERE `title` LIKE '%$search%' OR `full_text` LIKE '%$search%'");
		    while($row = mysqli_fetch_assoc($query)) echo '

<div class="container">
				<div class="col-md-3" style="margin-bottom:20px;">
					<div class="card-block">
						<div class="img-card" style="width: 18rem; margin:20px">
							<a href="/serial.php?id='.$row["id"].'">
								<img src="/img/serials/'.$row["img"].'" class="w-100">
							</a>
						</div>
					</div>
				</div>

				<a href="/serial.php?id='.$row["id"].'">
					<h2 style="font-weight: 600">'.$row["title"].'</h2>
		   	</a>
				<p class="text-justify" style="font-weight: 600">'.$row["full_text"].'</p>
</div>

				';


	}




	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$query = mysqli_query($connect, "SELECT * FROM `cartoons` WHERE `title` LIKE '%$search%' OR `full_text` LIKE '%$search%' ");
		    while($row = mysqli_fetch_assoc($query)) echo '

<div class="container">
				<div class="col-md-3" style="margin-bottom:20px;">
					<div class="card-block">
						<div class="img-card" style="width: 18rem; margin:20px">
							<a href="/cartoons.php?id='.$row["id"].'">
								<img src="/img/cartoons/'.$row["title"].'.jpg" class="w-100">
							</a>
						</div>
					</div>
				</div>

				<a href="/cartoons.php?id='.$row["id"].'">
					<h2 style="font-weight: 600">'.$row["title"].'</h2>
		   	</a>
				<p class="text-justify" style="font-weight: 600">'.$row["full_text"].'</p>
</div>




				';
	}

?>

</div>

</body>
</html>

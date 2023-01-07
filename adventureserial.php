<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    require_once "functions/functions.php";
    $title = "Сериалы 2018";
    require_once "blocks/head.php";
    require_once "_drawrating.php";


    ?>



</head>
<body style="background-color: #f2f3f5">

	    <?php require_once "blocks/header.php"; ?>



<div class="container">

<h2 style="font-weight: 600; color:black; margin-bottom: 40px;">Сериалы боевики</h2>

<?php


  $connection = mysqli_connect("localhost", "root", "", "kinoreyting");
    if ($connection == false) {
      echo "Error!";
      echo mysqli_connect_error();
      exit();
    }
  $query = mysqli_query($connection, "SELECT * FROM serials WHERE category = 'Боевик' ORDER BY id DESC ");

    while($serial = mysqli_fetch_assoc($query)){

         echo '

         <div class="container">
         		<div class="col-md-3" style="margin-bottom:20px;">
         			<div class="card-block">
         				<div class="img-card" style="width: 18rem; margin:20px">
         					<a href="/serial.php?id='.$serial["id"].'">
         						<img src="/img/serials/'.$serial["title"].'.jpg" class="w-100">
         					</a>
         				</div>
         			</div>
         		</div>

         		<a href="/serial.php?id='.$serial["id"].'">
         			<h2 style="font-weight: 600; color:black;">'.$serial["title"].'</h2>
            	</a>
         		<p class="text-justify" style="font-weight: 600">'.$serial["full_text"].'</p>
         </div>

         ';


    }

?>

</div>

  <?php require_once "blocks/footer.php"; ?>

</body>
</html>

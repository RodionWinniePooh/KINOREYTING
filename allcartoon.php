<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    require_once "functions/functions.php";
    $title = "Мультфильмы 2018";
    require_once "blocks/head.php";
    require_once "_drawrating.php";


    ?>



</head>
<body style="background-color: #f2f3f5">

	    <?php require_once "blocks/header.php"; ?>


<div class="container">


<?php


  $connection = mysqli_connect("localhost", "root", "", "kinoreyting");
    if ($connection == false) {
      echo "Error!";
      echo mysqli_connect_errno();
      exit();
    }
  $query = mysqli_query($connection, "SELECT *FROM cartoons ORDER BY id DESC ");

    while($cartoon = mysqli_fetch_assoc($query)){

         echo '



         <div class="container">
         		<div class="col-md-3" style="margin-bottom:20px;">
         			<div class="card-block">
         				<div class="img-card" style="width: 18rem; margin:20px">
         					<a href="/cartoons.php?id='.$cartoon["id"].'">
         						<img src="/img/cartoons/'.$cartoon["title"].'.jpg" class="w-100">
         					</a>
         				</div>
         			</div>
         		</div>

         		<a href="/cartoons.php?id='.$cartoon["id"].'">
         			<h2 style="font-weight: 600; color:black;">'.$cartoon["title"].'</h2>
            	</a>
         		<p class="text-justify" style="font-weight: 600">'.$cartoon["full_text"].'</p>
         </div>

         ';




    }

?>

</div>

  <?php require_once "blocks/footer.php"; ?>

</body>
</html>

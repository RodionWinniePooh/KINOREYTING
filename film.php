<!DOCTYPE html>
<html>
<head>

	<?php //Подлкючение звезд к мультфильмам
  require('_drawrating.php');
  ?>

	<?php
	require_once "functions/functions.php";
	$film = getFilm (1, $_GET["id"]);
	$title = $film["title"];
	require_once "blocks/head.php";
	?>

	<script type="text/javascript" language="javascript" src="js/behavior.js"></script>
	<script type="text/javascript" language="javascript" src="js/rating.js"></script>
	<link rel="stylesheet" type="text/css" href="css/rating.css" />


</head>

<body>

	<?php require_once "blocks/header.php" ?>






  <div class="container">
    <?php



    echo
    '

    <div class="col-md-3" style="margin-bottom:20px;">
      <div class="card-block">
        <div class="img-card">





          <img src="/img/film/'.$film["title"].'.jpg" class="w-100">
        </div>
    </div>
    </div>

    <h2 style="font-weight: 600">'.$film["title"].'</h2>

    <p class="text-justify" style="font-weight: 600">'.$film["full_text"].'</p>






    <div class="container" style="margin-bottom:20px;">
      <div class="embed-responsive embed-responsive-16by9">
        <video  controls="controls" controls crossorigin playsinline poster="poster/film/'.$film["id"].'.jpg">
          <source src="mp4/film/'.$film["mp4"].'" type="video/mp4" size="1080">

          <!-- Caption files -->
          <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
          <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
          <!-- Fallback for browsers that dont support the <video> element -->
          <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
        </video>
      </div>
    </div>






    <div class="container" style="margin-bottom:20px;">'.$film["coment"].'</div>





    ';
    ?>

<div class="container">


		<?php
    echo rating_bar($film["id"].'filmid',5);
 ?>
</div>




  </div>
  <?php require_once "blocks/footer.php"; ?>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>

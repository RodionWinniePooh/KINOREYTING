<?php
session_start();



$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting');
if(!isset($_COOKIE['user_id'])) {
  if(isset($_POST['submit'])) {
    $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));



    if(!empty($user_username) && !empty($user_password)) {
      $query = "SELECT `user_id` , `username` FROM `signup` WHERE username = 'Rodya' AND password = 'Words' AND admin = 1 ";
          $admin = "1";
      $_SESSION['Administrator']="$admin";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_assoc($data);
        setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
        setcookie('username', $row['username'], time() + (60*60*24*30));

        header('Location:  /admin/index.php');
      }
    }





    if(!empty($user_username) && !empty($user_password)) {
      $query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_assoc($data);
        setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
        setcookie('username', $row['username'], time() + (60*60*24*30));
        $home_url = 'http://' . $_SERVER['HTTP_HOST'];
        header('Location: '. $home_url);
      }
      else {
        echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
      }
    }
    else {
      echo 'Извините вы должны заполнить поля правильно';
    }
  }
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>


  <?php
  require_once "blocks/head.php";


  $title = "Фильмы 2018";


 // $serial = getSerial(5,$idSerial);
 // $cartoon = getCartoon(5,$idCartoon);
  ?>



</head>
<body style="background-color: #f2f3f5">






  <?php require_once "blocks/header.php";
  ?>




  <!-- Plyr resources and browser polyfills are specified in the pen settings -->



<div style="background-color: #2d3246">


  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" >

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/carusel/1.jpg" alt="Первый слайд">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/carusel/2.jpg" alt="Второй слайд">
        </div>

        <div class="carousel-item" style="   box-shadow: 0 0 10px 10px black inset;">
          <img class="d-block w-100" src="img/carusel/3.jpg" alt="Третий слайд">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/carusel/4.jpg" alt="Четвёртый слайд">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/carusel/5.jpg" alt="Пятый слайд">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/carusel/6.jpg" alt="Шестой слайд">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/carusel/7.jpg" alt="Седьмой слайд">
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>

</div>







  <main class="container">
    <section class="movies" id="movies">
      <a href="/allcartoon.php" style="color:black">
        <h2 style="font-weight: 600">Мультфильмы</h2>
      </a>
      <div class="row" style="background-color: white;">
        <?php


$connection = mysqli_connect("localhost", "root", "", "kinoreyting");
  if ($connection == false) {
    echo "Error!";
    echo mysqli_connect_errno();
    exit();
  }
$query = mysqli_query($connection, "SELECT *FROM cartoons ORDER BY id DESC LIMIT 5");

  while($cartoon = mysqli_fetch_assoc($query)){

       echo '
       <div class="card" style="width: 18rem; margin:20px; border: none;">
          <a href="/cartoons.php?id='.$cartoon["id"].'">
            <img src="/img/cartoons/'.$cartoon["title"].'.jpg" alt="Movie" class="card-img-top" style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">

          <a href="/cartoons.php?id='.$cartoon["id"].'">
            <p class="card-text" style="padding-top:10px; font-weight: 600; color:black;">'.$cartoon["title"].'</p>
          </a>
       </div>
       ';

  }



        ?>
      </div>
    </section>
  </main>




 <main class="container">
  <section class="movies" id="movies">
    <a href="/allfilm.php" style="color:black">
      <h2 style="font-weight: 600">Фильмы</h2>
    </a>
    <div class="row" style="background-color: white;">

      <?php



$query = mysqli_query($connection, "SELECT *FROM `film` ORDER BY `id` DESC LIMIT 5");

  while($film = mysqli_fetch_assoc($query)){

       echo '
       <div class="card" style="width: 18rem; margin:20px; border: none;">


      <a href="/film.php?id='.$film["id"].'">
        <img src="/img/film/'.$film["title"].'.jpg" alt="Movie" class="card-img-top" style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
      </a>
      <a href="/film.php?id='.$film["id"].'">
        <p class="card-text" style="padding-top:10px; font-weight: 600; color:black;">'.$film["title"].'</p>
      </a>
       </div>
       ';

  }
     ?>

   </div>
 </section>
</main>


<main class="container">
    <a href="/allserial.php" style="color:black">
      <h2 style="font-weight: 600">Сериалы</h2>
    </a>
    <div class="row" style="background-color: white;">

      <?php


$query = mysqli_query($connection, "SELECT *FROM `serials` ORDER BY `id` DESC LIMIT 5");

  while($serial = mysqli_fetch_assoc($query)){

       echo '
       <div class="card" style="width: 18rem; margin:20px; border: none;">


       <a href="/serial.php?id='.$serial["id"].'">
        <img src="/img/serials/'.$serial["title"].'.jpg" alt="Movie" class="card-img-top" style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
       </a>

      <a href="/serial.php?id='.$serial["id"].'">
        <p class="card-text" style="padding-top:10px; font-weight: 600; color:black;">'.$serial["title"].'</p>
      </a>
       </div>
       ';

  }
     ?>

   </div>

</main>














  <?php require_once "blocks/footer.php"; ?>




<!-- Put this script tag to the <head> of your page -->


  <script type="text/javascript">
    VK.init({apiId: 6723741, onlyWidgets: true});
  </script>

  <!-- Put this div tag to the place, where the Like block will be -->







  <!-- Для подключения бцтстрапа -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>








  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>

  <!-- VK Widget -->
  <div id="vk_community_messages"></div>
  <script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 168705211, {tooltipButtonText: "Есть вопрос?"});
  </script>



</body>
</html>

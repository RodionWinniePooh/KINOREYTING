<?php
$dbc = mysqli_connect('localhost', 'root', '', 'kinoreyting') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2))   {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);

			mysqli_close($dbc);
            header("Location: /index.php");
			exit();
		}
		else {
			echo 'Логин уже существует';
		}

	}
}
?>
<!DOCTYPE html>
<html>
<head>


<?php
    require_once "blocks/head.php";
?>





</head>
<body>



<div class="simple-login-container">
    <h2>Форма регистрации</h2>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" required placeholder="Логин" name="username">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" name="password1" required placeholder="Пароль" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" name="password2" required placeholder="Введите пароль ещё раз" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" name="submit" class="btn btn-block btn-login" placeholder="Enter your Password" >
        </div>
    </div>

		<div class="row">
        <div class="col-md-12 form-group">
						<a href="/index.php">
            	<button type="button" name="button" class="btn btn-block btn-info">Назад на главную</button>
						</a>
        </div>
    </div>

</form>
</div>






<style>
    body{
    background-color:#2d3246;
    font-size:14px;
    color:#fff;
}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
</style>


  <?php require_once "blocks/footer.php"; ?>


</body>

</html>

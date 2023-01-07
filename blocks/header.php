<style>
  .dropdown:hover > .dropdown-menu {
    display: block;
}
body {

    background-color: #f3f3f3 !important ;
}
</style>




<nav class="navbar navbar-expand-lg navbar-light bg-light">



  <a class="navbar-brand" href="about/about.php" style="font-size: 25px;">Kinoreyting</a>
  <img src="ico/popcorn.png" width="35" height="35"  >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/" style="font-size: 16px;">Главная <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="/allfilm.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
          Фильмы
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/adventurefilm.php">Боевики</a>
          <a class="dropdown-item" href="/comedyfilm.php">Комедии</a>
          <li>



            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="/allserial.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
                Сериалы
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/adventureserial.php">Боевики</a>
                <a class="dropdown-item" href="/comedyserial.php">Комедии</a>
              </li>


              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="/allcartoon.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
                  Мультфильмы
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/overseascartoon.php">Зарубежные</a>
                  <a class="dropdown-item" href="/adventurecartoon.php">Приключения</a>
                </li>

                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user-circle" style="font-size:25px"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter" style="color: black; text-decoration: none;">
                    Войти или зарегистрироваться
                  </button>
                </li>







              </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="search.php" style="float: right;">
                      <label class="field a-field a-field_a1 page__field">
                        <input type="search" name="search" class="field__input a-field__input" placeholder="Тачки 3" required>
                          <span class="a-field__label-wrap">
                            <span class="a-field__label">Введите название</span>
                          </span>
                      </label>

                  <button type="submit" name="submit" class="button button5" ><i class="fa fa-search"></i></button>


                </form>





            </div>

          </nav>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style=" font-weight: 600; font-size: 18px;">Войдите или Зарегистрируйтесь</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

                      <?php
                if(empty($_COOKIE['username'])) {
              ?>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">









                        <label class="field a-field a-field_a1 page__field">
                          <input type="text" class="field__input a-field__input" placeholder="Введите логин" required name="username">
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Логин</span>
                            </span>
                        </label>
                        <br/>

                        <label class="field a-field a-field_a1 page__field" style="padding-top: 30px;">
                          <input type="password" class="field__input a-field__input" placeholder="Введите пароль" required name="password">
                            <span class="a-field__label-wrap">
                              <span class="a-field__label">Пароль</span>
                            </span>
                        </label>




      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success">Войти</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад</button>

      </div>

                <a href="signup.php">Регистрация</a>
              </form>
              <?php
              }
              else {
              ?>
              <p><a href="myprofile.php">Мой профиль</a></p>
              <p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; session_destroy();?>)</a></p>
              <?php
              }
              ?>
      </div>



    </div>

  </div>
</div>







<style>
  /*
=====
LEVEL 1. RESET STYLES
=====
*/

.field{
  --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);
}

.field__input{
  background-color: transparent;
  border-radius: 0;
  border: none;

  -webkit-appearance: none;
  -moz-appearance: none;

  font-family: inherit;
  font-size: 1em;
}

.field__input:focus::-webkit-input-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

.field__input:focus::-moz-placeholder{
  color: var(--uiFieldPlaceholderColor);
  opacity: 1;
}

/*
=====
LEVEL 2. CORE STYLES
=====
*/

.a-field{
  display: inline-block;
}

.a-field__input{
  display: block;
  box-sizing: border-box;
  width: 100%;
}

.a-field__input:focus{
  outline: none;
}

/*
=====
LEVEL 3. PRESENTATION STYLES
=====
*/

/* a-field */

.a-field{
  --uiFieldHeight: var(--fieldHeight, 40px);
  --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
  --uiFieldBorderColor: var(--fieldBorderColor);

  --uiFieldFontSize: var(--fieldFontSize, 1em);
  --uiFieldHintFontSize: var(--fieldHintFontSize, 1em);

  --uiFieldPaddingRight: var(--fieldPaddingRight, 15px);
  --uiFieldPaddingBottom: var(--fieldPaddingBottom, 15px);
  --uiFieldPaddingLeft: var(--fieldPaddingLeft, 15px);

  position: relative;
  box-sizing: border-box;
  font-size: var(--uiFieldFontSize);
  padding-top: 1em;
}

.a-field .a-field__input{
  height: var(--uiFieldHeight);
  padding: 0 var(--uiFieldPaddingRight) 0 var(--uiFieldPaddingLeft);
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColor);
}

.a-field .a-field__input::-webkit-input-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.a-field .a-field__input::-moz-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.a-field .a-field__input:not(:placeholder-shown) ~ .a-field__label-wrap .a-field__label{
  opacity: 0;
  bottom: var(--uiFieldPaddingBottom);
}

.a-field .a-field__input:focus::-webkit-input-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.a-field .a-field__input:focus::-moz-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.a-field .a-field__label-wrap{
  box-sizing: border-box;
  width: 100%;
  height: var(--uiFieldHeight);

  pointer-events: none;
  cursor: text;

  position: absolute;
  bottom: 0;
  left: 0;
}

.a-field .a-field__label{
  position: absolute;
  left: var(--uiFieldPaddingLeft);
  bottom: calc(50% - .5em);

  line-height: 1;
  font-size: var(--uiFieldHintFontSize);

  pointer-events: none;
  transition: bottom .2s cubic-bezier(0.9,-0.15, 0.1, 1.15), opacity .2s ease-out;
  will-change: bottom, opacity;
}

.a-field .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
  opacity: 1;
  bottom: var(--uiFieldHeight);
}

/* a-field_a1 */

.a-field_a1 .a-field__input{
  transition: border-color .2s ease-out;
  will-change: border-color;
}

.a-field_a1 .a-field__input:focus{
  border-color: var(--fieldBorderColorActive);
}

/* a-field_a2 */

.a-field_a2 .a-field__label-wrap:after{
  content: "";
  box-sizing: border-box;
  width: 0;
  height: var(--uiFieldBorderWidth);
  background-color: var(--fieldBorderColorActive);

  position: absolute;
  bottom: 0;
  left: 0;

  will-change: width;
  transition: width .285s ease-out;
}

.a-field_a2 .a-field__input:focus ~ .a-field__label-wrap:after{
  width: 100%;
}

/* a-field_a3 */

.a-field_a3{
  padding-top: 1.5em;
}

.a-field_a3 .a-field__label-wrap:after{
  content: "";
  box-sizing: border-box;
  width: 100%;
  height: 0;

  opacity: 0;
  border: var(--uiFieldBorderWidth) solid var(--fieldBorderColorActive);

  position: absolute;
  bottom: 0;
  left: 0;

  will-change: opacity, height;
  transition: height .2s ease-out, opacity .2s ease-out;
}

.a-field_a3 .a-field__input:focus ~ .a-field__label-wrap:after{
  height: 100%;
  opacity: 1;
}

.a-field_a3 .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
  bottom: calc(var(--uiFieldHeight) + .5em);
}

/*
=====
LEVEL 4. SETTINGS
=====
*/

.field{
  --fieldBorderColor: #000000;
  --fieldBorderColorActive: #000000;
}





.button5 {
  margin-top: 10px;
  padding-bottom: 16px;
  background: none;
  font-size: 18px;
  border: none;
  cursor: pointer;
}









</style>

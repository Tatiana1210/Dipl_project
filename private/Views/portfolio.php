<!DOCTYPE>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Language school">
  <meta name="description" content="Сайт школы">
  <title>Polyglot</title>
  <link rel="stylesheet" href="/css/Stylesforschool.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="/css/fontAwesome.css">
  <link media= "screen and (max-device-width: 768px)" rel="stylesheet"  href="/css/mobile.css" >
  <link media= "screen and (max-device-width: 1040px)" rel="stylesheet"  href="/css/mobile.css" >
<body class="catalog">
<section class="first_section">
  <div class="registr">
   <img class="registr" src="../img/personalization.png">
   <a id="registr_toggler" href="#" onclick="openRegbox()"> <h3 class="registr"> Личный кабинет </h5> <a>
   <p class="after-box"></p>
 </div>
<div id="enter_modal">
   <div id="close_modal_for_reg" onclick="closeRegBox()">
    <img src="../img/close.png">
   </div>
   <form>
       <div class="name_to_enter">
         <label class="form" for="email">E-mail</label>
         <input type="email" name="" value="" id="email" required>
       </div>
       <div class="paswd_to_enter">
         <label class="form" for="paswd">Пароль</label>
         <input type="password" name="paswd" value="" id="paswd" required>
       </div>
       <div class="enter_or_registr">
        <div class="ent">
          <button class="ent" type="submit" name="but"> Войти </button>
        </div>
        <div class="reg">
          <a class="reg" href="/pages/form.php"> Регистрация </a>
        </div>
        <div class="clr">
         <button class="clr" type="reset"> Очистить </button>
        </div>
       </div>
   </form>
</div>
<script type="text/javascript">
function openRegbox() {
 var div = document.getElementById('enter_modal');
 div.style.display = 'block'
 };
function closeRegBox() {
 var div = document.getElementById('enter_modal');
 div.style.display = 'none'
};
</script>
  <div class="head">
                <div class="main">
                        <h5 class="losung">The whole world in your head</h5>
                        <h1>Polyglot</h1>
                        <p class="invitation"> Live and learn</p>
                </div>
                  <div class="dist">
                        <a class="pushtoknow" href="/pages/form.php"> Начать учиться прямо сейчас!</a>
                  </div>
   </div>
 </section>
 <section class="navigation">
          <nav>
                    <ul class="top_nav">
                        <li class="top"> <a class="top" href="../index.php"> Главная </a> </li>
                        <li class="top"> <a class="top" href="/pages/about_us.php"> О нас </a> </li>
                        <li class="top"> <a class="top" href="/pages/teachers.php"> Преподаватели </a> </li>
                        <li class="top"> <a class="top" href="/pages/courses.php"> Расписание курсов </a> </li>
                         <li class="top"> <a class="top" href="/pages/price.php"> Цены и акции  </a> </li>
                         <li class="top"> <a class="top" href="/pages/to_know_level.php"> Узнать свой уровень  </a> </li>
                        <li class="top shoop"> <a class="top" href="/pages/schoop_online.php"> Интернет-магазин </a>
                           <ul class="level-2">
                           <li>Книги для самобразования</li>
                           <li>Учебники</li>
                           <li>Видеокурсы</li>
                          </ul> </li>
                        <li class="top"> <a class="top" href="/pages/contacts.php"> Контакты </a> </li>

                    </ul>
              </div>
          </nav>
 </section>


 <section class="footer">
       <div class="madeby">
       <h6> Copyright © 2017 Company Name - Design: <span style="color: #d43d3d">
         Tatiana Kolomiets </span> </h6>
       </div>
         <div class="socialnetworks">
           <ul class="socialnetworks">
                   <li class="socialnetworks"> <a class="socialnetworks" href="https://www.facebook.com"> <img class="socialnetworks" src="/img/facebook.png"> </a> </li>
                   <li class="socialnetworks"><a class="socialnetworks" href="https://twitter.com"> <img class="socialnetworks" src="/img/ twitter.png"> </a> </li>
                   <li class="socialnetworks"><a class="socialnetworks" href="https://www.instagram.com"> <img class="socialnetworks" src="/img/insta.png"> </a> </li>
                   <li class="socialnetworks"><a class="socialnetworks" href="https://vk.com"> <img class="socialnetworks" src="/img/vk.png"> </a></li>
           <ul>
         </div>
       </div>
     </div>
     <div class= "after-box">
        <p class="invisible"></p>
     </div>
 </section>
</body>
 </html>

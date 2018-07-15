<!DOCTYPE html>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="keywords" content="Language school">
   <meta name="description" content="Сайт школы">
   <title><?php echo $title; ?></title>
   <link rel="stylesheet" href="css/main_stl.css">
   <link rel="stylesheet" href="/css/form.css">
   <link rel="stylesheet" href="/css/schedule_calendar.css">
   <link rel="stylesheet" href="/css/reviews.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="../../fontAwesome.css">
   <link media= "screen and (max-device-width: 768px)" rel="stylesheet"  href="/css/mobile.css" >
   <link media= "screen and (max-device-width: 1040px)" rel="stylesheet"  href="/css/mobile.css" >
   <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
 <body class="catalog">
 <section class="first_section">
 <!-- <marquee direction="left"> Только в июле скидка 10% на все видео курсы!</marquee > -->
   <section class="navigation">
            <nav>
                      <ul class="top_nav">
                          <li class="top"> <a class="top" href="/"> Главная </a> </li>
                          <li class="top"> <a class="top" href="/about_us"> О нас </a> </li>
                          <li class="top"> <a class="top" href="/teachers"> Преподаватели </a> </li>
                          <li class="top"> <a class="top" href="/schedule/eng_schedule"> Расписание курсов </a> </li>
                           <li class="top"> <a class="top" href="/price"> Цены и акции  </a> </li>
                           <li class="top"> <a class="top" href="/testLevel"> Узнать свой уровень  </a> </li>
                           <li class="top shoop" id="level1"> <a class="top" href="#"> Интернет-магазин </a>
                              <ul id="level2" class="level2">
                              <li class="level2"> <a class="top" href="/goods"> Книги для самобразования </a> </li>
                              <li class="level2"> Учебники </li>
                              <li class="level2">Видеокурсы</li>
                             </ul> </li>
                           <li class="top"> <a class="top" href="/contact"> Контакты </a> </li>
                           <li class="top"> <a class="top" href="/reviews"> Отзывы </a> </li>
                           </ul>
                </div>
            </nav>
   </section>

   <div class="registr">
    <img class="registr" src="/img/personalization.png">
    <a id="registr_toggler" href="#" onclick="openRegbox()"> <h3 class="registr"> Личный кабинет </h5> <a>
    <p class="after-box"></p>
  </div>

  <div class="place_for_basket">
  <img class="place_for_basket" src="/img/basket.png">
  <a id="basket_toggler" href="/pages/basket.php" > <h3 class="basket"> Корзина </h3> <a>
  <span id="cart-count"></span>
  <!-- echo $сount_item=$CartController->cartModel->CountItems(); -->
 </div>

 <!-- <div class="after-box"></div> -->


<div id="enter_modal">
    <div id="close_modal_for_reg" onclick="closeRegBox()">
     <img src="/img/close.png">
    </div>
    <form id="auth_form" method="post" action="">
        <div class="name_to_enter">
          <label class="form1"  for="login">Логин</label>
          <input class="form1"  type="text" name="login" value="" id="login" placeholder="Введите логин" required>
        </div>
        <div class="paswd_to_enter">
          <label class="form1"  for="password">Пароль</label>
          <input class="form1"  type="password" name="password" value="" id="password" placeholder="Введите пароль" required>
        </div>
        <div class="enter_or_registr">
         <div class="ent">
           <button id="enter_btn" type="submit" name="but"> Войти </button>
         </div>
         <div class="reg">
           <a class="reg" href="/account/registration"> Регистрация </a>
         </div>
         <div class="clr">
          <button class="clr" type="reset"> Очистить </button>
         </div>
        </div>
    </form>
</div>

<script src="/js/mainscript.js"></script>
<script src="/js/mail_request.js"></script>
<!-- <script src="/js/reg_form.js"></script> -->
<script src="../js/ajax_authorization.js"></script>

   <div class="head">
                 <div class="main">
                         <h5 class="losung">The whole world in your head</h5>
                         <h1>Polyglot</h1>
                         <p class="invitation"> Live and learn</p>
                 </div>
                 <div class="dist">
                    <a id="pushtoknow" href="#" onclick="openSendbox()">  Начать учиться прямо сейчас!</a>
                 </div>
                 <div id="send_box">
                   <div id="close_send_box" onclick="closeSendBox()">
                    <img src="/img/close.png">
                   </div>
                      <form id="send_form" action="/MailRequest/send" method="post">
                          <div>
                            <h2 class="send_box"> Оставь заявку сегодня и получи скидку 5% </h2>
                            <label class="form1" for="username">ФИО</label>
                            <input type="text"
                                   name="username"
                                   id="username"
                                   placeholder="Введите ФИО"
                                   required>
                          </div>
                          <div>
                            <label class="form1" for="tel">Телефон</label>
                            <input type="tel" name="phone_num" value="" id="phone_num" placeholder="+7(900)777-77-77" required>
                          </div>
                          <div>
                            <label class="form1"  for="email">E-mail</label>
                            <input class="form1"  type="email" name="mail" value="" id="mail" placeholder="Введите e-mail" required>
                          </div>
                          <div>
                              <labe class="form1" for="comment">Комментарий</label>
                              <textarea class="form1" name="textarea" id="comment" rows="13"></textarea>
                          </div>
                          <div class="enter_or_registr">
                           <div class="ent">
                             <button id="send_btn" type="submit" name=" send_button"> Готово </button>
                           </div>
                           <div class="clr">
                            <button class="clr" type="reset"> Очистить </button>
                           </div>
                          </div>
                        </form>
                 </div>
    </div>
  </section>


<?php include $view; ?>
  <!-- cм controllers $view = 'index_view.php';  -->


  <section>
  <section class="edit-box">
  <div class="edit-box">
  <img src= "img/first-service-main.png">
  </div>
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

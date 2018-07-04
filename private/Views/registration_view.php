<link rel="stylesheet" href="../css/styles_for_school.css">
<body>
  <section class="registration">
  <h2 class="form">Регистрация</h2>
  <form action="/Account/process_registration" method="post" name="form" id="reg_form">
    <div>
      <label class="form1" for="f1">ФИО</label>
      <input type="text"
             name="username"
             id="f1"
             placeholder="Введите ФИО"
             required>
    </div>
    <div>
      <span class="form1" >Пол:</span>
      <input style="width: 7vh; height:7vh; margin-left:2%; margin-bottom: 2%;" type="radio" name="gender" value="male" id="gender"><label class="form1" for="male">М</label>
      <input style="width: 7vh; height:7vh; margin-left:2%; margin-bottom: 2%;" type="radio" name="gender" value="female" id="gender"><label class="form1" for="female">Ж</label>
    </div>
    <div>
      <label class="form1" for="age">Возраст</label>
      <input type="number" name="age" value="" id="age" min="0" max="100">
    </div>
    <div>
      <label class="form1" for="tel">Телефон</label>
      <input type="tel" name="tel" value="" id="tel" placeholder="+7(900)777-77-77" required>
    </div>
    <div>
      <select class="choose_city" name="citySelector">
          <option value="">Выберите город...</option>
          <option value="citySpb">Санкт-Петербург</option>
          <option value="cityMsk">Москва</option>
          <option value="cityNsk">Новосибирск</option>
      </select>
    </div>
    <div>
      <label class="form1"  for="email">E-mail</label>
      <input class="form1"  type="email" name="email" value="" id="email" placeholder="Введите e-mail" required>
    </div>
    <div>
      <label class="form1"  for="login">Логин</label>
      <input class="form1"  type="text" name="login" value="" id="login" placeholder="Введите логин" required>
    </div>
    <div>
      <label class="form1"  for="password">Пароль</label>
      <input class="form1"  type="password" name="password" value="" id="password" placeholder="Введите пароль" required>
    </div>
    <div class="buttons_to_reg">
      <button id="enter_btn" type="submit" name="submit" value="">Зарегистрироваться</button>
      <button class="clr" type="reset" name="button">Очистить</button>
    </div>
  </form>
</section>
<!-- <script src="../js/reg_form.js"></script> -->
<script src="../js/ajax_reg.js"></script>
</body>
</html>

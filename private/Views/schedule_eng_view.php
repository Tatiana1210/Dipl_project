<body onload="javascript:document.getElementById('buttonA1').click()">
<link rel="stylesheet" href="../css/main_stl.css">
<section class="schedule">
<h2 class="schedule"> Группы на старте </h2>
<div class="calend_box">
  <div class="day">
  <div id="cal_placeholder"></div>
  <script src="../js/calendar.js" charset="utf-8"></script>
  </div>
</div>
<div class="instruction_list">
<ul>
  <li> Выберите  вкладку с нужным уровнем обучения, а затем удобную дату начала курса. </li>
  <li> Если вы начинающий с нуля, выбирайте уровень А1.1. </li>
  <li> При наличии мест вы можете присоединиться к группам, занятия в которых уже начались. </li>
  <li> Если вы не знаете своего уровня, пройдите бесплатное <span style="color: red;"> <a href="/testLevel"> тестирование </a> </span> в удобное время. </li>
</ul>
</div>
<div class="specialization">
<h2>Я хочу изучать язык: </h2>
<a class="reg" href="/schedule/eng_schedule"> Английский </a>
<a class="reg" href="/schedule/de_schedule"> Немецкий </a>
</div>
<h2 style="margin-left:20%;">Вы выбрали: <span style="color:red;"> Английский язык </span></h2>
<div class="level_btns">
 <h2>Мой уровень:</h2>
 <button id="buttonA1" type="button" name="level1" onclick="LevelA1.total()" > A1 </button>
 <button id="buttonA2" type="button" name="level2" onclick="LevelA2.total()"> A2 </button>
 <button id="buttonB1" type="button" name="level3" onclick="LevelB1.total()"> B1 </button>
 <button id="buttonB2" type="button" name="level4" onclick="LevelB2.total()"> B2 </button>
 <button id="buttonC1" type="button" name="level5" onclick="LevelC1.total()"> C1 </button>
</div>
<div id="schedule_eng" class="schedule_table">
  <div id="main" class="table">
     <div id="first" class="td">
        <span>Дата начала</span>
     </div>
     <div id="second" class="td">
        <span>Дни</span>
     </div>
     <div id="third" class="td">
         <span>Время</span>
     </div>
     <div id="fourth" class="td">
         <span>Детали</span>
     </div>
  </div>
  <div id="row1" class="table row">
     <div id="row1_col1" class="td col1">
     </div>
     <div id="row1_col2" class="td col2">
     </div>
     <div id="row1_col3" class="td col3">
     </div>
     <div id="row1_col4" class="td col4">
     </div>
  </div>
  <div id="row2" class="table row">
     <div id="row2_col1" class="td col1">
     </div>
     <div id="row2_col2" class="td col2">
     </div>
     <div id="row2_col3" class="td col3">
     </div>
     <div id="row2_col4" class="td col4">
     </div>
  </div>
  <div id="row3" class="table row">
     <div id="row3_col1" class="td col1">
     </div>
     <div id="row3_col2" class="td col2">
     </div>
     <div id="row3_col3" class="td col3">
     </div>
     <div id="row3_col4" class="td col4">
     </div>
</div>
</div>
</section>
<script src="/js/schedule_eng.js"></script>
<body>

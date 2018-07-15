
<body>
<section class="reviews">
<h2>Нам важно Ваше мнение!</h2>
<div class="offset-2 col-7">
    <form action="" id="review_form" >
        <div class="form-group">
            <label for="full_name">ФИО</label>
            <input name="full_name" type="text" class="form-control" id="full_name" placeholder="Введите имя">
        </div>
            <?php foreach ($reviews as $key => $val):?>
            <input style="display:none;" id="date_time" type="datetime-local" name="date_time" value="<?php echo $val['date_time']?>">
            <?php endforeach;?>
            <label for="review_text">Текст отзыва</label>
            <textarea class="form-control" name="review_text" id="review_text" rows="13"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
</div>
</section>
<section class="schow_reviews">
  <?php foreach ($reviews as $key => $value):?>
  <div class="review_column">
          <h2><?php echo $value['full_name'];?></h2>
          <p><?php echo $value['date_time'];?></p> <br>
          <p><?php echo $value['review_text'];?></p>
  </div>
  <?php endforeach; ?>
</section>
<script src="js/ajax_review.js"></script>
</body>

<!--
<body>
<section class="reviews">
<h2>Нам важно Ваше мнение!</h2>
<div class="offset-2 col-7">
    <form id="review_form" >
        <div class="form-group">
            <label for="full_name">ФИО</label>
            <input name="full_name" type="text" class="form-control" id="full_name" placeholder="Введите имя">
        </div>
            <?php foreach ($reviews as $key => $val):?>
            <input style="display:none;" id="date_time" type="datetime-local" name="date_time" value="<?php echo $val['date_time']?>">
            <?php endforeach; ?>
            <!-- <script type="text/javascript">

              function formatDate(date){
            	var year = date.getFullYear();
            	var month = date.getMonth()+ 1;
            	var day = date.getDay() + 1;
            	var time = date.getHours()+ ':' + date.getMinutes() +':' + date.getSeconds();
            	return year + '.'+ '0' + month + '.' +'0' + day + '-' + time;

              var insert_data = document.getElementById("date_time");
              insert_data.value = formatDate();
            }
            </script> -->
            <!-- <label for="review_text">Текст отзыва</label>
            <textarea class="form-control" name="review_text" id="review_text" rows="13"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
</div>
</section>
<section class="schow_reviews">
  <?php foreach ($reviews as $key => $value):?>
  <div class="review_column">
          <h2><?php echo $value['full_name'];?></h2>
          <p><?php echo $value['date_time'];?></p> <br>
          <p><?php echo $value['review_text'];?></p>
  </div>
  <?php endforeach; ?>
</section>
<script src="js/ajax_review.js"></script>
</body> --> -->

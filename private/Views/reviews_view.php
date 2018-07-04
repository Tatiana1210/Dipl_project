
<body>
<section class="reviews">
<h2>Нам важно Ваше мнение!</h2>
<div class="offset-2 col-7">
    <form action="/articles/add" method="post">
        <div class="form-group">
            <label for="full_name">ФИО</label>
            <input name="title" type="text" class="form-control" id="article_title" placeholder="Введите имя">
        </div>
            <label for="article_text">Текст отзыва</label>
            <textarea class="form-control" id="article_text" rows="13"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Добавить</button>
    </form>
</div>
</section>
<script src="../js/review.js"></script>
</body>

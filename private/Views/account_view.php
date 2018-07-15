<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="true">Статьи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" id="bookmarks-tab" data-toggle="tab" href="#bookmarks" role="tab" aria-controls="bookmarks" aria-selected="false">Избранные статьи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="add-article-tab" data-toggle="tab" href="#addarticle" role="tab" aria-controls="addarticle" aria-selected="false">Добавить статью</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" id="friends-tab" data-toggle="tab" href="#friends" role="tab" aria-controls="friends" aria-selected="false">Друзья</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Сообщения (2)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Профиль</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="articles" role="tabpanel" aria-labelledby="articles-tab">Все статьи автора</div>
        <div class="tab-pane fade" id="addarticle" role="tabpanel" aria-labelledby="add-article-tab">
            <p>***</p>
            <?php include_once "add_article_form.php";?>
        </div>
        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">messages</div>
        <div class="tab-pane fade" id="bookmarks" role="tabpanel" aria-labelledby="bookmarks-tab">bookmarks</div>
        <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends-tab">friends</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile">profile</div>
    </div>
</div>

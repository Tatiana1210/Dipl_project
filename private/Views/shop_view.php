<section class="shop">
    <h3>Книги для самообразования (дополнительные пособия)</h3>
    <?php foreach ($goods as $key => $value):?>
    <div class="goodsList">
            <h2><?php echo $value['title'];?></h2>
            <img width="350px" src="<?php echo $value['image'];?>.jpg"> <br>
            <h3><?php echo $value['price'];?> ₽ </h3>
            <a href="/goods/show/<?php echo $value['id'];?>">Подробнее...</a> <br>
            <a href="/goods/show/<?php echo $value['id'];?>">В корзину...</a>
    </div>
    <?php endforeach; ?>
</section>

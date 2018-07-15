
<section class="shop">
    <h3>Книги для самообразования (дополнительные пособия)</h3>
    <?php foreach ($goods as $key => $value):?>
    <div class="goodsList">
            <h2><?php echo $value['title'];?></h2>
            <img width="350px" src="<?php echo $value['image'];?>.jpg"> <br>
            <h3><?php echo $value['price'];?> ₽ </h3>
            <a href="/goods/show/<?php echo $value['id_good'];?>">Подробнее...</a> <br>
            <span> Количество товаров в корзине: <?php  ?> </span> <br>
            <a href="/goods/add/<?php echo $value['id_good'];?>" class="add_to_cart"><Добавить в корзину</a>
            <button class="remove-from-cart" id="<?php echo $value['id_good'];?>">Убрать из корзины</button>
    </div>
    <?php endforeach; ?>
    <!-- echo CountItems(); -->
</section>

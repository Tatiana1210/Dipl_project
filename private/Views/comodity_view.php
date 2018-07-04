<div class="container">
    <p class="text-center">
        <?php echo $comodity['title']; ?>
    </p>
    <p>
        <?php echo $comodity['author']; ?>
    </p>
    <p>
        <?php echo $comodity['language']; ?>
    </p>
    <p class="text-center">
        <img width="600rem" src="<?php echo $comodity['image'];?>.jpg"
             alt="<?php echo $comodity['image'];?>.jpg">
    </p>
    <p>
        <?php echo $comodity['description']; ?>
    </p>
    <p>
        <?php echo $comodity['price'];?> ₽ 
    </p>
   <!-- include_once "comments_block.php" -->
</div>

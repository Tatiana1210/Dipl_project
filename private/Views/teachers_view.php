<section class="teachers">
    <h3>Учителя</h3>
    <?php foreach ($teachers as $key => $value):?>
    <div class="teachers">
            <h2><?php echo $value['full_name'];?></h2>
            <img width="350px" src="<?php echo $value['image'];?>.jpg"> <br>
            <p><?php echo $value['description'];?></p> <br>
            <h3><?php echo $value['specialization'];?></h3>
            <img width="100px" src="<?php echo $value['flag'];?>.png"> <br>
    </div>
    <?php endforeach; ?>
</section>

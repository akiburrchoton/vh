<?php 

    $data = getData();
    $items = $data['counter_items'];

?>


<section id="counters" class="counters" style="background-color: <?php echo $data['background_color'] ?>">
    <div class="container">
        <div class="counter-holder">

            <?php foreach($items as $item): ?>

            <div class="single-counter">
                <h4 class="count"><?php echo $item['count'] ?></h4>
                <p class="body-2"><?php echo $item['count_text'] ?></p>
            </div>

            <?php endforeach ?>

        </div>
    </div>
</section>



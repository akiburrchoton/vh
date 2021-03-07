<?php 

    $data = getData();

?>


<div class="<?php echo ($data['accor_dark_bg'] == 'yes')? 'accordion-container':''?>generic-accordion accordion-main">
    <div class="container">
        
        <?php foreach ($data['accordion'] as $item): ?>

        <button class="accordion lead-text"><?php echo $item['title'] ?></button>
        <div class="panel">
            <?php echo $item['description'] ?>
        </div>

        <?php endforeach ?>
    </div>
</div>
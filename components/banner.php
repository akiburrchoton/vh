<?php 

$data = getData();


?>

<section class="hero banner-generic">
    <div class="hero-content">
        <div class="banner-container">
            <div class="single-slider" style="background-image: url('<?php echo wp_get_attachment_url($data['image'], 'full') ?>');">    
                <div class="slider-content">
                    <div class="info-holder">
                        <?php if(!empty($data['title'])): ?>
                            <h1 class="slider-title"><?php echo $data['title'] ?></h1>             
                        <?php endif ?>

                        <?php if(!empty($data['subtitle'])): ?>
                            <h3><?php echo $data['subtitle'] ?></h3>
                        <?php endif ?>

                        <?php if(!empty($data['description'])): ?>
                            <p><?php echo $data['description'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
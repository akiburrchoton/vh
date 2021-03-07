<?php 
    $data = getData();
    $hero_slider = $data['hero_slides'];
    $count_slides = sizeof($hero_slider);
?>

<section class="hero" id="home-hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-slider-container">
                <?php $i = 0 ?>
                    <?php foreach($hero_slider as $slider): ?> 

                    <div class="single-slider" style="background-image: url('<?php echo wp_get_attachment_image_src($slider['image'], 'full')[0] ?>');">    
                        <div class="slider-content">
                            <div class="info-holder">
                                <?php 
                                    if($i == 0):
                                        if(!empty($slider['title'])):
                                ?>
                                        <h1 class="slider-title"><?php echo $slider['title'] ?></h1>
                                        <?php endif; ?>

                                <?php 
                                    else: 
                                        if(!empty($slider['title'])):
                                ?>
                                    <h2 class="slider-title"><?php echo $slider['title'] ?></h2>
                                <?php 
                                    endif;
                                endif;
                                ?>

                                <?php if(!empty($slider['subtitle'])): ?>
                                    <p class="slider-detail body-2"><?php echo $slider['subtitle'] ?></p>
                                <?php endif ?>
                                <?php if(!empty($slider['btn-title'])): ?>
                                    <a href="<?php echo $slider['btn-url'] ?>" class="squared-btn solid-primary-btn btn"><?php echo $slider['btn-title'] ?></a>
                                <?php endif ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endforeach ?>

            </div>
            <div class="hero-bottom">
                <?php if($count_slides > 1): ?>
                <div class="hero-slider-controls">
                    <button class="slider-left prev" type="button" aria-label="Slider Buttons">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5522 16.0001L22.2761 25.724L20.3905 27.6096L8.78101 16.0001L20.3905 4.39062L22.2761 6.27624L12.5522 16.0001Z" fill="white"/>
                        </svg>
                    </button>

                    <button class="slider-right next" type="button" aria-label="Slider Buttons">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4477 16.0001L9.72388 6.27624L11.6095 4.39062L23.219 16.0001L11.6095 27.6096L9.72388 25.724L19.4477 16.0001Z" fill="white"/>
                        </svg>
                    </button>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

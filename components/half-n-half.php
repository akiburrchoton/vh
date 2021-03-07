<?php 

    $data = getData();
    $bg_image = $data['bg_img'];
    $img_bg = wp_get_attachment_image($bg_image, 'full');
    $section_title = $data['section_title'];
    $count = sizeof($data['half_and_half']);
?>


<div class="background-half-n-half" style="<?php echo (empty($img_url))? 'background-color: '.$data["background_color"].'': '' ?>">
    <?php
     
        if(!empty($img_bg)):
            echo wp_get_attachment_image($bg_image, 'full');
        endif

    ?>
    <div class="half-n-half-container container">

        <?php if($section_title): ?>
            <h2 class="section-title text-center"><?php echo $section_title ?></h2>
        <?php endif ?>        

        <div class="half-n-half-holder <?php echo ($data['half_slider'] == 1)? 'half-n-half-slider' : '' ?>">

            <?php foreach($data['half_and_half'] as $data_single): ?>

            <?php 
            
            if(!empty($data_single['video'])): 
            $get_media_url = wp_get_attachment_url($data_single['video'], 'full');
            
            ?>
            
            <!-- Markup for video -->

            <div class="single-item <?php echo ($data_single['row_reverse'] == 1)? 'row-reverse' : '' ?>">
                <div class="half-n-half-img">
                    <video class="technology-video" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline
                    >
                        <source src="<?php echo $get_media_url ?>" type="video/mp4">
                    </video>
                </div>
                <div class="half-n-half-details">
                    <h3><?php echo $data_single['title'] ?></h3>
                    <p class="lead-text"><?php echo $data_single['description'] ?></p>
                    <?php 
                        $btn_type = $data_single['btn_type'];
                        if(!empty($data_single['btn-title']) && $btn_type == 1): 
                    ?>
                        <a href="<?php echo $data_single['btn-url'] ?>" class="primary-btn" aria-label="Half and half button link"><?php echo $data_single['btn-title'] ?></a>
                    <?php 
                        elseif(!empty($data_single['btn-title']) && $btn_type == 2): 
                    ?>
                        <a href="<?php echo $data_single['btn-url'] ?>" class="secondary-btn" aria-label="Half and half button link"><?php echo $data_single['btn-title'] ?></a>
                    
                    <?php 
                        else: 
                    ?>
                        
                        <?php if(!empty($data_single['btn-title'])): ?>

                            <a href="<?php echo $data_single['btn-url'] ?>" class="text-link" aria-label="Half and half button link"><span class="link-text"><?php echo $data_single['btn-title'] ?></span>
                                <span class="link-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1548 10.0001L6.66668 4.51191C6.34124 4.18647 6.34124 3.65883 6.66668 3.3334C6.99212 3.00796 7.51975 3.00796 7.84519 3.3334L13.8522 9.34043C14.2165 9.70474 14.2165 10.2954 13.8522 10.6597L7.84519 16.6667C7.51975 16.9922 6.99212 16.9922 6.66668 16.6667C6.34124 16.3413 6.34124 15.8137 6.66668 15.4882L12.1548 10.0001Z" fill="#00B2FF"/>
                                    </svg>
                                </span>
                            </a>

                        <?php endif ?>

                    <?php endif ?>
                
                </div>
            </div>


            <?php else: ?>

            <!-- Markup for image -->

            <div class="single-item <?php echo ($data_single['row_reverse'] == 1)? 'row-reverse' : '' ?>">
                <div class="half-n-half-img">
                    <?php echo wp_get_attachment_image($data_single['image'], 'full') ?>
                </div>
                <div class="half-n-half-details">
                    <h3><?php echo $data_single['title'] ?></h3>
                    <p class="lead-text"><?php echo $data_single['description'] ?></p>
                    <?php 
                        $btn_type = $data_single['btn_type'];
                        if(!empty($data_single['btn-title']) && $btn_type == 1): 
                    ?>
                        <a href="<?php echo $data_single['btn-url'] ?>" class="primary-btn" aria-label="Half and half button link"><?php echo $data_single['btn-title'] ?></a>
                    <?php 
                        elseif(!empty($data_single['btn-title']) && $btn_type == 2): 
                    ?>
                        <a href="<?php echo $data_single['btn-url'] ?>" class="secondary-btn" aria-label="Half and half button link"><?php echo $data_single['btn-title'] ?></a>
                    
                    <?php 
                        else: 
                    ?>
                        <?php if(!empty($data_single['btn-title'])): ?>

                            <a href="<?php echo $data_single['btn-url'] ?>" class="text-link" aria-label="Half and half button link"><span class="link-text"><?php echo $data_single['btn-title'] ?></span>
                                <span class="link-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1548 10.0001L6.66668 4.51191C6.34124 4.18647 6.34124 3.65883 6.66668 3.3334C6.99212 3.00796 7.51975 3.00796 7.84519 3.3334L13.8522 9.34043C14.2165 9.70474 14.2165 10.2954 13.8522 10.6597L7.84519 16.6667C7.51975 16.9922 6.99212 16.9922 6.66668 16.6667C6.34124 16.3413 6.34124 15.8137 6.66668 15.4882L12.1548 10.0001Z" fill="#00B2FF"/>
                                    </svg>
                                </span>
                            </a>

                        <?php endif ?>

                    <?php endif ?>
                
                </div>
            </div>

            <?php endif ?>

            <?php endforeach ?>


        </div>


            <?php if(($count > 1) && $data['half_slider'] == 1): ?>
            
            <!-- slider buttons -->

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
            
            <!-- @end --> 

            <?php endif ?>

    </div>
    
</div>
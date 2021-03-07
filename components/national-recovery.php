<?php

    $data = getData();
    $items = $data['point_items'];

?>

<section id="national-recovery" class="national-recovery" style="background-color:<?php echo $data['background_color'] ?>">
    <div class="background-pattern">
        <?php echo wp_get_attachment_image($data['background_pattern'], 'full') ?>
    </div>
    <div class="container">
        <div class="content">

            <div class="text-section">
                <h2 class="section-title">
                        <?php echo $data['title'] ?>
                </h2>
                <p class="body-2 national-details"><?php echo $data['details'] ?></p>
                <div class="offer-points">
                    <?php foreach($items as $item): ?>

                        <div class="single-point">
                            <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.7672 0.617188L7.09533 14.2891L2.26135 9.45508C2.01721 9.25977 1.67541 9.25977 1.43127 9.45508L0.894162 10.041C0.650022 10.2363 0.650022 10.627 0.894162 10.8711L6.70471 16.6816C6.90002 16.877 7.29065 16.877 7.48596 16.6816L22.1344 2.0332C22.3785 1.78906 22.3785 1.39844 22.1344 1.20312L21.5973 0.617188C21.3531 0.421875 21.0113 0.421875 20.7672 0.617188Z" fill="#EB233D"/>
                            </svg>
                            <?php echo $item['point'] ?>
                        </div>

                    <?php endforeach ?>
                </div>
                <div class="hint-message">
                    *<?php echo $data['hint'] ?>
                </div>
            </div>

            <div class="map-section">
                <img src="<?php echo IMG.'/map.svg' ?>" alt="">

                <div class="destination-icon">
                    <div class="circle-ripple"></div>
                </div>

                <div class="source-icon">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0714 4.97053L6.39075 6.39069L3.55044 3.55039L12.0714 4.97053Z" fill="white"/>
                        <path d="M4.97059 12.0713L6.39075 6.39069L3.55044 3.55039L4.97059 12.0713Z" fill="white"/>
                    </svg>
                    <div class="circle-ripple"></div>
                </div>

            </div>

        </div>
    </div>
   

</section>
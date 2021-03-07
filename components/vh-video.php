<?php

 $data = getData();

?>

<section class="swarm-video">
    <?php 
        if(!empty($data['image'])):
            echo wp_get_attachment_image($data['image'], 'full');
        endif
    ?>
    <div class="container">
        <h2 class="section-title"><?php echo $data['title'] ?></h2>
        <p class="lead-text"><?php echo $data['subtitle'] ?></p>
        <figure class="wp-block-video">
            <video class="custom-video" playsinline poster="<?php echo wp_get_attachment_url($data['video_poster']) ?>" src="<?php echo wp_get_attachment_url($data['video_file']) ?>"></video>
            <div class="video-overlay">
                <button type='button' class="play-btn" aria-label="Play Button">
                    <span class="play">
                        <svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 11.5359C26.6667 13.0755 26.6667 16.9245 24 18.4641L6 28.8564C3.33333 30.396 -1.46309e-06 28.4715 -1.32849e-06 25.3923L-4.19966e-07 4.6077C-2.8537e-07 1.5285 3.33333 -0.396009 6 1.14359L24 11.5359Z" fill="#0C3041"/>
                        </svg>
                    </span>
                </button>
            </div>
        </figure>   
    </div>
</section>
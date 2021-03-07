<?php 
    $data = getData();
?>

<section class="hero" id="home-hero">
    <div class="hero-content">
        <div class="hero-slider-container hero-video-container">

            <div class="single-slider">
                <figure class="wp-block-video hero-video-block">
                    <video class="hero-video" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline poster="<?php echo wp_get_attachment_image_src($data['poster'], 'full')[0] ?>" src="<?php echo wp_get_attachment_url($data['video_file']) ?>"></video>
                    <video class="hero-video-mobile" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline poster="<?php echo wp_get_attachment_image_src($data['poster_mob'], 'full')[0] ?>" src="<?php echo wp_get_attachment_url($data['video_file_mobile']) ?>"></video>
                </figure>
                <div class="slider-content" id="video-slider-content">
                    
                    <div class="container">

                        <div class="info-holder">
                            <?php if(!empty($data['title'])): ?>
                                <h1 class="slider-title"><?php echo $data['title'] ?></h1>
                            <?php endif ?>

                            <?php if(!empty($data['subtitle'])): ?>
                                <p class="slider-detail body-2"><?php echo $data['subtitle'] ?></p>
                            <?php endif ?>
                            <?php if(!empty($data['btn_text'])): ?>
                                <a href="<?php echo $data['btn_url'] ?>" class="squared-btn solid-primary-btn btn"><?php echo $data['btn_text'] ?></a>
                            <?php endif ?>
                        </div>

                        <div class="hero-cards">
                            <div class="first-card card">
                                <div class="card-title">
                                    <span>
                                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2227 3.69531L10.3047 0.777344C10.0234 0.496094 9.49609 0.25 9.10938 0.25H1.9375C0.988281 0.25 0.25 1.02344 0.25 1.9375V16.5625C0.25 17.5117 0.988281 18.25 1.9375 18.25H12.0625C12.9766 18.25 13.75 17.5117 13.75 16.5625V4.89062C13.75 4.50391 13.5039 3.97656 13.2227 3.69531ZM12.4492 4.50391C12.5195 4.57422 12.5547 4.67969 12.5898 4.75H9.25V1.41016C9.32031 1.44531 9.42578 1.48047 9.49609 1.55078L12.4492 4.50391ZM12.0625 17.125H1.9375C1.62109 17.125 1.375 16.8789 1.375 16.5625V1.9375C1.375 1.65625 1.62109 1.375 1.9375 1.375H8.125V5.03125C8.125 5.52344 8.47656 5.875 8.96875 5.875H12.625V16.5625C12.625 16.8789 12.3438 17.125 12.0625 17.125ZM10.832 9.74219C11.0078 9.56641 11.0078 9.28516 10.832 9.14453L10.5508 8.82812C10.375 8.65234 10.0938 8.65234 9.95312 8.82812L5.80469 12.9414L4.01172 11.1484C3.87109 11.0078 3.58984 11.0078 3.41406 11.1484L3.13281 11.4648C2.95703 11.6055 2.95703 11.8867 3.13281 12.0625L5.48828 14.418C5.66406 14.5938 5.94531 14.5938 6.08594 14.418L10.832 9.74219Z" fill="white"/>
                                        </svg>
                                    </span>
                                    <p class="lead-text bold-text"><?php echo $data['card_one_title'] ?></p>
                                </div>
                                <div class="card-detail">
                                    <p>
                                        <?php echo $data['card_one_sub'] ?>
                                        <span>
                                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="white"/>
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                                <a href="<?php echo $data['card_one_link'] ?>" class="card-link" aria-label="Hero card link"></a>
                            </div>
                            <div class="second-card card">
                                <div class="card-title">
                                    <span>
                                        <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1875 14.875H9.8125C9.49609 14.875 9.25 15.1562 9.25 15.4375C9.25 15.7539 9.49609 16 9.8125 16H13.1875C13.4688 16 13.75 15.7539 13.75 15.4375C13.75 15.1562 13.4688 14.875 13.1875 14.875ZM21.6953 4.43359L12.1328 0.390625C11.957 0.320312 11.6758 0.285156 11.5 0.285156C11.2891 0.285156 11.0078 0.320312 10.832 0.390625L1.26953 4.43359C0.707031 4.67969 0.25 5.34766 0.25 5.98047V17.9688C0.25 18.1445 0.355469 18.25 0.53125 18.25H1.09375C1.23438 18.25 1.375 18.1445 1.375 17.9688V5.98047C1.375 5.76953 1.51562 5.55859 1.69141 5.45312L11.2539 1.44531C11.3242 1.41016 11.4297 1.375 11.5 1.375C11.5352 1.375 11.6406 1.41016 11.7109 1.44531L21.2734 5.45312C21.4492 5.52344 21.625 5.76953 21.625 5.98047V17.9688C21.625 18.1445 21.7305 18.25 21.9062 18.25H22.4688C22.6094 18.25 22.75 18.1445 22.75 17.9688V5.98047C22.75 5.34766 22.2578 4.67969 21.6953 4.43359ZM18.25 7H4.75C4.11719 7 3.625 7.52734 3.625 8.125V17.9688C3.625 18.1445 3.73047 18.25 3.90625 18.25H4.46875C4.60938 18.25 4.75 18.1445 4.75 17.9688V12.625H18.25V17.9688C18.25 18.1445 18.3555 18.25 18.5312 18.25H19.0938C19.2344 18.25 19.375 18.1445 19.375 17.9688V8.125C19.375 7.52734 18.8477 7 18.25 7ZM18.25 11.5H4.75V8.125H18.25V11.5Z" fill="white"/>
                                        </svg>
                                    </span>
                                    <p class="lead-text bold-text"><?php echo $data['card_two_title'] ?></p>
                                </div>
                                <div class="card-detail">
                                    <p>
                                        <?php echo $data['card_two_sub'] ?>
                                        <span>
                                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="white"/>
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                                <a href="<?php echo $data['card_two_link'] ?>" class="card-link" aria-label="Hero card link"></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    
    </div>
</section>

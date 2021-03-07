<?php 

    $data = getData();

?>

<section class="call-to-action">
    <div class="bg-image">
        <?php echo wp_get_attachment_image($data['bg_image'], 'full') ?>
    </div>
    <div class="container">
        <h2 class="section-title"><?php echo $data['title'] ?></h2>
        <p class="body-2"><?php echo $data['details'] ?></p>
        <a href="<?php echo $data['btn_url'] ?>" class="btn squared-solid-primary-btn" style="background-color: <?php echo (!empty($data['btn_color']))? $data['btn_color']: '#EB233D'  ?>">
            <?php echo $data['btn_text'] ?>
            <span>
                <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                </svg>
            </span>
        </a>
    </div>

</section>
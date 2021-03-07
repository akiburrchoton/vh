<?php 

$data = getData();
$items = $data['point_items'];

?>

<section id="fifty-fifty" class="fifty-fifty" style="<?php echo $data['background_color'] ?>">
    <div class="container">
        <div class="text-btns">
            <h2 class="section-title gradient-title">
                <?php echo $data['title'] ?>
            </h2>
            <p class="body-2"><?php echo $data['detail'] ?></p>
            <div class="breakdown-points">
                <?php foreach($items as $item): ?>

                    <div class="single-point">
                        <?php echo wp_get_attachment_image($item['point_icon']) ?>
                        <?php echo $item['point'] ?>
                    </div>

                <?php endforeach ?>
            </div>
            <div class="breakdown-btn-holder">
                <?php if(!empty($data['first_btn_text'])): ?>
                    <a class="squared-solid-primary-btn btn" href="<?php echo $data['first_btn_url'] ?>"><?php echo $data['first_btn_text'] ?></a>
                <?php endif ?>

                <?php if(!empty($data['sec_btn_txt'])): ?>
                    <a class="squared-ghost-primary-btn btn" href="<?php echo $data['sec_btn_url'] ?>">
                        <?php echo $data['sec_btn_txt'] ?>
                        <span>
                            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.29688 6.75781L12.0039 4.05078C12.1406 3.94141 12.1406 3.72266 12.0039 3.58594L9.29688 0.878906C9.07812 0.6875 8.75 0.824219 8.75 1.125V3.06641H0.328125C0.136719 3.06641 0 3.20312 0 3.39453V4.26953C0 4.46094 0.136719 4.59766 0.328125 4.59766H8.75V6.53906C8.75 6.83984 9.07812 6.97656 9.29688 6.75781Z" fill="#EB233D"/>
                            </svg>
                        </span>
                    </a>
                <?php endif ?>

            </div>
        </div>
        <div class="parallax-images">
            <div class="image-one">
                <?php echo wp_get_attachment_image($data['parallax_img_one'], 'large') ?>
            </div>
            <div class="image-two">
                <?php echo wp_get_attachment_image($data['parallax_img_two'], 'large') ?>
            </div>
        </div>
    </div>
</section>
<?php 

$data = getData();
$items = $data['point_items'];

?>

<section id="key-selling-points" class="fifty-fifty key-selling-points" style="<?php echo $data['background_color'] ?>">
    <div class="container">
        <div class="text-btns">
            <h2 class="section-title gradient-title">
                <?php echo $data['title'] ?>
            </h2>
            <?php if(!empty($data['detail'])): ?>
                <p class="body-2"><?php echo $data['detail'] ?></p>
            <?php endif ?>
            <div class="breakdown-points">
                <?php foreach($items as $item): ?>

                    <div class="single-point">
                        <?php echo wp_get_attachment_image($item['point_icon']) ?>
                        <p class="lead-text"><?php echo $item['point_title'] ?></p>
                        <p class="item-detail"><?php echo $item['point_desc'] ?></p>
                    </div>

                <?php endforeach ?>
                <button type="button" class="show-more-breakdown" id="collapse-breakdown">
                    See more 
                    <span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                        </svg>
                    </span>
                </button>
            </div>

        </div>
        <div class="parallax-images">
            <div class="image-two">
                <?php echo wp_get_attachment_image($data['parallax_img_two'], 'large') ?>
            </div>
            <div class="image-one">
                <?php echo wp_get_attachment_image($data['parallax_img_one'], 'large') ?>
            </div>
        </div>
    </div>
</section>
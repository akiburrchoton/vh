<?php
/**
 * Loop post template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(!empty(carbon_get_post_meta(get_the_ID(), 'news_date'))){
    $post_date = carbon_get_post_meta(get_the_ID(), 'news_date');
} 
else{
    $post_date = get_the_date( 'M d, Y' );
}
$post_author = carbon_get_post_meta(get_the_ID(), 'news_author_name');
$news_company = carbon_get_post_meta(get_the_ID(), 'news_company');
$my_post = get_post($post_id);
$the_source = carbon_get_post_meta(get_the_ID(), 'news_source_link');
?>


<div class="single-blog">
    <div class="post-featured-img">
        <?php echo get_the_post_thumbnail(get_the_ID()) ?>
    </div>
    <p class="body-2 author-info"><?php echo $news_company.', '.$post_date ?></p>            
    <h4><?php the_title() ?></h4>
    <a target="_blank" href="<?php echo $the_source ?>" class="blog-link"></a>
</div>
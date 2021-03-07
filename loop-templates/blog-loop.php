<?php
/**
 * Loop post template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(!empty(carbon_get_post_meta(get_the_ID(), 'blog_date'))){
    $post_date = carbon_get_post_meta(get_the_ID(), 'blog_date');
} 
else{
    $post_date = get_the_date( 'M d, Y' );
}
$post_author = carbon_get_post_meta(get_the_ID(), 'blog_author_name');
$my_post = get_post($post_id);

?>


<div class="single-blog">
    <div class="post-featured-img">
        <?php echo get_the_post_thumbnail(get_the_ID()) ?>
    </div>
    <p class="body-2 author-info">By <?php echo $post_author.', '.$post_date ?></p>            
    <h4><?php the_title() ?></h4>
    <a href="<?php the_permalink() ?>" class="blog-link"></a>
</div>
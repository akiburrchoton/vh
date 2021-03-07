<?php

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$fetched_data = [
	'image' => carbon_get_post_meta(get_the_ID(), 'generic_inner_image'),
	'author_image' => carbon_get_post_meta(get_the_ID(), 'blog_author_image'),
	'author_name' => carbon_get_post_meta(get_the_ID(), 'blog_author_name'),
	'author_designation' => carbon_get_post_meta(get_the_ID(), 'blog_author_designation')
]
?>

<div class="wrapper">

	<div class="generic-page post-inner-page">

		<main class="site-main" role="main">

			<section class="hero banner-generic">
				<div class="hero-content">
					<div class="banner-container">
						<?php 
							if(!empty($fetched_data['image'])){
								$the_img_url = wp_get_attachment_url($fetched_data['image'], 'full');
							}
							else{
								$the_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
							}
							
						?>
						<div class="single-slider" style="background-image: url('<?php echo $the_img_url ?>');">    
							<div class="slider-content">
								<div class="info-holder">
									<!-- image only -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="shrinked-container">
				
				<h1 class="page-title"><?php the_title() ?></h1> 

				<div class="author-info-container">
					
					<div class="author-info">
						<?php if(!empty($fetched_data['author_image'])): ?>
							<div class="author-img">
								<?php echo wp_get_attachment_image($fetched_data['author_image'], 'full'); ?>
							</div>
						<?php endif ?>

						<div class="author-name-designation">
							<?php if(!empty($fetched_data['author_name'])): ?>
								<p class="lead-text">By <span><?php echo $fetched_data['author_name'] ?></span></p>
							<?php endif ?>
							<?php if(!empty($fetched_data['author_designation'])): ?>
								<p><?php echo $fetched_data['author_designation'] ?></p>
							<?php endif ?>
						</div>

					</div>
					
					<div class="date-and-social-icons">
						<p class="date"><?php echo (!empty(carbon_get_post_meta(get_the_ID(), 'blog_date')))? carbon_get_post_meta(get_the_ID(), 'blog_date') : get_the_date( 'M d, Y' ) ?></p>
						<span class="sharable"><p>Share: </p>  <?php echo do_shortcode('[jpshare]'); ?></span>
					</div>

				</div>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

				<?php endwhile; // end of the loop. ?>
						

				<hr class="wp-block-separator blog-news-ending">

			</div>


			<?php 

		
			$the_id = get_the_ID();
			$args = array(  
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'post__not_in' => array($the_id)
				
			);    
			$loop = new WP_Query($args);

			$count = $loop->found_posts;
			?>

			<section class="recent-blog">
				<h2 class="text-center">Latest from Our Blog</h2>
				<div class="blog-container container">
					<div class="blog-slider">

						<?php if ($loop->have_posts()) : ?>

							<?php while ($loop->have_posts()) : $loop->the_post(); ?> 

							<div class="single-blog">
								<?php echo get_the_post_thumbnail(get_the_ID()) ?>
								<?php 
									if(!empty(carbon_get_post_meta(get_the_ID(), 'blog_date'))){
										$post_date = carbon_get_post_meta(get_the_ID(), 'blog_date');
									} 
									else{
										$post_date = get_the_date( 'M d, Y' );
									}
									$post_author = carbon_get_post_meta(get_the_ID(), 'blog_author_name');
									$my_post = get_post($post_id);
								?>
								<p class="body-2 blog-date">By <?php echo $post_author.', '.$post_date ?></p>
								<h4><?php the_title() ?></h4>
								<a href="<?php the_permalink() ?>" class="blog-link"></a>
							</div>

							<?php endwhile ?>
											
						<?php endif ?>

					
					</div>
					
					<div class="btn-container">
						<a href="<?php echo site_url() ?>/blog" class="secondary-btn">See All Posts</a>
					</div>


					<?php if($count > 3): ?>

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

			</section>


		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();


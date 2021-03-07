<?php
/**
 * Template Name: Header and Footerless Page
 *
 * Template for displaying a landing page.
 *
 * @package understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper page-wrapper content-only-page" style="min-height: 2000px">

	<div id="primary">

		<main class="site-main" id="main" role="main">

			<?php

				wp_reset_query(); 
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; // End of the loop.
				
			?>


		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->    
<?php get_footer();

<?php

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper">

	<div class="generic-page">

		<main class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php the_content() ?>

            <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();


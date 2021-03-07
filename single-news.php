<?php

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper">

	<div class="generic-page news-inner-page">

		<main class="site-main" role="main">

			<section class="hero banner-generic short-banner">
                <div class="hero-content">
                    <div class="banner-container">
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/news-single.jpg' ?>');">    
                            
                        </div>
                    </div>
                </div>
            </section> <!-- .banner-generic -->

			<section id="breadcrum" class="breadcrum container">
                <div class="container">
                    <a href="#" class="step">Home 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="step">News 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
					<a href="#" class="step current">Current news
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section><!-- #breadcrum -->

			<div class="container">
			
				<div class="flex-container">
				
					<!-- Left column  -->
					<div class="left-col">

						<h1>What to do if you’ve broken down</h1>

						<div class="news-featured-img">
							<img src="<?php echo IMG.'/news-single-2.jpg' ?>" alt="">
						</div>

						<div class="publish-modified-dates">
							
							<div class="published-date">
								<span class="date-title">Published: </span>
								<div class="the-date"><?php echo get_the_time('d M Y', $post->ID); ?></div>
							</div>

							<div class="modified-date">
								<span class="date-title">Last Modified: </span>
								<div class="the-date"><?php echo get_the_modified_date('d M Y', $post->ID); ?></div>
							</div>
							
						</div>
						
						<?php

							wp_reset_query(); 
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; 

						?>

					</div>
					<!-- @left column  -->


					<!-- Sidebar  -->
					<div class="right-col sidebar">
							
						<h5 class="sidebar-title">You should also read</h5>

						<div class="recent-blogs">
							
							<div class="single-recent-blog">
								<a href="#"></a>

								<p class="sl">
									1
								</p>

								<h5 class="blog-title">
									Why you should be more careful driving on empty roads during the COVID-19 pandemic
								</h5>

							</div>


							<div class="single-recent-blog">
								<a href="#"></a>
								
								<p class="sl">
									2
								</p>

								<h5 class="blog-title">
									Why you should be more careful driving on empty roads during the COVID-19 pandemic
								</h5>

							</div>

							<div class="single-recent-blog">
								<a href="#"></a>
								
								<p class="sl">
									3
								</p>

								<h5 class="blog-title">
									Why you should be more careful driving on empty roads during the COVID-19 pandemic
								</h5>

							</div>

							<div class="single-recent-blog">
								<a href="#"></a>
								
								<p class="sl">
									4
								</p>

								<h5 class="blog-title">
									Why you should be more careful driving on empty roads during the COVID-19 pandemic
								</h5>

							</div>

							<div class="single-recent-blog">
								<a href="#"></a>
								
								<p class="sl">
									5
								</p>

								<h5 class="blog-title">
									Why you should be more careful driving on empty roads during the COVID-19 pandemic
								</h5>

							</div>



						</div>

					</div>
					<!-- @sidebar  -->
				
				</div>

			</div>

			<div class="news-cta">
				<div class="container">
					<h2 class="section-title">Newsroom</h2>
					<p class="section-subtitle">The latest news and updates, direct from VH Recovery.</p>
					
					<a class="read-more squared-ghost-primary-btn btn" href="<?php echo home_url('/news') ?>">
                        Read more
						<span>
                            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.29688 6.75781L12.0039 4.05078C12.1406 3.94141 12.1406 3.72266 12.0039 3.58594L9.29688 0.878906C9.07812 0.6875 8.75 0.824219 8.75 1.125V3.06641H0.328125C0.136719 3.06641 0 3.20312 0 3.39453V4.26953C0 4.46094 0.136719 4.59766 0.328125 4.59766H8.75V6.53906C8.75 6.83984 9.07812 6.97656 9.29688 6.75781Z" fill="#EB233D"></path>
                            </svg>
                        </span>
                    </a>
				</div>
			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();


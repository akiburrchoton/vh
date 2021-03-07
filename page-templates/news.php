<?php
/**
 * Template Name: Newsroom Page
 *
 * Template for displaying a landing page.
 *
 * @package understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper page-wrapper" style="min-height: 1000px">

	<div id="primary">

		<main class="site-main" id="main" role="main">

			<?php

				// wp_reset_query(); 
				// while ( have_posts() ) : the_post();
				// 	the_content();
                // endwhile; 
                
            ?>
<!--             
            <section class="hero banner-generic">
                <div class="hero-content">
                    <div class="banner-container">
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/mot-banner.jpg' ?>');">    
                            <div class="slider-content">
                                <div class="container">
                                    <div class="info-holder">
                                        <h1 class="slider-title">Save up to 30% on your next MOT*</h1>             
                                        <h4>Cheap MOT for everyone, no matter the vehicle.</h4>
                                        <a href="#" class="btn squared-solid-primary-btn">Get an instant quote</a>
                                    </div>
                                    <div class="hint-message">*Get 30% off your MOT price if you are a new customer. Discount will be applied at checkout on your first order.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section id="breadcrum" class="breadcrum container">
                <div class="container">
                    <a href="#" class="step">Home 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="step">Business 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="step current">MOT 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section><!-- #breadcrum -->

            
            <section class="news-holder">

                <div class="container">

                    <div class="title-and-search">
                        <h1 class="news-holder-title">Newsroom</h1>
                        <input type="text" placeholder="Search in newsroom..." class="news-search">
                        <div class="empty"></div>
                    </div>


                    <div class="search-result-sort">

                        <div class="showing-posts">
                            Showing <span id="news-count">1 - 20</span> of <span id="total-news">500</span>
                        </div>

                        <div class="sort-dropdown">
                            
                            Sort by: 
                            
                            <select name="#" id="sort-news">
                                <option value="latest">Latest</option>
                                <option value="latest">Oldest</option>
                            </select>

                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                            </svg>

                        </div>

                    </div>

                </div>



                <div class="news-grid">

                    <div class="container">

                        <div class="grid-holder">

                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->


                            <!-- single news  -->
                            
                            <div class="single-news">
                                <img src="<?php echo IMG.'/news1.jpg' ?>" alt="news card">
                                <h3 class="news-card-title">Breakdown cover for hybrid and electric vehicles</h3>
                                <p class="news-card-desc">On 7 August, VH Recovery will be re-opening its doors to the public once again. The immersive brand experience centre – based in London will...</p>
                                <p class="news-card-date">21 Aug 2020</p>
                                <a href="<?php echo home_url('/news/what-to-do-if-youve-broken-down') ?>"></a>
                            </div>

                            <!-- @single news  -->
                        

                        </div>

                        <hr class="wp-block-separator is-style-wide">

                    </div>

                </div>

            </section>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();

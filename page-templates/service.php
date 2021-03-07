<?php
/**
 * Template Name: Service Overview Page
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
            


            <section class="hero banner-generic">
                <div class="hero-content">
                    <div class="banner-container">
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/service-banner.jpg' ?>');">    
                            <div class="slider-content">
                                <div class="container">
                                    <div class="info-holder">
                                    
                                        <h1 class="slider-title">When you car stops working, our care doesn’t.</h1>             
                                        <h4>From recovery to assistance - we’re always on hand.</h4>
                                        <a href="#" class="btn squared-solid-primary-btn">Our breakdown cover plans</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="breadcrum" class="breadcrum container">
                <div class="container">
                    <a href="#" class="step">Home 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="step current">Services 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section><!-- #breadcrum -->

            <section id="fifty-fifty" class="fifty-fifty" style="">
                <div class="container">
                    <div class="text-btns">
                        <h2 class="section-title gradient-title">
                        Whatever you need, we’ve got you covered.</h2>
                        <p class="body-2">We offer member support <b>24 hours a day, 365 days a year</b>. Our members can rest assured knowing they’re in safe hands when they give us a ring. We aim to provide you with a high level of service at all times. However, there may be a time when you feel that our service has fallen below the standard you expect.</p>
                        <div class="breakdown-points">
                            
                                <div class="single-point">
                                    <img src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Icon.svg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="26" width="26" />                        24/7 roadside repair                   </div>

                            
                                <div class="single-point">
                                    <img src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Icon-1.svg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="23" width="26" />                        Car servicing & maintenance                    </div>

                            
                                <div class="single-point">
                                    <img src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Icon-2.svg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="23" width="29" />                        Specialised help for your vehicle                    </div>

                                        </div>
                                    <div class="breakdown-btn-holder">
                                                <a class="squared-solid-primary-btn btn exception-border" href="#">What we do</a>
                            
                                                <a class="squared-ghost-primary-btn btn" href="#">
                                                    Visit help centre                        <span>
                                        <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.29688 6.75781L12.0039 4.05078C12.1406 3.94141 12.1406 3.72266 12.0039 3.58594L9.29688 0.878906C9.07812 0.6875 8.75 0.824219 8.75 1.125V3.06641H0.328125C0.136719 3.06641 0 3.20312 0 3.39453V4.26953C0 4.46094 0.136719 4.59766 0.328125 4.59766H8.75V6.53906C8.75 6.83984 9.07812 6.97656 9.29688 6.75781Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                </a>
                            
                        </div>
                    </div>
                    <div class="parallax-images">
                        <div class="image-one">
                            <img width="278" height="470" src="<?php echo IMG.'/service-half-one.jpg' ?>"  /> </div>
                        <div class="image-two">
                            <img width="278" height="350" src="<?php echo IMG.'/service-half-two.jpg' ?>"  /> </div>
                    </div>
                </div>
            </section><!-- #fifty-fifty -->



            <section id="business-cards" class="business-cards greyscaled-cards" style="background-color:#F2F4F7">
                <div class="background-pattern">
                    <img width="1366" height="759" src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png 1366w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-300x167.png 300w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-1024x569.png 1024w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-768x427.png 768w" sizes="(max-width: 1366px) 100vw, 1366px" />    
                </div>
                <div class="container">
                    <h2 class="section-title">Whatever you need, we’ve got you covered.</h2>
                    <div class="card-holder">

                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #EB233D">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/traffic-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">24/7 Roadside Repair</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>
                            <a href="#" class="text-btn">Learn more 
                                <span>
                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->




                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #EB233D">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/parked-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">Taxi Care</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>
                            <a href="#" class="text-btn">Learn more 
                                <span>
                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->




                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #EB233D">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/low-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">Hybrid & Electric Vehicles</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>
                            <a href="#" class="text-btn">Learn more 
                                <span>
                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->
                        
                    </div>
                </div>
            </section>  <!-- #business-cards -->


            
            <section class="call-to-action">
                <div class="bg-image">
                    <img src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/man-mechanic-repairing-a-car-in-a-garage-PZQKHS7-1.jpg" class="attachment-full size-full" alt="" />
                </div>
                <div class="container">
                    <h2 class="section-title">Need help with your vehicle?</h2>
                    <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing they’re in safe hands when they give us a ring. We aim to provide you with a high level of service at all times. </p>
                    <a href="https://iirthserver.com/live/vh-recovery/contact-us" class="btn squared-solid-primary-btn" style="background-color: #EB233D">
                        Get help and support            <span>
                            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                            </svg>
                        </span>
                    </a>
                </div>

            </section> <!-- Call to action -->


		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();

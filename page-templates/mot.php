<?php
/**
 * Template Name: MOT Page
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
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/mot-banner.jpg' ?>');">    
                            <div class="slider-content">
                                <div class="container">
                                    <div class="info-holder">
                                        <h1 class="slider-title">Save up to 30% on your next MOT*</h1>             
                                        <h4>Cheap MOT for everyone, no matter the vehicle.</h4>
                                        <a href="#" class="btn squared-solid-primary-btn">Get started</a>
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

            <section id="fifty-fifty" class="fifty-fifty mot-fifty-fifty" style="">
                <div class="container">
                    <div class="text-btns">
                        <h2 class="section-title gradient-title">
                            Get an instant quote for your next MOT.
                        </h2>
                        <p class="body-2">We offer member support <b>24 hours a day, 365 days a year</b>. Our members can rest assured knowing they’re in safe hands when they give us a ring. We aim to provide you with a high level of service at all times. However, there may be a time when you feel that our service has fallen below the standard you expect.</p>
                       
                        <div class="breakdown-points">
                            
                                <div class="single-point">
                                    <img src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Icon.svg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="26" width="26" />Top rated mechanics</div>

                            
                                <div class="single-point">
                                    <img src="<?php echo IMG.'/half-tick.svg' ?>" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="23" width="26" />Manufacturer-equivalent parts only</div>

                            
                                <div class="single-point">
                                    <img src="<?php echo IMG.'/half-l.svg' ?>" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" height="23" width="29" />Upfront and fixed costs - no hidden fees</div>

                                </div>   
                        </div>


                        <div class="mot-quote">
                        
                            <form action="#" method="post" id="mot-reg-form">
                                <label for="reg-num-input">Your registration number</label>
                                <input type="text" id="reg-num-input" placeholder="e.g. NA11 NBC">
                                <button class="btn squared-solid-primary-btn exception-border" type="submit">Get an instant quote</button>
                                <div class="calling-text"> 
                                <span>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                                        <g>
                                            <g>
                                                <path d="m128.7,501c-49.5,0-92.6-28.3-109.9-72.1-11.5-29.2-10.2-61.3 3.7-90.5 13.7-28.7 37.9-51.1 68.3-63.1 15.3-6.1 31.3-9.1 47.5-9.1 27.9,0 54.5,9.2 75.3,25.7 29.4-24.9 56.1-50.5 79.5-76.5-27.6-33.5-35-81.1-17.8-124.6 18.9-47.7 64.2-79.8 113-79.8 14,0 27.7,2.6 40.7,7.8 59.7,23.6 87.9,94.3 63,157.6 0,0-7.9,19.5-8.6,20.6-133.5,209-274.3,279.1-289.2,286.1-25.6,15-49.2,17.9-65.5,17.9zm9.6-194c-11.1,0-22,2.1-32.5,6.3-20.8,8.2-37.3,23.4-46.5,42.7-9,18.8-9.9,39.4-2.6,58 11.1,28.1 39.3,46.3 72,46.3 28.1,0 46.9-13.5 47.6-13.8 1.4-0.6 140.8-65.8 271.6-269.8l6.1-15.3c16.7-42.3-1.2-89.3-40-104.6-8.2-3.2-16.8-4.9-25.7-4.9-32.1,0-62.2,21.7-75,53.9-13.2,33.5-4.7,71.9 20.8,93.2 10.4,8.7 7.9,22.7 2.4,28.9-31.9,36.1-68.5,72.7-110.8,107.1-8.5,6.9-20.9,5.9-28.1-2.3-14.5-16.4-36.1-25.7-59.3-25.7z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </span> 
                                or call us on 0207 247 4301 
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section> <!-- #fifty-fifty -->



            <section class="half-n-half pattern" style="background-color: #F2F4F7">
                
                <div class="background-pattern">
                    <img width="1366" height="759" src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png 1366w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-300x167.png 300w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-1024x569.png 1024w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-768x427.png 768w" sizes="(max-width: 1366px) 100vw, 1366px">    
                </div>

                <div class="container">

                    <div class="image-holder">
                        <img src="<?php echo IMG.'/ss.png' ?>" alt="">
                    </div>

                    <div class="text-section">

                        <h2 class="section-title">Our expert insights into getting an MOT</h2>
                        
                        <div class="sub-section">
                            <p class="lead-text">What’s an MOT</p>
                            <p class="body-2">The MOT test is how the government checks your vehicle meets national safety and environmental standards. At Fixter, we make the process hassle-free with our straightforward, no-nonsense UK-wide service.</p>
                        </div>

                        <div class="sub-section">
                            <p class="lead-text">How much does it cost to fix my car?</p>
                            <p class="body-2">Save up to 30% on your MOT by booking your MOT with us. You can get an instant quote here to see our honest, upfront prices.</p>
                        </div>

                    </div>


                </div>
                

            </section> <!-- .half-n-half -->



            <section id="business-cards-mot" class="business-cards greyscaled-cards">
             
                <div class="container">
                    <h2 class="section-title gradient-title">Working with businesses for nearly 10 years.</h2>
                    <div class="card-holder">

                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #F2F4F7">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/traffic-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">Black Taxis</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>
                            

                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->




                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #F2F4F7">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/parked-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">Fleet Management</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>
                            
                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->




                        <!-- single card  -->
                        
                        
                        <div class="single-card" style="background-color: #F2F4F7">
                            
                            <div class="card-image">
                                <img src="<?php echo IMG.'/low-clear.jpg' ?>" alt="">
                            </div>
                            <p class="lead-text">PCO Partnerships</p>
                            <p class="body-2">We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing.</p>

                            <a href="#" class="card-link" aria-label="card link"></a>
                        </div>

                        <!-- @end single card  -->
                        
                    </div>
                </div>
            </section>  <!-- #business-cards -->



            <section class="accordion-container faq">

                <div class="container">

                    <h2 class="section-title">Frequently asked questions</h2>

                    <button class="accordion lead-text">Good to know</button>
                    <div class="panel">
                        The current version below applies to cover bought or renewed on or after 18 September 2019:

                        <a href="#">VH Recovery Breakdown Cover UK Policy Booklet  —  2020</a>
                    </div>


                    <button class="accordion lead-text">Policy documents</button>
                    <div class="panel">
                        The current version below applies to cover bought or renewed on or after 18 September 2019:

                        <a href="#">VH Recovery Breakdown Cover UK Policy Booklet  —  2020</a>
                    </div>


                    <button class="accordion lead-text">What is car breakdown cover?</button>
                    <div class="panel">
                        The current version below applies to cover bought or renewed on or after 18 September 2019:

                        <a href="#">VH Recovery Breakdown Cover UK Policy Booklet  —  2020</a>
                    </div>


                    <button class="accordion lead-text">Paying for your cover</button>
                    <div class="panel">
                        The current version below applies to cover bought or renewed on or after 18 September 2019:

                        <a href="#">VH Recovery Breakdown Cover UK Policy Booklet  —  2020</a>
                    </div>

                    <button class="accordion lead-text">Changing or cancelling your cover</button>
                    <div class="panel">
                        The current version below applies to cover bought or renewed on or after 18 September 2019:

                        <a href="#">VH Recovery Breakdown Cover UK Policy Booklet  —  2020</a>
                    </div>

                </div>
            </div> <!-- .accordion container -->


            
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

            </section>


		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();

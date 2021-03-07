<?php

/**
 * Template Name: Booking
 *
 * Template for displaying a landing page.
 *
 * @package understrap
 */

defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper page-wrapper">

    <div id="primary">

        <main class="site-main" id="main" role="main">


            <section class="hero banner-generic short-banner">
                <div class="hero-content">
                    <div class="banner-container">
                        <div class="single-slider" style="background-image: url('<?php echo IMG . '/breakdown_banner.jpg' ?>');">
                            <div class="slider-content">
                                <div class="container">
                                    <div class="info-holder">

                                        <h1 class="slider-title">Contact Us</h1>
                                        <h4>Our friendly team is here to help and always on hand.</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- .banner-generic -->

            <section id="booking_form">
                <!-- multistep form -->
                <div class="container">
                    <div class="cover-container">
                        <div class="cover-cards">
                            <div class="cover-card-seventy">
                                <div class="card-item-header">
                                    <p class="card-title">Bronze Breakdown Cover</p>
                                </div>

                                <div class="card-description">
                                    <div class="card-paragraph">
                                        <p>
                                        Our cheapest breakdown cover. Includes your basic cover options such as a jump start and tyre change, as well as cover at home.
                                        </p>
                                    </div> 

                                    <div class="card-list">
                                        <ul>
                                            <li> Road Assistance</li>
                                            <li> Cover at Home</li>
                                        </ul>
                                    </div>

                                    <div class="card-details">
                                        <p>
                                            <span class="icon-detail"></span>
                                            <span class="detail-text">See cover details</span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="cover-card-thirty">
                                <div class="card-item-header">
                                    <p class="card-price">£90 <span class="small-text">Per Year</span></p>
                                </div>

                                <div class="card-btn">
                                    Choose this cover
                                </div>
                            
                            </div>
                        </div>

                        <div class="basket-card">

                        </div>
                    </div>
                </div>
                
            </section>
        </main><!-- #main -->

    </div><!-- #primary -->

<?php get_footer();

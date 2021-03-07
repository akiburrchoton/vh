<?php
/**
 * Template Name: Breakdown Overview Page
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
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/breakdown_banner.jpg' ?>');">    
                            <div class="slider-content">
                                <div class="container">
                                    <div class="info-holder">                                        
                                        <h1 class="slider-title">Complete peace of mind for your business.</h1>             
                                        <h4>We know your business vehicles are important, 
                                            so we'll get them sorted regardless of who's driving.</h4>
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
                    <a href="#" class="step current">Business 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section><!-- #breadcrum -->



            <section id="services" class="services">
                <div class="container reverse-row">
                    <div class="service-holder">


                        <div class="single-service">
                            <div class="icon">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.8963 0.5H24.3924C24.0396 0.5 23.7876 0.802419 23.7876 1.10484V6.6996C21.5704 3.02016 17.5894 0.5 13.0037 0.5C6.30158 0.5 0.808844 5.79234 0.506491 12.3952C0.456099 12.748 0.758452 13 1.1112 13H1.61512C1.91747 13 2.16943 12.7984 2.21982 12.4456C2.52218 6.8004 7.20864 2.21371 13.0037 2.21371C17.1359 2.21371 20.7641 4.63307 22.5782 8.06048H16.8335C16.4808 8.06048 16.2288 8.3629 16.2288 8.66532V9.16936C16.2288 9.52218 16.4808 9.77419 16.8335 9.77419H24.8963C25.1986 9.77419 25.501 9.52218 25.501 9.16936V1.10484C25.501 0.802419 25.1986 0.5 24.8963 0.5ZM24.8459 13H24.342C24.0396 13 23.7876 13.252 23.7373 13.6048C23.4349 19.3004 18.7484 23.7863 13.0037 23.7863C8.82119 23.7863 5.19296 21.4677 3.37884 17.9395H9.17393C9.47629 17.9395 9.77864 17.6875 9.77864 17.3347V16.8306C9.77864 16.5282 9.47629 16.2258 9.17393 16.2258H1.1112C0.758452 16.2258 0.506491 16.5282 0.506491 16.8306V24.8952C0.506491 25.248 0.758452 25.5 1.1112 25.5H1.61512C1.91747 25.5 2.21982 25.248 2.21982 24.8952V19.3508C4.38668 23.0302 8.36766 25.5 13.0037 25.5C19.6555 25.5 25.1482 20.2581 25.4506 13.6552C25.501 13.3024 25.1986 13 24.8459 13Z" fill="#EB233D"/>
                                </svg>
                            </div>
                            <div class="title-subtitle">
                                <p class="lead-text service-title">Anytime, anywhere</p>
                                <p class="body-2 service-subtitle">We will repair your vehicle at the roadside, available 24/7.</p>
                            </div>
                        </div>

                        <div class="single-service">
                            <div class="icon">
                                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.95378 10L9.7437 10.7368C9.63866 10.8421 9.42857 10.9474 9.21849 11.1579H3.65126V12.4211C3.65126 12.6316 3.54622 12.7368 3.44118 12.8421C3.33613 12.9474 3.12605 13.0526 3.02101 13.0526H2.39076C2.18067 13.0526 2.07563 12.9474 1.97059 12.8421C1.86555 12.7368 1.7605 12.6316 1.7605 12.5263V11.1579C1.44538 11.0526 1.13025 10.8421 0.920168 10.5263C0.605042 10.2105 0.5 9.78947 0.5 9.47368V7.36842C0.5 6.84211 0.605042 6.31579 0.920168 5.78947C1.23529 5.36842 1.55042 4.94737 2.07563 4.73684L2.70588 2C2.81092 1.47368 3.12605 0.947368 3.54622 0.631579C4.07143 0.210526 4.59664 0 5.22689 0H11.9496C12.4748 0 13 0.210526 13.5252 0.526316C14.0504 0.947368 14.2605 1.36842 14.4706 1.89474L15.1008 4.52632C15.6261 4.73684 16.0462 5.05263 16.3613 5.57895H3.44118C2.91597 5.57895 2.60084 5.78947 2.28571 6.10526C1.86555 6.42105 1.7605 6.84211 1.7605 7.26316V9.36842C1.7605 9.47368 1.7605 9.68421 1.86555 9.78947C1.97059 9.89474 2.07563 9.89474 2.28571 9.89474H9.95378V10ZM3.23109 8.21053C3.02101 8 3.02101 7.89474 3.02101 7.68421C3.02101 7.47368 3.12605 7.26316 3.23109 7.15789C3.33613 7.05263 3.54622 6.94737 3.7563 6.94737C3.96639 6.94737 4.17647 7.05263 4.28151 7.15789C4.38655 7.26316 4.4916 7.47368 4.4916 7.68421C4.4916 7.89474 4.38655 8.10526 4.28151 8.21053C4.17647 8.31579 3.96639 8.42105 3.7563 8.42105C3.54622 8.42105 3.33613 8.31579 3.23109 8.21053ZM3.96639 2.21053L3.44118 4.31579H13.6303L13.105 2.21053C13.105 2 13 1.89474 12.895 1.68421C12.7899 1.57895 12.5798 1.47368 12.4748 1.36842C12.2647 1.26316 12.1597 1.26316 11.9496 1.26316H5.22689C4.91176 1.26316 4.70168 1.36842 4.38655 1.57895C4.17647 1.78947 4.07143 2 3.96639 2.21053ZM23.7143 11.4737C24.2395 11.6842 24.6597 12.1053 24.9748 12.6316C25.2899 13.1579 25.5 13.6842 25.5 14.2105V16.3158C25.5 16.6316 25.395 17.0526 25.0798 17.3684C24.8697 17.6842 24.5546 17.8947 24.2395 18V19.3684C24.2395 19.5789 24.1345 19.6842 24.0294 19.7895C23.9244 19.8947 23.7143 20 23.6092 20H22.979C22.7689 20 22.6639 19.8947 22.5588 19.7895C22.4538 19.6842 22.3487 19.4737 22.3487 19.3684V18.1053H12.3697V19.3684C12.3697 19.5789 12.2647 19.6842 12.1597 19.7895C12.0546 19.8947 11.9496 20 11.7395 20H11.1092C10.8992 20 10.7941 19.8947 10.6891 19.7895C10.584 19.6842 10.479 19.4737 10.479 19.3684V18C10.1639 17.8947 9.84874 17.6842 9.63865 17.3684C9.42857 17.0526 9.21849 16.7368 9.21849 16.3158V14.2105C9.21849 13.6842 9.32353 13.1579 9.63865 12.6316C9.95378 12.2105 10.2689 11.7895 10.7941 11.5789L11.4244 8.8421C11.5294 8.31579 11.8445 7.78947 12.2647 7.47368C12.7899 7.05263 13.2101 6.94737 13.8403 6.94737H20.563C21.0882 6.94737 21.6134 7.15789 22.1387 7.47368C22.6639 7.89474 22.8739 8.31579 23.084 8.8421L23.7143 11.4737ZM24.2395 16.3158V14.2105C24.2395 13.7895 24.0294 13.3684 23.7143 13.0526C23.3992 12.7368 22.979 12.5263 22.5588 12.5263H12.1597C11.7395 12.5263 11.3193 12.7368 11.0042 13.0526C10.6891 13.3684 10.479 13.7895 10.479 14.2105V16.3158C10.479 16.4211 10.479 16.6316 10.584 16.7368C10.6891 16.8421 10.8992 16.8421 11.0042 16.8421H23.6092C23.7143 16.8421 23.9244 16.8421 24.0294 16.7368C24.1345 16.6316 24.2395 16.5263 24.2395 16.3158ZM11.9496 14C12.0546 13.8947 12.2647 13.7895 12.4748 13.7895C12.6849 13.7895 12.895 13.8947 13 14C13.105 14.1053 13.2101 14.3158 13.2101 14.5263C13.2101 14.7368 13.105 14.9474 13 15.0526C12.895 15.1579 12.6849 15.2632 12.4748 15.2632C12.2647 15.2632 12.0546 15.1579 11.9496 15.0526C11.8445 14.9474 11.7395 14.7368 11.7395 14.5263C11.7395 14.3158 11.8445 14.1053 11.9496 14ZM12.6849 9.05263L12.1597 11.1579H22.3487L21.8235 9.05263C21.8235 8.94737 21.7185 8.8421 21.7185 8.63158C21.7185 8.42105 21.5084 8.52632 21.4034 8.42105C21.2983 8.31579 21.1933 8.21053 20.9832 8.21053C20.8782 8.21053 20.6681 8.10526 20.563 8.10526H13.8403C13.6303 8.10526 13.3151 8.21053 13.105 8.42105C12.895 8.63158 12.7899 8.84211 12.6849 9.05263ZM21.6134 14C21.7185 13.8947 21.9286 13.7895 22.1387 13.7895C22.3487 13.7895 22.5588 13.8947 22.6639 14C22.7689 14.1053 22.8739 14.3158 22.8739 14.5263C22.8739 14.7368 22.7689 14.9474 22.6639 15.0526C22.5588 15.1579 22.3487 15.2632 22.1387 15.2632C21.9286 15.2632 21.7185 15.1579 21.6134 15.0526C21.5084 14.9474 21.4034 14.7368 21.4034 14.5263C21.4034 14.3158 21.5084 14.1053 21.6134 14Z" fill="#E62641"/>
                                </svg>
                            </div>
                            <div class="title-subtitle">
                                <p class="lead-text service-title">We fix 4/5 on the spot</p>
                                <p class="body-2 service-subtitle">We fix 4/5 vehicles on the roadside to get you back up & running.</p>
                            </div>
                        </div>

                        <div class="single-service">
                            <div class="icon">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.3421 0.5C23.1316 0.5 23.9211 0.763158 24.5789 1.42105C25.2368 2.07895 25.5 2.73684 25.5 3.6579V17.7368C25.5 18.5263 25.2368 19.3158 24.5789 19.9737C23.9211 20.6316 23.2632 20.8947 22.3421 20.8947H15.3684L9.31579 25.5C9.18421 25.5 9.05263 25.5 8.92105 25.5C8.52632 25.5 8.39474 25.3684 8.39474 24.9737V20.8947H3.6579C2.86842 20.8947 2.07895 20.6316 1.42105 19.9737C0.763158 19.3158 0.5 18.6579 0.5 17.7368V3.6579C0.5 2.86842 0.763158 2.07895 1.42105 1.42105C2.07895 0.763158 2.73684 0.5 3.6579 0.5H22.3421ZM23.9211 17.7368V3.6579C23.9211 3.26316 23.7895 2.86842 23.3947 2.60526C23.1316 2.34211 22.7368 2.07895 22.3421 2.07895H3.6579C3.26316 2.07895 2.86842 2.21053 2.60526 2.60526C2.21053 2.86842 2.07895 3.26316 2.07895 3.6579V17.7368C2.07895 18.1316 2.21053 18.5263 2.60526 18.7895C2.86842 19.0526 3.26316 19.3158 3.6579 19.3158H9.97368V23L14.5789 19.5789L14.9737 19.3158H22.6053C23 19.3158 23.3947 19.1842 23.6579 18.7895C23.7895 18.5263 23.9211 18.1316 23.9211 17.7368Z" fill="#E62641"/>
                                </svg>
                            </div>
                            <div class="title-subtitle">
                                <p class="lead-text service-title">No callout charges </p>
                                <p class="body-2 service-subtitle">Unlimited callouts as long as it’s not a recurring problem.</p>
                            </div>
                        </div>

                        <div class="single-service">
                            <div class="icon">
                                <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.9474 2.41355C25.582 3.75784 26.3994 5.50541 26.5356 7.52184C26.6718 9.53827 25.9907 11.2858 24.4923 12.7646L14.6842 22.7123C14.4118 22.9811 14.0031 23.25 13.5944 23.25C13.1858 23.25 12.7771 23.1156 12.3684 22.7123L2.56037 12.6301C1.06192 11.2858 0.380805 9.53827 0.517028 7.38742C0.653251 5.37099 1.47059 3.62341 3.10526 2.27913C4.05882 1.47255 5.28483 0.934839 6.51084 0.800411C7.73684 0.665982 8.96285 0.800411 9.91641 1.2037C11.0062 1.60698 11.8235 2.1447 12.5046 2.95127L13.4582 4.0267L14.4118 2.95127C15.6378 1.60698 17.2724 0.934839 19.0433 0.800411C20.9505 0.665982 22.4489 1.2037 23.9474 2.41355ZM23.2663 11.5547C24.356 10.4793 24.9009 9.13499 24.9009 7.65627C24.7647 6.17756 24.0836 4.83327 22.8576 3.48898C22.0402 2.81684 21.0867 2.41355 19.9969 2.41355C18.9071 2.41355 18.0898 2.54798 17.4087 2.81684C16.7276 3.0857 16.0464 3.62341 15.6378 4.0267L13.4582 6.31199L11.2786 4.16113C10.87 3.62341 10.1889 3.22013 9.50774 2.81684C8.82662 2.41355 8.00929 2.41355 6.9195 2.41355C5.82972 2.41355 4.87616 2.81684 4.05882 3.48898C2.83282 4.83327 2.1517 6.17756 2.1517 7.65627C2.1517 9.13499 2.69659 10.4793 3.65015 11.5547L13.4582 21.5024L23.2663 11.5547Z" fill="#E62641"/>
                                </svg>
                            </div>
                            <div class="title-subtitle">
                                <p class="lead-text service-title">Free vehicle health checks</p>
                                <p class="body-2 service-subtitle">We offer free health checks for all your vehicles.</p>
                            </div>
                        </div>

                    </div>


                    <div class="text-section">
                        <h2 class="section-title gradient-title">We go the extra mile to ensure you succeed.</h2>
                        <p class="service-desc lead-text">We provide 24/7 roadside assistance and will try and fix your car on the spot - so you can get back into the driver’s seat and on your way.</p>
                        <div class="services-list">
                            <p class="body-2">We aim to fix your car at the roadside</p>
                            <p class="body-2">24/7 roadside assistance, 365 days a year</p>
                            <p class="body-2">No callout charges and no hidden fees</p>
                        </div>
                    </div>
                </div>
            </section> <!-- #services -->


            <section id="send-location" class="send-location" style="background-color: #F2F4F7">
                <div class="background-pattern">
                    <img src="<?php echo IMG.'/vector-1.png' ?>" class="attachment-full size-full" alt="" />    
                </div>
                <div class="container">
                    
                    <div class="phone-image">
                        <figure class="wp-block-video hero-video-block">
                            <video class="hero-video" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline="" poster="http://localhost/wordpress/vh/wp-content/uploads/2020/08/Image.jpg" src="http://localhost/wordpress/vh/wp-content/uploads/2020/08/videoplayback.mp4"></video>
                            <video class="hero-video-mobile" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline="" poster="http://localhost/wordpress/vh/wp-content/uploads/2020/08/Image.jpg" src="http://localhost/wordpress/vh/wp-content/uploads/2020/08/videoplayback.mp4"></video>
                        </figure>
                        <img src="<?php echo IMG.'/phone.svg' ?>" alt="">
                    </div>

                    <div class="text-section">
                        <h2 class="section-title">
                            Send us your location and we’ll come right to you.
                        </h2>
                        <p class="lead-text">
                        Broken down? Don’t panic - you can quickly send your location to us via <b>WhatsApp1</b> and we’ll send out a team to help you.
                        </p>
                        <div class="services-list">
                            <p>Send us the exact location of your vehicle via Whatsapp</p>
                            <p>Be sure to include your full name and membership number</p>
                            <p>We’ll send out a team to recover you and your vehicle*</p>
                        </div>
                        <a href="#" class="green-btn btn">
                            <span>
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="14px" height="14px" viewBox="0 0 45.354 45.354" style="enable-background:new 0 0 45.354 45.354;"
                                    xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="white" d="M22.677,0C12.509,0,4.266,8.243,4.266,18.411c0,9.224,11.471,21.36,16.305,26.065c1.184,1.15,3.056,1.174,4.263,0.047
                                            c4.863-4.533,16.254-16.211,16.254-26.113C41.087,8.243,32.845,0,22.677,0z M22.677,24.393c-4.204,0-7.61-3.406-7.61-7.609
                                            s3.406-7.61,7.61-7.61c4.203,0,7.608,3.406,7.608,7.61S26.88,24.393,22.677,24.393z"/>
                                    </g>
                                </g>

                                </svg>
                            </span>
                            Send your location
                        </a>
                        <div class="hint-message">
                            *Recovery has a maximum destination limit of 100 miles for the member, passengers and their vehicle.
                        </div>
                    </div>

                </div>
                
            </section> <!-- #send-location -->


            <section class="packages">

                <div class="container">
                
                    <div class="package-details">

                        <div class="table-header">

                            <div class="title-holder">
                                <h2 class="section-title gradient-title">
                                    Breakdown cover packages for everyone.
                                </h2>
                                <p class="instruction">
                                    Cover is for 1 vehicle and 1 driver.
                                </p>
                            </div>

                            <div class="package-header-holder">

                                <div class="package hover-effect" data-hov="1">
                                    <p class="lead-text package-name">
                                        Bronze
                                    </p>
                                    <p class="price">
                                        £90 
                                    </p>
                                    <p class="duration">
                                        per year
                                    </p>
                                </div>

                                <div class="package hover-effect" data-hov="2">
                                    <p class="lead-text package-name">
                                        Bronze
                                    </p>
                                    <p class="price">
                                        £90 
                                    </p>
                                    <p class="duration">
                                        per year
                                    </p>
                                </div>

                                <div class="package popular hover-effect" data-hov="3">
                                    <p class="lead-text package-name">
                                        Bronze
                                    </p>
                                    <p class="price">
                                        £90 
                                    </p>
                                    <p class="duration">
                                        per year
                                    </p>
                                </div>

                                <div class="package hover-effect" data-hov="4">
                                    <p class="lead-text package-name">
                                        Bronze
                                    </p>
                                    <p class="price">
                                        £90 
                                    </p>
                                    <p class="duration">
                                        per year
                                    </p>
                                </div>


                            </div> <!-- .package-header-holder -->
                            
                        </div> <!-- .package-header -->


                        <div class="package-body">


                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-1.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Roadside assistance</p>
                                        <p>Jump start & tyre change.</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->



                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-2.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Unlimited callouts</p>
                                        <p>As long as it’s not the same problem.</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                        <div class="tick-alter">Limited to 5 callouts</div>
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->




                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-3.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Cover at home</p>
                                        <p>We’ll come and try to fix your vehicle at your home in the UK</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->




                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-4.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Recovery</p>
                                        <p>Vehicle recovery up to 20 miles.</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                        
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->


                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-5.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">National recovery</p>
                                        <p>Taken to any UK destination with your vehicle and passengers.*</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                       
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->



                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-6.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Roadside repair</p>
                                        <p>Replace any parts of your vehicle on the roadside.**</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                       
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                       
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->


                            <div class="row">

                                <div class="package-info">
                                    <img src="<?php echo IMG.'/package-7.svg' ?>" alt="">
                                    <div class="title-subtitle">
                                        <p class="p-title">Accident recovery</p>
                                        <p>We will recovery your vehicle, store and liase with your insurance.</p>
                                    </div>
                                </div>

                                <div class="package-columns">
                                    
                                    <div class="col hover-effect" data-hov="1">
                                        
                                    </div>

                                    <div class="col hover-effect" data-hov="2">
                                        
                                    </div>

                                    <div class="col popular-col hover-effect" data-hov="3">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                    <div class="col hover-effect" data-hov="4">
                                        <img src="<?php echo IMG.'/tick.svg' ?>" alt="">
                                    </div>

                                </div>

                            </div> <!-- .row -->

                        </div> <!-- .package-body -->

                    </div> <!-- .package-details -->

                    <div class="purchase-btn-holder">

                        <div class="hints">
                            <div class="hint-message">*A maximum destination limit of 100 miles.</div>
                            <div class="hint-message">**As long as you buy parts from us, no labour time will be charged.</div>
                        </div>

                        <a href="#" class="squared-solid-primary-btn btn">Purchase your breakdown cover</a>

                    </div> <!-- .purchase-btn-holder -->

                </div>

            </section> <!-- .packages -->


            <div class="packages-mobile">
                <h2 class="section-title gradient-title">Breakdown cover packages for everyone.</h2>
                <p class="body-2">Cover is for 1 vehicle and 1 driver.</p>

                <div class="package-container--mob">

                    <div class="container">

                        <div class="single--package">
                            <p class="lead-text card-title">Bronze</p>
                            <div class="card-price">£90 <span>per year</span></div>
                            <div class="hint-message card-hint">Our cheapest breakdown cover</div>
                            <div class="package-tics">

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside Assistance</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Unlimited callouts</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Cover at home</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Recovery</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside repair</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Accident recovery</p>
                                </div>

                            </div>
                            <div class="see-more-btn">
                                <p class="body-2">See details</p>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                                </svg>
                            </div>

                        </div> <!-- .single--package -->


                        <div class="single--package">
                            <p class="lead-text card-title">Silver</p>
                            <div class="card-price">£125 <span>per year</span></div>
                            <div class="hint-message card-hint">Our everyday breakdown cover</div>
                           
                            <div class="package-tics">

                            <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside Assistance</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Unlimited callouts</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Cover at home</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Recovery</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside repair</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Accident recovery</p>
                                </div>

                            </div>

                            <div class="see-more-btn">
                                <p class="body-2">See details</p>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                                </svg>
                            </div>
                            
                        </div> <!-- .single--package -->


                        <div class="single--package popular">
                            <p class="lead-text card-title">Red</p>
                            <div class="card-price">£150 <span>per year</span></div>
                            <div class="hint-message card-hint">Our most popular breakdown cover</div>
                        
                            <div class="package-tics">

                            <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside Assistance</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Unlimited callouts</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Cover at home</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Recovery</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside repair</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Accident recovery</p>
                                </div>

                            </div>

                            <div class="see-more-btn">
                                <p class="body-2">See details</p>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                                </svg>
                            </div>
                        </div> <!-- .single--package -->


                        <div class="single--package">
                            <p class="lead-text card-title">Red Plus</p>
                            <div class="card-price">£200 <span>per year</span></div>
                            <div class="hint-message card-hint">Our most comprehensive breakdown cover</div>
                        
                            <div class="package-tics">

                            <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside Assistance</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Unlimited callouts</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Cover at home</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Recovery</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Roadside repair</p>
                                </div>

                                <div class="single-tic">
                                    <span>
                                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.6431 0.617188L6.97119 14.2891L2.1372 9.45508C1.89306 9.25977 1.55127 9.25977 1.30713 9.45508L0.770017 10.041C0.525876 10.2363 0.525876 10.627 0.770017 10.8711L6.58056 16.6816C6.77588 16.877 7.1665 16.877 7.36181 16.6816L22.0103 2.0332C22.2544 1.78906 22.2544 1.39844 22.0103 1.20312L21.4731 0.617188C21.229 0.421875 20.8872 0.421875 20.6431 0.617188Z" fill="#EB233D"/>
                                        </svg>
                                    </span>
                                    <p class="body-2">Accident recovery</p>
                                </div>

                            </div>

                            <div class="see-more-btn">
                                <p class="body-2">See details</p>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"/>
                                </svg>
                            </div>
                        </div> 

                        </div> <!-- .single--package -->


                    </div> <!-- .container -->

                </div> <!-- .package-container--mob -->

            </div> <!-- .packages-mobile -->


            <section class="call-to-action">
                <div class="bg-image">
                    <img src="<?php echo IMG.'/taxi-golden.jpg' ?>" alt="">
                </div>
                <div class="container">
                    <h2 class="section-title">Specialised cover for black taxis.</h2>
                    <p class="body-2">We offer special support for black taxi drivers across the UK - so if you have an accident or if there’s a problem with your taxi, rest assured we’ll try and get you back up and running as quickly as possible.</p>
                    <a href="#" class="btn squared-solid-primary-btn yellow-btn">
                         Learn More 
                        <span>
                            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.83442 6.75781L12.5415 4.05078C12.6782 3.94141 12.6782 3.72266 12.5415 3.58594L9.83442 0.878906C9.61567 0.6875 9.28755 0.824219 9.28755 1.125V3.06641H0.865674C0.674268 3.06641 0.537549 3.20312 0.537549 3.39453V4.26953C0.537549 4.46094 0.674268 4.59766 0.865674 4.59766H9.28755V6.53906C9.28755 6.83984 9.61567 6.97656 9.83442 6.75781Z" fill="white"/>
                            </svg>
                        </span>
                    </a>
                </div>

            </section> <!-- .call-to-action -->



            <section class="fifty-fifty breakdown-50">
                <div class="container">
                    <div class="text-btns">
                        <h2 class="section-title gradient-title">
                            By partnering with us, your journey is our business.
                        </h2>
                        <p class="service-desc lead-text">We provide 24/7 roadside assistance and will try and fix your car on the spot - so you can get back into the driver’s seat and on your way.</p>
                        <div class="services-list">
                            <p class="body-2">As standard, if you break down at your home a mechanic will try and fix your vehicle on the spot. If they can’t, they will take you to our repair centre.</p>
                            <p class="body-2">You can choose to purchase a higher tier packages - which include recovery up to 20 miles as well as national recovery.</p>
                            <p class="body-2">You can choose to purchase a higher tier packages - which include recovery up to 20 miles as well as national recovery.</p>
                        </div>
                        <p class="bottom-text">
                            Without cover, it can be costly to get a repair or to be towed, so it’s usually simpler to get cover in advance. We’re available 24/7, so rest assured that you’ll never be left stranded.
                            <br><br>
                            Want to know more?  <a href="#">See how our cover works.</a>
                        </p>
                    </div>
                    <div class="parallax-images">
                        <div class="image-one">
                            <img width="278" height="470" src="<?php echo IMG.'/breakdown-50-1.jpg' ?>"  /> </div>
                        <div class="image-two">
                            <img width="278" height="350" src="<?php echo IMG.'/breakdown-50-2.jpg' ?>"  /> </div>
                    </div>
                </div>
            </section><!-- #fifty-fifty -->



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

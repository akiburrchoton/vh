<?php
/**
 * Template Name: Help center
 *
 * Template for displaying a landing page.
 *
 * @package understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper page-wrapper generic-page">

	<div id="primary">

        <section class="hero banner-generic short-banner">
            <div class="hero-content">
                <div class="banner-container">
                    <div class="single-slider" style="background-image: url('<?php echo IMG.'/breakdown_banner.jpg' ?>');">    
                        <div class="slider-content">
                            <div class="container">
                                <div class="info-holder">
                                    
                                    <h1 class="slider-title">Help Centre</h1>             
                                    <h4>Search our help centre for any queries you may have.</h4>
                                    
                                </div>  
                            </div>
                        </div>
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
                <a href="#" class="step current">Help Centre 
                    <span>
                        <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                        </svg>
                    </span>
                </a>
            </div>
        </section><!-- #breadcrum -->



        <!-- page main title  -->
        <div class="container">
            <h1 class="page-main-title gradient-title">
                Broken down? We’ll get you back on the road.
            </h1>
        </div>
        <!-- @end page main title  -->

        
        
        <div class="container">

            <!-- Message box  -->
            <div class="message-box">

                <div class="container">

                    <button class="close-message-box">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.48438 4.98438L9.85938 1.64063C10.0469 1.45313 10.0469 1.10938 9.85938 0.921875L9.07812 0.140625C8.89062 -0.046875 8.54688 -0.046875 8.35938 0.140625L5.01562 3.51563L1.64063 0.140625C1.45313 -0.046875 1.10938 -0.046875 0.921875 0.140625L0.140625 0.921875C-0.046875 1.10938 -0.046875 1.45313 0.140625 1.64063L3.51563 4.98438L0.140625 8.35938C-0.046875 8.54688 -0.046875 8.89062 0.140625 9.07812L0.921875 9.85938C1.10938 10.0469 1.45313 10.0469 1.64063 9.85938L5.01562 6.48438L8.35938 9.85938C8.54688 10.0469 8.89062 10.0469 9.07812 9.85938L9.85938 9.07812C10.0469 8.89062 10.0469 8.54688 9.85938 8.35938L6.48438 4.98438Z" fill="#45515C"/>
                        </svg>
                    </button>


                    <div class="icon-holder">
                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5356 7.9375C13.3403 7.9375 13.2427 8.08398 13.2427 8.2793L13.5845 17.8496C13.5845 17.9961 13.731 18.0938 13.8774 18.0938H14.9028C15.0493 18.0938 15.1958 17.9961 15.1958 17.8496L15.5376 8.2793C15.5376 8.08398 15.4399 7.9375 15.2446 7.9375H13.5356ZM14.4145 19.0703C13.6333 19.0703 13.0474 19.7051 13.0474 20.4375C13.0474 21.2188 13.6333 21.8047 14.4145 21.8047C15.147 21.8047 15.7817 21.2188 15.7817 20.4375C15.7817 19.7051 15.147 19.0703 14.4145 19.0703ZM28.1353 21.6094L16.4165 1.29688C15.5376 -0.265625 13.2427 -0.265625 12.3638 1.29688L0.645017 21.6094C-0.23389 23.1719 0.889157 25.125 2.6958 25.125H26.1333C27.8911 25.125 29.063 23.1719 28.1353 21.6094ZM26.1333 23.5625H2.6958C2.06103 23.5625 1.71924 22.9277 2.0122 22.3906L13.731 2.07812C14.0239 1.58984 14.7563 1.58984 15.0493 2.07812L26.7681 22.3906C27.1099 22.9277 26.7192 23.5625 26.1333 23.5625Z" fill="#EB233D"/>
                        </svg>
                    </div>
                    <div class="message-section">
                        <h3 class="message-title">
                            Coronavirus (COVID-19) resources and updates
                        </h3>
                        <p class="message-content">
                            The safety and well-being of everyone who uses VH Recovery is always our priority. We are actively monitoring the coronavirus (COVID-19) situation and are taking steps to help keep our communities safe. <a href="#">Click here</a> for more information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- @end Message box  -->


        <!-- Three cards -->

        <section class="three-cards">

            <div class="container">

                <div class="three-cards-holder">

                    <div class="single-help-card">

                        <h3 class="help-card-title">
                            Call us for assistance
                        </h3>
                        <p class="help-card-desc">
                            If you’re broken down or need help with your vehicle, call us on 0207 247 4301 for assistance.
                        </p>
                        <a href="#" class="help-card-btn squared-btn solid-primary-btn btn">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.0156 1.37891L11.4453 0.804688C10.8438 0.667969 10.2422 0.96875 10.0234 1.51562L8.82031 4.30469C8.60156 4.79688 8.73828 5.39844 9.17578 5.75391L10.2695 6.65625C9.50391 8.07812 8.30078 9.25391 6.87891 10.0469L5.97656 8.95312C5.62109 8.51562 5.01953 8.37891 4.52734 8.59766L1.73828 9.77344C1.19141 10.0195 0.890625 10.6211 1.02734 11.2227L1.60156 13.793C1.73828 14.3672 2.25781 14.75 2.83203 14.75C9.53125 14.75 15 9.33594 15 2.60938C15 2.03516 14.5898 1.51562 14.0156 1.37891ZM2.88672 13.4375L2.3125 10.9766L4.99219 9.82812L6.52344 11.6875C9.23047 10.4023 10.625 9.00781 11.9102 6.30078L10.0508 4.76953L11.1992 2.08984L13.6875 2.66406C13.6602 8.59766 8.82031 13.4102 2.88672 13.4375Z" fill="white"/>
                            </svg>  
                            Call 0207 247 4301
                        </a>

                    </div>


                    <div class="single-help-card">

                        <h3 class="help-card-title">
                            Send your location
                        </h3>
                        <p class="help-card-desc">
                            If you need our team to locate you, send us your location via Whatsapp to 07956 333 086.
                        </p>
                        <a href="#" class="help-card-btn squared-btn solid-primary-btn btn">
                            <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 0.75C2.57422 0.75 0.25 3.12891 0.25 6C0.25 7.96875 0.878906 8.57031 4.37891 14.1484C4.89844 14.9688 6.07422 14.9688 6.59375 14.1484C10.0938 8.57031 10.75 7.96875 10.75 6C10.75 3.10156 8.37109 0.75 5.5 0.75ZM5.5 13.4375C2 7.85938 1.5625 7.50391 1.5625 6C1.5625 3.83984 3.3125 2.0625 5.5 2.0625C7.66016 2.0625 9.4375 3.83984 9.4375 6C9.4375 7.50391 9 7.80469 5.5 13.4375ZM3.3125 6C3.3125 7.23047 4.26953 8.1875 5.5 8.1875C6.70312 8.1875 7.6875 7.23047 7.6875 6C7.6875 4.79688 6.70312 3.8125 5.5 3.8125C4.26953 3.8125 3.3125 4.79688 3.3125 6Z" fill="white"/>
                            </svg> 
                            Send your location
                        </a>

                    </div>


                    <div class="single-help-card">

                        <h3 class="help-card-title">
                            Visit our repair centre
                        </h3>
                        <p class="help-card-desc">
                            If you need immediate repairs or just general help, you can visit us at our repair centre.
                        </p>
                        <a href="#" class="help-card-btn squared-btn solid-primary-btn btn">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5742 3.78516L9.71094 0.914062C9.51953 0.832031 9.19141 0.777344 9 0.777344C8.78125 0.777344 8.45312 0.832031 8.26172 0.914062L1.39844 3.78516C0.742188 4.03125 0.25 4.79688 0.25 5.50781V14.3125C0.25 14.5586 0.441406 14.75 0.6875 14.75H1.125C1.34375 14.75 1.5625 14.5586 1.5625 14.3125V5.50781C1.5625 5.28906 1.69922 5.07031 1.89062 4.98828L8.78125 2.11719C8.83594 2.08984 8.91797 2.08984 9 2.08984C9.05469 2.08984 9.13672 2.08984 9.19141 2.11719L16.082 4.98828C16.2734 5.07031 16.4375 5.28906 16.4375 5.50781V14.3125C16.4375 14.5586 16.6289 14.75 16.875 14.75H17.3125C17.5312 14.75 17.75 14.5586 17.75 14.3125V5.50781C17.75 4.79688 17.2305 4.03125 16.5742 3.78516ZM14.0312 6H3.96875C3.33984 6 2.875 6.49219 2.875 7.09375V14.3125C2.875 14.5586 3.06641 14.75 3.3125 14.75H3.75C3.96875 14.75 4.1875 14.5586 4.1875 14.3125V10.375H13.8125V14.3125C13.8125 14.5586 14.0039 14.75 14.25 14.75H14.6875C14.9062 14.75 15.125 14.5586 15.125 14.3125V7.09375C15.125 6.49219 14.6328 6 14.0312 6ZM13.8125 9.5H4.1875V7.3125H13.8125V9.5ZM10.3125 12.125H7.6875C7.44141 12.125 7.25 12.3438 7.25 12.5625C7.25 12.8086 7.44141 13 7.6875 13H10.3125C10.5312 13 10.75 12.8086 10.75 12.5625C10.75 12.3438 10.5312 12.125 10.3125 12.125Z" fill="white"/>
                            </svg> 
                            Get directions
                        </a>

                    </div>

                </div>
                
                <hr class="wp-block-separator is-style-wide">

            </div>

        </section>

        <!-- @end three cards  -->



        <!-- Help conditional section  -->

        <section class="help-conditional-tab">

            <div class="container">


                <div class="grid-holder">

                    <div class="topics">
                        <h3 class="topic-title">
                            Choose a topic
                        </h3>
                        <div class="topic-list">

                            <div id="c1t1" class="single-topic" onclick="openTab(this, '#c2t1')">

                                <img src="<?php echo IMG.'/topic1.svg' ?>" alt="">
                                
                                Emergencies

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>


                            <div id="c1t2" class="single-topic" onclick="openTab(this, '#c2t2')">

                                <img src="<?php echo IMG.'/topic2.svg' ?>" alt="">
                                
                                Breakdown cover

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                            <div id="c1t3" class="single-topic" onclick="openTab(this, '#c2t3')">

                                <img src="<?php echo IMG.'/topic3.svg' ?>" alt="">
                                
                                Vehicle maintenance

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>


                            <div id="c1t4" class="single-topic" onclick="openTab(this, '#c2t4')">

                                <img src="<?php echo IMG.'/topic4.svg' ?>" alt="">
                                
                                Using our services

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                            <div id="c1t5" class="single-topic" onclick="openTab(this, '#c2t5')">

                                <img src="<?php echo IMG.'/topic5.svg' ?>" alt="">
                                
                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                        </div>

                    </div>





                    <div class="middle-content">


                        <div class="tab-content-default">
                            <h2 class="tab-title">
                                What can we help you with?
                            </h2>
                            <p>Choose a topic to get started.</p>
                        </div>

                        <h3 class="middle-topic-title">
                            Tell us more
                        </h3>


                        <div id="c2t1" class="tab-content direction-column">
                           
                            <div class="single-topic" onclick="openTab(this, '#c3t1')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                            <div class="single-topic" onclick="openTab(this, '#c3t2')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  



                            <div class="single-topic" onclick="openTab(this, '#c3t3')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                        </div>



                        <div id="c2t2" class="tab-content direction-column">
                           
                            <div class="single-topic" onclick="openTab(this, '#c3t1')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                            <div class="single-topic" onclick="openTab(this, '#c3t2')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  



                            <div class="single-topic" onclick="openTab(this, '#c3t3')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                        </div>




                    </div>



                    <div class="right-content">

                        <h3 class="right-topic-title">
                            Our suggestions
                        </h3>

                        <div id="c3t1" class="tab-content-1 tab-content right-tab-content">
                            
                            <div class="suggestion-tab">
                                <p>
                                   <strong>Is it an emergency?</strong><br>

                                    We send out mechanics for urgent problems like:

                                    <ul>
                                        <li>Flat batteries</li>
                                        <li>Flat or damaged tyres</li>
                                        <li>Engine overheating</li>
                                        <li>Misfuelling</li>
                                        <li>General vehicle issues</li>
                                    </ul>
                                    <br>
                                    <a href="#"><u>You can call us to find out more information</u></a>
                                </p>
                            </div>

                            <div class="suggestion-tab">
                                <p>
                                
                                   <strong>Get help now</strong><br>
                                    We’re here to help - whenever you need us.
                                    
                                    <br>
                                    <br>
                                    <span class="lead">0207 247 4301</span>
                                    <br>
                                    <br>

                                    Call us 24 hours, 7 days a week.
                                    <br>
                                    <br>
                                    <a href="#" class="generic-button">Get help</a>
                                </p>
                            </div>


                            <div class="suggestion-tab">
                                <p>
                                   <strong>Is it an emergency?</strong><br><br>
                                    <a href="#"><u>What to do if you've broken down</u></a><br><br>
                                    <a href="#"><u>How out cover works</u></a><br><br>
                                    <a href="#"><u>Car maintenance tips</u></a>
                                </p>
                            </div>

                        </div>

                        <div id="c3t2" class="tab-content-2 tab-content">
                            Tab 2
                        </div>

                        <div id="c3t3" class="tab-content-3 tab-content">
                            Tab 3
                        </div>

                    </div>


                </div>


            </div>

        </section>

        <!-- @end help conditional section  -->




        <section class="mobile-help-conditional">
            <div class="container">
                
                
                <h2 class="section-title">
                    What can we help you with?
                </h2>
                <p>Choose a topic to get started.</p>

                <div class="tabs">

                    <!-- Topic  -->
                    <div class="topics topics-mob">
                        <h3 class="topic-title">
                            Choose a topic
                        </h3>
                        <div class="topic-list">

                            <div id="c1t1-mob" class="single-topic" onclick="openTabMob(this, '#c2t1-mob')">

                                <img src="<?php echo IMG.'/topic1.svg' ?>" alt="">
                                
                                <span class="topic-text">Emergencies</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>


                            <div id="c1t2-mob" class="single-topic" onclick="openTabMob(this, '#c2t2-mob')">

                                <img src="<?php echo IMG.'/topic2.svg' ?>" alt="">
                                
                                <span class="topic-text">Breakdown cover</span>
                                

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                            <div id="c1t3-mob" class="single-topic" onclick="openTabMob(this, '#c2t3-mob')">

                                <img src="<?php echo IMG.'/topic3.svg' ?>" alt="">
                                
                                <span class="topic-text">Vehicle maintenance</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>


                            <div id="c1t4-mob" class="single-topic" onclick="openTabMob(this, '#c2t4-mob')">

                                <img src="<?php echo IMG.'/topic4.svg' ?>" alt="">
                                
                                <span class="topic-text">Using our services</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                            <div id="c1t5-mob" class="single-topic" onclick="openTabMob(this, '#c2t5-mob')">

                                <img src="<?php echo IMG.'/topic5.svg' ?>" alt="">
                                

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end topic -->



                    <!-- Middle content  -->

                    <div class="middle-content middle-content-mob">


                        <div class="back-header" id="header-middle">
                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.181046 5.38991L4.57143 9.83945C4.67704 9.94648 4.80528 10 4.95615 10C5.10703 10 5.23527 9.94648 5.34088 9.83945L5.83876 9.33486C5.94437 9.22783 5.99717 9.09786 5.99717 8.94495C6.01226 8.79205 5.967 8.66208 5.86139 8.55505L2.35361 5L5.86139 1.44495C5.967 1.33792 6.01226 1.20795 5.99717 1.05505C5.99717 0.902141 5.94437 0.772171 5.83876 0.665137L5.34088 0.16055C5.23527 0.0535164 5.10703 0 4.95615 0C4.80528 0 4.67704 0.0535164 4.57143 0.16055L0.181046 4.61009C0.0603485 4.71713 0 4.8471 0 5C0 5.1529 0.0603485 5.28287 0.181046 5.38991Z" fill="#EB233D"/>
                            </svg>
                            <span id="middle-header-title">Emergencies</span>
                        </div>

                        <div id="c2t1-mob" class="tab-content direction-column">
                           
                            <div class="single-topic" onclick="openTabMob(this, '#c3t1-mob')">

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                            <div class="single-topic" onclick="openTabMob(this, '#c3t2-mob')">

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  



                            <div class="single-topic" onclick="openTabMob(this, '#c3t3-mob')">

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                        </div>



                        <div id="c2t2-mob" class="tab-content direction-column">
                           
                            <div class="single-topic" onclick="openTabMob(this, '#c3t1-mob')">

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                            <div class="single-topic" onclick="openTabMob(this, '#c3t2-mob')">

                                <span class="topic-text">Feedback & complaints</span>

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  



                            <div class="single-topic" onclick="openTabMob(this, '#c3t3-mob')">

                                Feedback & complaints

                                <div class="caret-holder">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.81895 5.38991L1.42857 9.83945C1.32296 9.94648 1.19472 10 1.04385 10C0.892975 10 0.764734 9.94648 0.659123 9.83945L0.161245 9.33486C0.0556341 9.22783 0.00282885 9.09786 0.00282885 8.94495C-0.0122584 8.79205 0.0330033 8.66208 0.138614 8.55505L3.64639 5L0.138614 1.44495C0.0330033 1.33792 -0.0122584 1.20795 0.00282885 1.05505C0.00282885 0.902141 0.0556341 0.772171 0.161245 0.665137L0.659123 0.16055C0.764734 0.0535164 0.892975 0 1.04385 0C1.19472 0 1.32296 0.0535164 1.42857 0.16055L5.81895 4.61009C5.93965 4.71713 6 4.8471 6 5C6 5.1529 5.93965 5.28287 5.81895 5.38991Z" fill="#45515C"/>
                                    </svg>
                                </div>

                            </div>  


                        </div>

                    </div>


                    <!-- end middle content  -->

                    
                    <!-- Right content  -->

                    <div class="right-content right-content-mob">

                        <div class="back-header" id="header-last">
                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.181046 5.38991L4.57143 9.83945C4.67704 9.94648 4.80528 10 4.95615 10C5.10703 10 5.23527 9.94648 5.34088 9.83945L5.83876 9.33486C5.94437 9.22783 5.99717 9.09786 5.99717 8.94495C6.01226 8.79205 5.967 8.66208 5.86139 8.55505L2.35361 5L5.86139 1.44495C5.967 1.33792 6.01226 1.20795 5.99717 1.05505C5.99717 0.902141 5.94437 0.772171 5.83876 0.665137L5.34088 0.16055C5.23527 0.0535164 5.10703 0 4.95615 0C4.80528 0 4.67704 0.0535164 4.57143 0.16055L0.181046 4.61009C0.0603485 4.71713 0 4.8471 0 5C0 5.1529 0.0603485 5.28287 0.181046 5.38991Z" fill="#EB233D"/>
                            </svg>
                            <span id="last-header-title">Emergencies</span>
                        </div>

                      
                        <div id="c3t1-mob" class="tab-content-1 tab-content right-tab-content">
                            
                            <div class="suggestion-tab">
                                <p>
                                   <strong>Is it an emergency?</strong><br>

                                    We send out mechanics for urgent problems like:

                                    <ul>
                                        <li>Flat batteries</li>
                                        <li>Flat or damaged tyres</li>
                                        <li>Engine overheating</li>
                                        <li>Misfuelling</li>
                                        <li>General vehicle issues</li>
                                    </ul>
                                    <br>
                                    <a href="#"><u>You can call us to find out more information</u></a>
                                </p>
                            </div>

                            <div class="suggestion-tab">
                                <p>
                                
                                   <strong>Get help now</strong><br>
                                    We’re here to help - whenever you need us.
                                    
                                    <br>
                                    <br>
                                    <span class="lead">0207 247 4301</span>
                                    <br>
                                    <br>

                                    Call us 24 hours, 7 days a week.
                                    <br>
                                    <br>
                                    <a href="#" class="generic-button">Get help</a>
                                </p>
                            </div>


                            <div class="suggestion-tab">
                                <p>
                                   <strong>Is it an emergency?</strong><br><br>
                                    <a href="#"><u>What to do if you've broken down</u></a><br><br>
                                    <a href="#"><u>How out cover works</u></a><br><br>
                                    <a href="#"><u>Car maintenance tips</u></a>
                                </p>
                            </div>

                        </div>

                        <div id="c3t2-mob" class="tab-content-2 tab-content">
                            Tab 2
                        </div>

                        <div id="c3t3-mob" class="tab-content-3 tab-content">
                            Tab 3
                        </div>

                    </div>

                                        
                    <!-- end right content  -->


                </div>

            </div>
        </section>



        <!-- Helping points  -->

        <section class="helping-points">
            <div class="container">
                
                <h2 class="section-title">
                    More ways to get help.
                </h2>

                <div class="help-points-holder">
                    
                    <div class="single-point">
                        <img src="<?php echo IMG.'/help-icon.svg' ?>" alt="">
                        <h3 class="point-title">Contact us</h3>
                        <p>Contact our customer service</p>
                    </div>

                    <div class="single-point">
                        <img src="<?php echo IMG.'/help-icon.svg' ?>" alt="">
                        <h3 class="point-title">Contact us</h3>
                        <p>Contact our customer service</p>
                    </div>

                    <div class="single-point">
                        <img src="<?php echo IMG.'/help-icon.svg' ?>" alt="">
                        <h3 class="point-title">Contact us</h3>
                        <p>Contact our customer service</p>
                    </div>

                    <div class="single-point">
                        <img src="<?php echo IMG.'/help-icon.svg' ?>" alt="">
                        <h3 class="point-title">Contact us</h3>
                        <p>Contact our customer service</p>
                    </div>

                </div>

            </div>
        </section>
        
        <!-- @end helping points  -->

    </div>

</div>

<?php get_footer();
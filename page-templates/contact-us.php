<?php
/**
 * Template Name: Contact Us Page
 *
 * Template for displaying a landing page.
 *
 * @package understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper page-wrapper">

	<div id="primary">

		<main class="site-main" id="main" role="main">


            <section class="hero banner-generic short-banner">
                <div class="hero-content">
                    <div class="banner-container">
                        <div class="single-slider" style="background-image: url('<?php echo IMG.'/breakdown_banner.jpg' ?>');">    
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

            <section id="breadcrum" class="breadcrum container">
                <div class="container">
                    <a href="#" class="step">Home 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="step current">Contact us 
                        <span>
                            <svg width="8" height="10" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77032 8.06701C9.07656 7.75773 9.07656 7.24227 8.77032 6.93299L2.16919 0.231959C1.82892 -0.0773196 1.31853 -0.0773196 1.01229 0.231959L0.229679 1.02234C-0.0765596 1.33162 -0.0765596 1.84708 0.229679 2.19072L5.46975 7.48282L0.229679 12.8093C-0.0765596 13.1529 -0.0765596 13.6684 0.229679 13.9777L1.01229 14.768C1.31853 15.0773 1.82892 15.0773 2.16919 14.768L8.77032 8.06701Z" fill="rgba(69, 81, 92, .8)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </section><!-- #breadcrum -->


            <section class="contact-form contact-us-contact-form">
                <div class="container">
                    <h2 class="section-title gradient-title">How can we help?</h2>
                    <p class="contact-subtitle">Please complete the form below and we will be happy to help you as soon as we can.</p>
                    
                    <p class="required-text">Field marked by an * are required</p>
                    <form action="#">

                        <div class="name">
                            <label for="name">First name <p class="required-asterik">*</p></label>
                            <input required id="name" type="text" placeholder="Your first name">
                        </div>

                        <div class="lastname">
                            <label for="lastname">Last name <p class="required-asterik">*</p></label>
                            <input required id="lastname" type="text" placeholder="Your last name">
                        </div>

                        <div class="email">
                            <label for="email">Email address <p class="required-asterik">*</p></label>
                            <input required id="email" type="text" placeholder="Your email address">
                        </div>

                        <div class="phone-number">
                            <label for="phone-number">Phone Number</label>
                            <input id="phone-number" type="text" placeholder="Your email address">
                        </div>

                        <div class="hear-about">
                            <label for="hear-about">Where did you hear about us?</label>
                            <select id="hear-about">
                                <option value="Please Select">Please select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div>
                            <label for="why-contact">Why are you contacting us?</label>
                            <select id="why-contact">
                                <option value="Please Select">Please select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        
                        <div class="message">
                            <label for="question">Question <p class="required-asterik">*</p></label>
                            <textarea name="question" id="question" cols="130" rows="8" placeholder="Describe your question here..."></textarea>
                        </div>

                        <div class="upload">
                            <label for="upload-file">Upload files</label>
                            <input type="file" id="upload-file" hidden="hidden" />
                            <button type="button" id="upload-button">Upload any files here...</button>
                        </div>

                        <div class="checkbox-submit">
                            <div class="the-check">
                                <label for="submit-check">
                                    <input id="submit-check" type="checkbox">
                                    By submitting information, I agree to VH Recovery’s handling of <span class="required-asterik">personal data.*</span>
                                </label>
                            </div>
                            <button id="contact-form-submit" type="submit" class="squared-solid-primary-btn exception-border btn disabled">Submit form</button>
                        </div>


                    </form>
                </div>
            </section> <!-- Contact Form -->



            <section class="contact-cards" style="background-color:#F2F4F7">

                <div class="background-pattern">
                    <img width="1366" height="759" src="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1.png 1366w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-300x167.png 300w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-1024x569.png 1024w, https://iirthserver.com/live/vh-recovery/wp-content/uploads/2020/08/Vector-1-768x427.png 768w" sizes="(max-width: 1366px) 100vw, 1366px" />    
                </div>

                <div class="container">

                    <div class="card-holder">
                    
                        <div class="card">
                            <h3 class="card-title">Business enquiries</h3>
                            <p class="card-subtitle">
                                We offer member support <strong>24 hours a day, 365 days a year</strong>. Our members can rest assured knowing they’re in safe hands when they give us a ring. 
                            </p>
                            <a href="#" class="squared-solid-primary-btn exception-border btn">Business enquiries</a>
                        </div>

                        <div class="card">
                            <h3 class="card-title">Visit help centre</h3>
                            <p class="card-subtitle">
                                We offer member support <strong>24 hours a day, 365 days a year</strong>. Our members can rest assured knowing they’re in safe hands when they give us a ring.  
                            </p>
                            <a href="#" class="squared-solid-primary-btn exception-border btn">Go to help centre</a>
                        </div>

                    </div>

                </div>

            </section> <!-- Contact Cards -->



            <section class="other-ways-to-contact">

                <div class="container">

                    <h2 class="section-title gradient-title">
                        Other ways to contact us
                    </h2>

                    <div class="information-holder">
                    
                        <div class="col">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50.4609 3.03906L40.3047 0.601562C38.7812 0.296875 37.2578 1.00781 36.6484 2.42969L31.875 13.5C31.3672 14.8203 31.6719 16.3438 32.7891 17.1562L38.2734 21.625C34.8203 28.7344 29.1328 34.4219 22.0234 37.875L17.5547 32.3906C16.7422 31.2734 15.2188 30.9688 13.8984 31.4766L2.82812 36.25C1.50781 36.8594 0.695312 38.3828 1 39.8047L3.4375 50.0625C3.74219 51.4844 4.96094 52.5 6.48438 52.5C32.0781 52.5 53 31.7812 53 6.08594C53 4.5625 51.9844 3.34375 50.4609 3.03906ZM6.58594 49.25L4.25 39.1953L15.1172 34.5234L21.2109 41.9375C31.6719 36.9609 37.3594 31.2734 42.3359 20.8125L34.9219 14.7188L39.5938 3.85156L49.6484 6.1875C49.6484 29.9531 30.3516 49.25 6.58594 49.25Z" fill="#EB233D"/>
                            </svg>
                            
                            <h5 class="title">Phone</h5>
                            <p class="desc">
                                <strong>For breakdown assistance<br></strong>
                                <u>0207 247 4301</u><br>
                                Monday - Sunday:  9:00am - 6:00pm<br><br>

                               <strong>Send location via WhatsApp</strong><br>
                                <u>07956 333 086</u>
                            </p>
                        </div>


                        <div class="col">
                            <svg width="39" height="53" viewBox="0 0 39 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 10.25C14.1172 10.25 9.75 14.7188 9.75 20C9.75 25.3828 14.1172 29.75 19.5 29.75C24.7812 29.75 29.25 25.3828 29.25 20C29.25 14.7188 24.7812 10.25 19.5 10.25ZM19.5 26.5C15.8438 26.5 13 23.6562 13 20C13 16.4453 15.8438 13.5 19.5 13.5C23.0547 13.5 26 16.4453 26 20C26 23.6562 23.0547 26.5 19.5 26.5ZM19.5 0.5C8.63281 0.5 0 9.23438 0 20C0 27.9219 2.64062 30.1562 17.4688 51.4844C18.3828 52.9062 20.5156 52.9062 21.4297 51.4844C36.2578 30.1562 39 27.9219 39 20C39 9.23438 30.2656 0.5 19.5 0.5ZM19.5 48.6406C5.28125 28.2266 3.25 26.6016 3.25 20C3.25 15.7344 4.875 11.6719 7.92188 8.52344C11.0703 5.47656 15.1328 3.75 19.5 3.75C23.7656 3.75 27.8281 5.47656 30.9766 8.52344C34.0234 11.6719 35.75 15.7344 35.75 20C35.75 26.6016 33.6172 28.2266 19.5 48.6406Z" fill="#EB233D"/>
                            </svg>
                            
                            <h5 class="title">Office</h5>
                            <p class="desc">
                               <strong>London</strong><br>
                                91 Tent Street,<br>
                                London, England<br>
                                E1 5DZ<br>
                            </p>
                            <a href="#" class="directions">Get directions 
                                <span>
                                    <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.1594 6.75781L12.8664 4.05078C13.0031 3.94141 13.0031 3.72266 12.8664 3.58594L10.1594 0.878906C9.94063 0.6875 9.6125 0.824219 9.6125 1.125V3.06641H1.19063C0.999219 3.06641 0.8625 3.20312 0.8625 3.39453V4.26953C0.8625 4.46094 0.999219 4.59766 1.19063 4.59766H9.6125V6.53906C9.6125 6.83984 9.94063 6.97656 10.1594 6.75781Z" fill="#45515C"/>
                                    </svg>
                                </span>
                            </a>
                        </div>


                        <div class="col">
                            <svg width="59" height="39" viewBox="0 0 59 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.875 0H14.625C6.5 0 0 6.60156 0 14.625V35.75C0 37.5781 1.42188 39 3.25 39H55.25C56.9766 39 58.5 37.5781 58.5 35.75V14.625C58.5 6.60156 51.8984 0 43.875 0ZM26 35.75H3.25V14.625C3.25 8.42969 8.32812 3.25 14.625 3.25C20.8203 3.25 26 8.42969 26 14.625V35.75ZM55.25 35.75H29.25V14.625C29.25 10.0547 27.0156 5.99219 23.6641 3.25H43.875C50.0703 3.35156 55.1484 8.42969 55.25 14.625V35.75ZM50.375 13H33.3125C32.8047 13 32.5 13.4062 32.5 13.8125V15.4375C32.5 15.9453 32.8047 16.25 33.3125 16.25H42.25V24.375C42.25 25.2891 42.9609 26 43.875 26H50.375C51.1875 26 52 25.2891 52 24.375V14.625C52 13.8125 51.1875 13 50.375 13ZM48.75 22.75H45.5V16.25H48.75V22.75ZM18.6875 13H10.5625C10.0547 13 9.75 13.4062 9.75 13.8125V15.4375C9.75 15.9453 10.0547 16.25 10.5625 16.25H18.6875C19.0938 16.25 19.5 15.9453 19.5 15.4375V13.8125C19.5 13.4062 19.0938 13 18.6875 13Z" fill="#EB233D"/>
                            </svg>
                            
                            <h5 class="title">Post</h5>
                            <p class="desc">
                                If you prefer to write to us, you can send your mail to:
                                <br><br>
                                91 Tent Street,<br>
                                London, England,<br>
                                E1 5DZ
                            </p>
                        </div>


                        <div class="col">
                            <svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50.375 29.5469C51.3906 28.2266 52 26.5 52 24.4688C51.8984 20.6094 48.6484 17.0547 44.5859 17.0547H37.4766C38.2891 15.3281 39.5078 13.0938 39.5078 10.0469C39.5078 4.05469 37.1719 0.5 31.0781 0.5C28.0312 0.5 26.9141 4.35938 26.4062 7.40625C26 9.13281 25.6953 10.8594 24.6797 11.875C22.2422 14.2109 18.6875 20 16.4531 21.2188C16.25 21.3203 15.9453 21.4219 15.6406 21.4219C15.0312 20.6094 14.0156 20 13 20H3.25C1.42188 20 0 21.5234 0 23.25V49.25C0 51.0781 1.42188 52.5 3.25 52.5H13C14.7266 52.5 16.25 51.0781 16.25 49.25V48.4375C19.5 48.4375 26.4062 52.6016 34.2266 52.5C34.7344 52.5 38.0859 52.6016 38.3906 52.5C44.3828 52.5 47.7344 48.9453 47.5312 43.4609C49.0547 41.6328 49.8672 38.9922 49.4609 36.6562C50.6797 34.625 50.9844 31.8828 50.375 29.5469ZM3.25 49.25V23.25H13V49.25H3.25ZM46.3125 28.6328C47.9375 29.75 47.9375 34.625 45.7031 35.8438C47.0234 38.0781 45.8047 41.2266 44.1797 42.1406C44.9922 47.4219 42.25 49.25 38.3906 49.25C37.9844 49.3516 34.5312 49.25 34.2266 49.25C26.8125 49.25 20.5156 45.1875 16.25 45.1875V24.4688C20.0078 24.4688 23.5625 17.5625 27.0156 14.1094C30.0625 11.0625 29.0469 5.88281 31.0781 3.75C36.2578 3.75 36.2578 7.40625 36.2578 10.0469C36.2578 14.3125 33.2109 16.2422 33.2109 20.3047H44.5859C46.9219 20.3047 48.6484 22.4375 48.75 24.4688C48.75 26.5 47.9375 28.125 46.3125 28.6328ZM10.5625 44.375C10.5625 43.0547 9.44531 41.9375 8.125 41.9375C6.70312 41.9375 5.6875 43.0547 5.6875 44.375C5.6875 45.7969 6.70312 46.8125 8.125 46.8125C9.44531 46.8125 10.5625 45.7969 10.5625 44.375Z" fill="#EB233D"/>
                            </svg>
                            
                            <h5 class="title">Connect with us</h5>
                            <p class="desc">
                                Follow us on social media for the latest updates.
                            </p>
                            
                            <div class="social-icons">

                                <?php
                                    $facebook_link = carbon_get_theme_option( 'facebook_link'); 
                                    if(!empty($facebook_link)): 
                                ?>
                                    <a target="_blank" rel="noreferrer" href="<?php echo $facebook_link ?>" class="social-link facebook" aria-label="Facebook Url">
                                        <svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 8H0V12H3V24H8V12H11.642L12 8H8V6.333C8 5.378 8.192 5 9.115 5H12V0H8.192C4.596 0 3 1.583 3 4.615V8Z" fill="#45515C"/>
                                        </svg>
                                    </a>
                                
                                <?php 
                                    endif
                                ?>

                                <?php
                                    $linkedin_link = carbon_get_theme_option( 'linkedin_link'); 
                                    if(!empty($linkedin_link)): 
                                ?>
                                    <a target="_blank" rel="noreferrer" href="<?php echo $linkedin_link ?>" class="social-link linkedin" aria-label="Linkedin Url">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.565 3.28261C5.565 4.54352 4.5475 5.56522 3.29167 5.56522C2.03583 5.56522 1.01833 4.54352 1.01833 3.28261C1.01833 2.02261 2.03583 1 3.29167 1C4.5475 1 5.565 2.02261 5.565 3.28261ZM5.58333 7.3913H1V22H5.58333V7.3913ZM12.9002 7.3913H8.34617V22H12.9011V14.3313C12.9011 10.0674 18.4277 9.71865 18.4277 14.3313V22H23V12.75C23 5.55517 14.8215 5.81722 12.9002 9.35891V7.3913Z" fill="#45515C"/>
                                        </svg>
                                    </a>

                                <?php 
                                    endif
                                ?>

                                <?php
                                    $twitter_link = carbon_get_theme_option( 'twitter_link'); 
                                    if(!empty($twitter_link)): 
                                ?>
                                <a target="_blank" rel="noreferrer" href="<?php echo $twitter_link ?>" class="social-link twitter" aria-label="Twitter Url">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip1)">
                                            <path d="M24 4.55705C23.117 4.94905 22.168 5.21305 21.172 5.33205C22.189 4.72305 22.97 3.75805 23.337 2.60805C22.386 3.17205 21.332 3.58205 20.21 3.80305C19.313 2.84605 18.032 2.24805 16.616 2.24805C13.437 2.24805 11.101 5.21405 11.819 8.29305C7.728 8.08805 4.1 6.12805 1.671 3.14905C0.381 5.36205 1.002 8.25705 3.194 9.72305C2.388 9.69705 1.628 9.47605 0.965 9.10705C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.10605C22.505 6.41105 23.34 5.54405 24 4.55705Z" fill="#45515C"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0002">
                                                <rect width="24" height="24" fill="#45515C"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>

                                <?php 
                                    endif
                                ?>

                                <?php
                                    $youtube_link = carbon_get_theme_option( 'youtube_link'); 
                                    if(!empty($youtube_link)): 
                                ?>

                                <a target="_blank" rel="noreferrer" href="<?php echo $youtube_link ?>" class="social-link youtube" aria-label="Youtube Url">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip2)">
                                            <path d="M20.4323 3.3168C16.6781 3.06055 8.31667 3.06159 4.56771 3.3168C0.508334 3.59388 0.0302083 6.04596 0 12.5001C0.0302083 18.9428 0.504167 21.4053 4.56771 21.6835C8.31771 21.9387 16.6781 21.9397 20.4323 21.6835C24.4917 21.4064 24.9698 18.9543 25 12.5001C24.9698 6.05742 24.4958 3.59492 20.4323 3.3168ZM9.375 16.6668V8.33346L17.7083 12.4928L9.375 16.6668Z" fill="#45515C"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip00003">
                                                <rect width="25" height="25" fill="#45515C"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>

                                <?php 
                                    endif
                                ?>

                            </div>
                        </div>


                    </div>

                
                    <div class="divider"></div>
                    <div class="hint-list">
                        <p class="hint-title">Important information</p>
                        <ol>
                            <li>There may be times when we receive unsually high volumes of calls from customers needing our help - for example, when it’s snowing of it is extremely cold. During this periods, there could be a delay in reaching you. But we are on our way.</li>
                            <li>To ensure that customers who are in a vulnerable situation reach a safe place quickly, we will look at where you are, who you are with, what you situation is and prioritise accordingly.</li>
                        </ol>
                    </div>

                </div>

            </section> <!-- Other ways to contact -->



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
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="wrapper" id="wrapper-footer">
	<?php echo wp_get_attachment_image(carbon_get_theme_option( 'footer_bg' ), 'full') ?>

	<div class="container">

		<footer class="site-footer footer-desktop" id="colophon">

			<div class="footer-columns">
	
				<?php dynamic_sidebar( 'footer_one' ); ?>
			
			</div>

			<div class="social-footer-col">

				<div class="social-icon-holder">

					<div class="social-icons">

					<?php
						$facebook_link = carbon_get_theme_option( 'facebook_link'); 
						if(!empty($facebook_link)): 
					?> 
						<a target="_blank" rel="noreferrer" href="<?php echo $facebook_link ?>" class="social-link facebook" aria-label="Facebook Url">
							<svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 8H0V12H3V24H8V12H11.642L12 8H8V6.333C8 5.378 8.192 5 9.115 5H12V0H8.192C4.596 0 3 1.583 3 4.615V8Z" fill="white"/>
							</svg>
						</a>
					
					<?php 
						endif
					?>

					
					<?php
						$instagram_link = carbon_get_theme_option( 'instagram_link'); 
						if(!empty($instagram_link)): 
					?>
						<a target="_blank" rel="noreferrer" href="<?php echo $instagram_link ?>" class="social-link instagram" aria-label="Instagram Url">
							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.75446 4.78795C5.51339 4.02902 6.42857 3.64955 7.5 3.64955C8.57143 3.64955 9.47545 4.02902 10.2121 4.78795C10.971 5.52455 11.3504 6.42857 11.3504 7.5C11.3504 8.57143 10.971 9.48661 10.2121 10.2455C9.47545 10.9821 8.57143 11.3504 7.5 11.3504C6.42857 11.3504 5.51339 10.9821 4.75446 10.2455C4.01786 9.48661 3.64955 8.57143 3.64955 7.5C3.64955 6.42857 4.01786 5.52455 4.75446 4.78795ZM5.72545 9.27455C6.21652 9.76562 6.80804 10.0112 7.5 10.0112C8.19196 10.0112 8.78348 9.76562 9.27455 9.27455C9.76562 8.78348 10.0112 8.19196 10.0112 7.5C10.0112 6.80804 9.76562 6.21652 9.27455 5.72545C8.78348 5.23438 8.19196 4.98884 7.5 4.98884C6.80804 4.98884 6.21652 5.23438 5.72545 5.72545C5.23438 6.21652 4.98884 6.80804 4.98884 7.5C4.98884 8.19196 5.23438 8.78348 5.72545 9.27455ZM12.1205 2.87946C12.2991 3.03571 12.3884 3.23661 12.3884 3.48214C12.3884 3.72768 12.2991 3.93973 12.1205 4.1183C11.9643 4.29688 11.7634 4.38616 11.5179 4.38616C11.2723 4.38616 11.0603 4.29688 10.8817 4.1183C10.7031 3.93973 10.6138 3.72768 10.6138 3.48214C10.6138 3.23661 10.7031 3.03571 10.8817 2.87946C11.0603 2.70089 11.2723 2.61161 11.5179 2.61161C11.7634 2.61161 11.9643 2.70089 12.1205 2.87946ZM14.9665 4.41964C14.9888 5.02232 15 6.04911 15 7.5C15 8.95089 14.9888 9.97768 14.9665 10.5804C14.8996 11.942 14.4866 13.0022 13.7277 13.7612C12.9911 14.4978 11.942 14.8884 10.5804 14.933C9.97768 14.9777 8.95089 15 7.5 15C6.04911 15 5.02232 14.9777 4.41964 14.933C3.05804 14.8661 2.00893 14.4643 1.27232 13.7277C0.982143 13.4598 0.747768 13.1473 0.569196 12.7902C0.390625 12.433 0.256696 12.0871 0.167411 11.7522C0.100446 11.4174 0.0669643 11.0268 0.0669643 10.5804C0.0223214 9.97768 0 8.95089 0 7.5C0 6.04911 0.0223214 5.01116 0.0669643 4.38616C0.133929 3.04688 0.535714 2.00893 1.27232 1.27232C2.00893 0.513393 3.05804 0.100446 4.41964 0.0334821C5.02232 0.0111607 6.04911 0 7.5 0C8.95089 0 9.97768 0.0111607 10.5804 0.0334821C11.942 0.100446 12.9911 0.513393 13.7277 1.27232C14.4866 2.00893 14.8996 3.05804 14.9665 4.41964ZM13.3594 11.9196C13.4263 11.7411 13.4821 11.5179 13.5268 11.25C13.5714 10.9598 13.6049 10.625 13.6272 10.2455C13.6496 9.84375 13.6607 9.52009 13.6607 9.27455C13.6607 9.02902 13.6607 8.68304 13.6607 8.23661C13.6607 7.79018 13.6607 7.54464 13.6607 7.5C13.6607 7.43304 13.6607 7.1875 13.6607 6.76339C13.6607 6.31696 13.6607 5.97098 13.6607 5.72545C13.6607 5.47991 13.6496 5.16741 13.6272 4.78795C13.6049 4.38616 13.5714 4.05134 13.5268 3.78348C13.4821 3.4933 13.4263 3.25893 13.3594 3.08036C13.0915 2.38839 12.6116 1.90848 11.9196 1.64062C11.7411 1.57366 11.5067 1.51786 11.2165 1.47321C10.9487 1.42857 10.6138 1.39509 10.2121 1.37277C9.83259 1.35045 9.52009 1.33929 9.27455 1.33929C9.05134 1.33929 8.70536 1.33929 8.23661 1.33929C7.79018 1.33929 7.54464 1.33929 7.5 1.33929C7.45536 1.33929 7.20982 1.33929 6.76339 1.33929C6.31696 1.33929 5.97098 1.33929 5.72545 1.33929C5.47991 1.33929 5.15625 1.35045 4.75446 1.37277C4.375 1.39509 4.04018 1.42857 3.75 1.47321C3.48214 1.51786 3.25893 1.57366 3.08036 1.64062C2.38839 1.90848 1.90848 2.38839 1.64062 3.08036C1.57366 3.25893 1.51786 3.4933 1.47321 3.78348C1.42857 4.05134 1.39509 4.38616 1.37277 4.78795C1.35045 5.16741 1.33929 5.47991 1.33929 5.72545C1.33929 5.94866 1.33929 6.29464 1.33929 6.76339C1.33929 7.20982 1.33929 7.45536 1.33929 7.5C1.33929 7.58929 1.33929 7.80134 1.33929 8.13616C1.33929 8.44866 1.33929 8.71652 1.33929 8.93973C1.33929 9.14062 1.33929 9.40848 1.33929 9.7433C1.36161 10.0781 1.38393 10.3683 1.40625 10.6138C1.42857 10.8371 1.46205 11.0714 1.5067 11.317C1.55134 11.5625 1.59598 11.7634 1.64062 11.9196C1.9308 12.6116 2.41071 13.0915 3.08036 13.3594C3.25893 13.4263 3.48214 13.4821 3.75 13.5268C4.04018 13.5714 4.375 13.6049 4.75446 13.6272C5.15625 13.6496 5.46875 13.6607 5.69196 13.6607C5.9375 13.6607 6.28348 13.6607 6.72991 13.6607C7.19866 13.6607 7.45536 13.6607 7.5 13.6607C7.56696 13.6607 7.8125 13.6607 8.23661 13.6607C8.68304 13.6607 9.02902 13.6607 9.27455 13.6607C9.52009 13.6607 9.83259 13.6496 10.2121 13.6272C10.6138 13.6049 10.9487 13.5714 11.2165 13.5268C11.5067 13.4821 11.7411 13.4263 11.9196 13.3594C12.6116 13.0692 13.0915 12.5893 13.3594 11.9196Z" fill="white"/>
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
								<path d="M5.565 3.28261C5.565 4.54352 4.5475 5.56522 3.29167 5.56522C2.03583 5.56522 1.01833 4.54352 1.01833 3.28261C1.01833 2.02261 2.03583 1 3.29167 1C4.5475 1 5.565 2.02261 5.565 3.28261ZM5.58333 7.3913H1V22H5.58333V7.3913ZM12.9002 7.3913H8.34617V22H12.9011V14.3313C12.9011 10.0674 18.4277 9.71865 18.4277 14.3313V22H23V12.75C23 5.55517 14.8215 5.81722 12.9002 9.35891V7.3913Z" fill="white"/>
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
								<path d="M24 4.55705C23.117 4.94905 22.168 5.21305 21.172 5.33205C22.189 4.72305 22.97 3.75805 23.337 2.60805C22.386 3.17205 21.332 3.58205 20.21 3.80305C19.313 2.84605 18.032 2.24805 16.616 2.24805C13.437 2.24805 11.101 5.21405 11.819 8.29305C7.728 8.08805 4.1 6.12805 1.671 3.14905C0.381 5.36205 1.002 8.25705 3.194 9.72305C2.388 9.69705 1.628 9.47605 0.965 9.10705C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.10605C22.505 6.41105 23.34 5.54405 24 4.55705Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip00">
									<rect width="24" height="24" fill="white"/>
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
								<path d="M20.4323 3.3168C16.6781 3.06055 8.31667 3.06159 4.56771 3.3168C0.508334 3.59388 0.0302083 6.04596 0 12.5001C0.0302083 18.9428 0.504167 21.4053 4.56771 21.6835C8.31771 21.9387 16.6781 21.9397 20.4323 21.6835C24.4917 21.4064 24.9698 18.9543 25 12.5001C24.9698 6.05742 24.4958 3.59492 20.4323 3.3168ZM9.375 16.6668V8.33346L17.7083 12.4928L9.375 16.6668Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0001">
									<rect width="25" height="25" fill="white"/>
								</clipPath>
							</defs>
						</svg>
					</a>

					<?php 
						endif;
					?>

					</div>
				</div>

				<div class="footer-btns">
					<?php if(!empty(carbon_get_theme_option('btn_one_text'))): ?>
						<a href="<?php echo carbon_get_theme_option( 'btn_one_url') ?>" class="btn squared-btn"><?php echo carbon_get_theme_option( 'btn_one_text') ?>
							<span>
								<svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.83165 6.75781L12.5387 4.05078C12.6754 3.94141 12.6754 3.72266 12.5387 3.58594L9.83165 0.878906C9.6129 0.6875 9.28477 0.824219 9.28477 1.125V3.06641H0.862895C0.671489 3.06641 0.53477 3.20312 0.53477 3.39453V4.26953C0.53477 4.46094 0.671489 4.59766 0.862895 4.59766H9.28477V6.53906C9.28477 6.83984 9.6129 6.97656 9.83165 6.75781Z" fill="white"/>
								</svg>		
							</span>
						</a>
					<?php endif ?>

					<?php if(!empty(carbon_get_theme_option('btn_two_text'))): ?>
						<a href="<?php echo carbon_get_theme_option( 'btn_two_url') ?>" class="btn squared-btn"><?php echo carbon_get_theme_option( 'btn_two_text') ?></a>
					<?php endif ?>	
				</div>

			</div>

			<div class="copyright-holder">
				<p class="body-2 copyright">© <?php echo (!empty(carbon_get_theme_option( 'copyright_msg')))? carbon_get_theme_option( 'copyright_msg') : '' ?></p>
				<p class="body-2"><?php echo (!empty(carbon_get_theme_option( 'registration_info')))? carbon_get_theme_option( 'registration_info') : '' ?></p>
			</div>


		</footer><!-- #colophon -->


		<footer class="footer-mob">

			<?php dynamic_sidebar( 'footer_one' ); ?>
			
			<div class="footer-ending--mob">
				<div class="footer--site-logo">
					<a href="<?php echo get_home_url() ?>" aria-label="Footer Logo">
						<?php echo wp_get_attachment_image(carbon_get_theme_option( 'footer_logo' ), 'full') ?>
					</a>
				</div>

				<div class="social-icons">

					<?php
						$facebook_link = carbon_get_theme_option( 'facebook_link'); 
						if(!empty($facebook_link)): 
					?>
						<a target="_blank" rel="noreferrer" href="<?php echo $facebook_link ?>" class="social-link facebook" aria-label="Facebook Url">
							<svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 8H0V12H3V24H8V12H11.642L12 8H8V6.333C8 5.378 8.192 5 9.115 5H12V0H8.192C4.596 0 3 1.583 3 4.615V8Z" fill="white"/>
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
								<path d="M5.565 3.28261C5.565 4.54352 4.5475 5.56522 3.29167 5.56522C2.03583 5.56522 1.01833 4.54352 1.01833 3.28261C1.01833 2.02261 2.03583 1 3.29167 1C4.5475 1 5.565 2.02261 5.565 3.28261ZM5.58333 7.3913H1V22H5.58333V7.3913ZM12.9002 7.3913H8.34617V22H12.9011V14.3313C12.9011 10.0674 18.4277 9.71865 18.4277 14.3313V22H23V12.75C23 5.55517 14.8215 5.81722 12.9002 9.35891V7.3913Z" fill="white"/>
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
								<path d="M24 4.55705C23.117 4.94905 22.168 5.21305 21.172 5.33205C22.189 4.72305 22.97 3.75805 23.337 2.60805C22.386 3.17205 21.332 3.58205 20.21 3.80305C19.313 2.84605 18.032 2.24805 16.616 2.24805C13.437 2.24805 11.101 5.21405 11.819 8.29305C7.728 8.08805 4.1 6.12805 1.671 3.14905C0.381 5.36205 1.002 8.25705 3.194 9.72305C2.388 9.69705 1.628 9.47605 0.965 9.10705C0.911 11.388 2.546 13.522 4.914 13.997C4.221 14.185 3.462 14.229 2.69 14.081C3.316 16.037 5.134 17.46 7.29 17.5C5.22 19.123 2.612 19.848 0 19.54C2.179 20.937 4.768 21.752 7.548 21.752C16.69 21.752 21.855 14.031 21.543 7.10605C22.505 6.41105 23.34 5.54405 24 4.55705Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0002">
									<rect width="24" height="24" fill="white"/>
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
								<path d="M20.4323 3.3168C16.6781 3.06055 8.31667 3.06159 4.56771 3.3168C0.508334 3.59388 0.0302083 6.04596 0 12.5001C0.0302083 18.9428 0.504167 21.4053 4.56771 21.6835C8.31771 21.9387 16.6781 21.9397 20.4323 21.6835C24.4917 21.4064 24.9698 18.9543 25 12.5001C24.9698 6.05742 24.4958 3.59492 20.4323 3.3168ZM9.375 16.6668V8.33346L17.7083 12.4928L9.375 16.6668Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip00003">
									<rect width="25" height="25" fill="white"/>
								</clipPath>
							</defs>
						</svg>
					</a>

					<?php 
						endif
					?>

				</div>

				<div class="terms-privacy">
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'terms_url') ?>">Terms of Use</a>
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'privacy_url') ?>">Privacy Policy</a>
				</div>
				<p class="body-2 copyright">© <?php echo carbon_get_theme_option( 'copyright_msg') ?></p>
			</div>

		</footer>


	</div><!-- .container -->

	<div class="footer-ending">
		<div class="container">

			<div class="logo-holder">
				<div class="secondary-logo-footer">
					<a href="<?php echo get_home_url() ?>" aria-label="Footer secondary logo">
						<?php echo wp_get_attachment_image(carbon_get_theme_option('footer_logo')) ?>
					</a>
				</div>

				<div class="element-divider"></div>
				
				<p class="footer-logo-side-text">Your car. Our care.</p>

			</div>

			
			<div class="terms-privacy">
				<?php if(!empty(carbon_get_theme_option( 'privacy_url'))): ?>
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'privacy_url') ?>">Privacy Policy</a>
				<?php endif ?>
				<?php if(!empty(carbon_get_theme_option( 'terms_url'))): ?>
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'terms_url') ?>">Terms of Use</a>
				<?php endif ?>
				<?php if(!empty(carbon_get_theme_option( 'tcs_url'))): ?>
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'tcs_url') ?>">T&Cs</a>
				<?php endif ?>
				<?php if(!empty(carbon_get_theme_option( 'cookies_url'))): ?>
					<a class="body-2 terms-link" href="<?php echo carbon_get_theme_option( 'cookies_url') ?>">Privacy Policy</a>
				<?php endif ?>
				<div class="element-divider-sm"></div>
				<p class="body-2 terms-link site-builder-text">Site built by <a class="site-builder-name" href="<?php echo carbon_get_theme_option('site_builder_url') ?>"><?php echo carbon_get_theme_option('site_builder') ?></a></p>
			</div>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

<?php

// Ajax handlers

add_action( 'wp_footer', 'load_more_javascript' ); // Write our JS below here

function load_more_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {


		var page = 2;
		var ajaxurl = "<?php echo admin_url('admin-ajax.php') ?>";
		
		if($('body').hasClass('page-template-blog')){
			<?php 
				$args = array(  
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 1
				);
				$check_number = new WP_Query($args);
				$number = $check_number->found_posts;
			?>

			var total_posts = <?php echo $number ?>;
			var post_till_now = $('.single-blog').length + 1;

			if(post_till_now >= total_posts){
				$('#load-more-blog').css('display', 'none');
			}
		}

		if($('body').hasClass('page-template-news')){
			<?php 
				$args = array(  
				'post_type' => 'news',
				'post_status' => 'publish',
				'posts_per_page' => 1
				);
				$check_number = new WP_Query($args);
				$number = $check_number->found_posts;
			?>

			var total_posts = <?php echo $number ?>;
			var post_till_now = $('.single-blog').length + 1;

			if(post_till_now >= total_posts){
				$('#load-more-news').css('display', 'none');
			}
		}

		

		


		// Load more blog posts

		$('#load-more-blog').click(function(){
			post_till_now += 6;

			if(post_till_now >= total_posts){
				setTimeout(function(){
					$('#load-more-blog').text('Load More');
					$('#load-more-blog').css('display', 'none');
				}, 500);
			}

			$(this).text('Loading...');
			setTimeout(function(){
				$('#load-more-blog').text('Load More');
			}, 500);
			
			
			var data = {
			'action': 'blog_action',
			'page': page
			};

			$.post(ajaxurl, data, function(response) {
				$('.blog-news-holder').append(response);
				page+=1;		
			});
		})


		$('#load-more-news').click(function(){
			post_till_now += 6;
			if(post_till_now >= total_posts){
				setTimeout(function(){
					$('#load-more-news').text('Load More');
					$('#load-more-news').css('display', 'none');
				}, 500);	
			}

			$(this).text('Loading...');
			setTimeout(function(){
				$('#load-more-news').text('Load More');
			}, 500);


			var data = {
			'action': 'news_action',
			'page': page
			};

			$.post(ajaxurl, data, function(response) {
				$('.blog-news-holder').append(response);
				page+=1;		
			});
		})

	
		
	});
	</script> 

<?php 
}



// Action for blog

add_action( 'wp_ajax_nopriv_blog_action', 'blog_action' );
add_action( 'wp_ajax_blog_action', 'blog_action' );

function blog_action() {
	
	$args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1
    );
    $check_loop = new WP_Query($args);
    $exclude_id = array($check_loop->posts[0]->ID);

	$args = array(  
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'post__not_in' => $exclude_id,
		'paged' => $_POST['page']
    );
	$loop = new WP_Query($args);
	
	if ($loop->have_posts()) : 

		while ($loop->have_posts()) : $loop->the_post(); 

		if(!empty(carbon_get_post_meta(get_the_ID(), 'blog_date'))){
			$post_date = carbon_get_post_meta(get_the_ID(), 'blog_date');
		} 
		else{
			$post_date = get_the_date( 'M d, Y' );
		}
		$post_author = carbon_get_post_meta(get_the_ID(), 'blog_author_name');
		$my_post = get_post($post_id); ?>

		<div class="single-blog">
			<div class="post-featured-img">
				<?php echo get_the_post_thumbnail(get_the_ID()) ?>
			</div>
			<p class="body-2 author-info">By <?php echo $post_author.', '.$post_date ?></p>            
			<h4><?php the_title() ?></h4>
			<a href="<?php the_permalink() ?>" class="blog-link"></a>
		</div>
	
		<?php endwhile ?>	 

	<?php
	wp_reset_postdata();

	else: ?>
		<script>$('#load-more-blog').css('display', 'none');</script>
	<?php endif;
		
	wp_die(); 
}





// Action for news

add_action( 'wp_ajax_nopriv_news_action', 'news_action' );
add_action( 'wp_ajax_news_action', 'news_action' );

function news_action() {
	
	$args = array(  
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 1
    );
    $check_loop = new WP_Query($args);
    $exclude_id = array($check_loop->posts[0]->ID);

	$args = array(  
        'post_type' => 'news',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'post__not_in' => $exclude_id,
		'paged' => $_POST['page']
    );
	$loop = new WP_Query($args);
	
	if ($loop->have_posts()) : 

		while ($loop->have_posts()) : $loop->the_post(); 

		if(!empty(carbon_get_post_meta(get_the_ID(), 'news_date'))){
			$post_date = carbon_get_post_meta(get_the_ID(), 'news_date');
		} 
		else{
			$post_date = get_the_date( 'M d, Y' );
		}
		$post_author = carbon_get_post_meta(get_the_ID(), 'news_author_name');
		$news_company = carbon_get_post_meta(get_the_ID(), 'news_company');
		$my_post = get_post($post_id); 
		$the_source = carbon_get_post_meta(get_the_ID(), 'news_source_link');
		?>
		<div class="single-blog">
			<div class="post-featured-img">
				<?php echo get_the_post_thumbnail(get_the_ID()) ?>
			</div>
			<p class="body-2 author-info"><?php echo $news_company.', '.$post_date ?></p>            
			<h4><?php the_title() ?></h4>
			<a target="_blank" href="<?php echo $the_source ?>" class="blog-link"></a>
		</div>
	
		<?php endwhile ?>	 

	<?php
	wp_reset_postdata();

	else: ?>
		<script>
			$('#load-more-news').css('display', 'none');
		</script>
	<?php endif;
		
	wp_die(); 
}
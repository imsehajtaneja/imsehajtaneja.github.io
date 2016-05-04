<?php
	/* 404 Page Template */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
	
    <!--[if lte IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
    <![endif]-->
	
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		{
			wp_enqueue_script( 'comment-reply' );
		}
	?>
	
	<?php
		wp_head();
	?>
	
    <script>
    	jQuery(document).ready(function($)
		{
			$( '.portfolio-single' ).fitVids();
		});
    </script>
</head>

<body <?php body_class( 'p-single' ); ?>>
	<div class="container portfolio-single clearfix">
		<div class="row">
			<div class="span12 portfolio-field portfolio-title">
				<h2><?php echo __( '404', 'bookcard' ); ?></h2>
			</div>
			<!-- end .portfolio-title -->
			
			<!-- page content -->
			<div class="span12 clearfix" style="padding-top: 1em;">
                <div class="portfolio-field">
                    <h3><?php echo __( 'Page Not Found', 'bookcard' ); ?></h3>
					
                    <p><?php echo __( 'The page you are looking for was not found!', 'bookcard' ); ?></p>
                    
					<div class="launch">
                        <a class="btn" href="<?php echo get_home_url(); ?>"><?php echo __( 'HOME', 'bookcard' ); ?></a>
                    </div>
					<!-- end .launch -->
                </div>
				<!-- end .portfolio-field -->
			</div>
			<!-- end page content -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .container .portfolio-single -->

	<?php
		wp_footer();
	?>
</body>
</html>
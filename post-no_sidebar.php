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
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				?>
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'container portfolio-single clearfix' ); ?>>
						<div class="row">
							<div class="span8 portfolio-field portfolio-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<!-- end .portfolio-title -->
							
							<div class="span4 portfolio-field portfolio-nav">
								<?php
									next_post_link( '<span class="left-arrow">%link</span>', "" );
								?>
								
								<a class="icon button back" href="<?php echo get_home_url(); ?>"><?php echo __( 'home', 'bookcard' ); ?></a>
								
								<?php
									previous_post_link( '<span class="right-arrow">%link</span>', "" );
								?>
							</div>
							<!-- end .portfolio-nav -->
							
							<div class="span12 clearfix" style="padding-top: 1em;">
								<?php
									if ( has_post_thumbnail() )
									{
										?>
											<div class="featured-image">
												<?php
													the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'title' => "" ) );
												?>
											</div>
											<!-- end .featured-image -->
										<?php
									}
									// end if
								?>
								
								<?php
									the_content();
								?>
							</div>
							<!-- end .span12 -->
							
							<div class="span12 clearfix" style="padding-top: 1em;">
								<?php
									wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'bookcard' ), 'after' => '</div>' ) );
								?>
							</div>
							<!-- end .span12 -->
							
							<div class="span12 portfolio-field portfolio-nav bottom">
								<?php
									next_post_link( '<span class="left-arrow">%link</span>', "" );
								?>
								
								<a class="icon button back" href="<?php echo get_home_url(); ?>"><?php echo __( 'home', 'bookcard' ); ?></a>
								
								<?php
									previous_post_link( '<span class="right-arrow">%link</span>', "" );
								?>
							</div>
							<!-- end .portfolio-nav -->
							
							<div class="span12" style="padding-bottom: 2em;">
								<?php
									comments_template( "", true );
								?>
							</div>
							<!-- end .span12 -->
						</div>
						<!-- end .row -->
					</div>
					<!-- end .container -->
				<?php
			endwhile;
		endif;
		wp_reset_query();
	?>
	
	<?php
		wp_footer();
	?>
</body>
</html>
<?php
	if ( isset( $_SERVER['HTTP_USER_AGENT'] ) && ( strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== false ) )
	{
		header( 'X-UA-Compatible: IE=edge,chrome=1' );
	}
?>
<?php
	if ( get_option( 'enable_safe_mod' ) ) { $enable_safe_mod = 'true'; } else { $enable_safe_mod = 'false'; }
	
	if ( get_option( 'enable_scrollbar' ) ) { $enable_scrollbar = 'false'; } else { $enable_scrollbar = 'true'; }
	
	$safe_mod_page_in_animation = get_option( 'safe_mod_page_in_animation', 'fadeIn' );
	
	$pf_details_page_in_animation = get_option( 'pf_details_page_in_animation', 'fadeInUp' );
	
	$pf_details_page_out_animation = get_option( 'pf_details_page_out_animation', 'fadeOutDownBig' );
	
	$cover_heading_1_tune = get_option( 'cover_heading_1_tune', '0.85' );
	
	$cover_heading_2_tune = get_option( 'cover_heading_2_tune', '2.3' );
	
	$cover_heading_3_tune = get_option( 'cover_heading_3_tune', '0.6' );
	
	$cover_heading_3_sub_tune = get_option( 'cover_heading_3_sub_tune', '0.8' );
	
	$twitter_username = get_option( 'twitter_username', "" );
?>
<!doctype html>

<html <?php language_attributes(); ?> data-safeMod="<?php echo $enable_safe_mod; ?>" data-autoHideScrollbar="<?php echo $enable_scrollbar; ?>" data-safeModPageInAnimation="<?php echo $safe_mod_page_in_animation; ?>" data-inAnimation="<?php echo $pf_details_page_in_animation; ?>" data-outAnimation="<?php echo $pf_details_page_out_animation; ?>" data-cover-h1-tune="<?php echo $cover_heading_1_tune; ?>" data-cover-h2-tune="<?php echo $cover_heading_2_tune; ?>" data-cover-h3-tune="<?php echo $cover_heading_3_tune; ?>" data-cover-h3-span-tune="<?php echo $cover_heading_3_sub_tune; ?>" data-twitterId="<?php echo $twitter_username; ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
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
</head>

<body <?php body_class(); ?>>
	<section class="main">
		<div id="rm-container" class="rm-container rm-closed">
			<header id="header">
				<!-- NAV MENU -->
				<nav>
					<ul>
						<li><a href='#/home'></a></li>
						<li><a href='#/resume'></a></li>
						<li><a href='#/portfolio'></a></li>
						<li><a href='#/contact'></a></li>
					</ul>
				</nav>
				<!-- end NAV MENU -->
			</header>
			<!-- end #header -->
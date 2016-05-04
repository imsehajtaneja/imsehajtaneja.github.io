<?php
	$blog_sidebar = get_option( 'blog_sidebar', 'Yes' );
	
	if ( $blog_sidebar == 'No' )
	{
		get_template_part( 's', 'no_sidebar' );
	}
	else
	{
		get_template_part( 's', 'sidebar' );
	}
?>
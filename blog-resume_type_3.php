<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
				<div class="service-group">
					<div class="service">
						<?php
							if ( has_post_thumbnail() )
							{
								the_post_thumbnail( 'resume_blog_3_feat_img', array( 'alt' => get_the_title(), 'title' => "", 'class'	=> 'feat-img-resume-blog-type-3', ) );
							}
							// end if
						?>
						
						<h4><?php the_title(); ?></h4>
						
						<p><?php the_excerpt(); ?></p>
					</div>
					<!-- end .service -->
				</div>
				<!-- end .service-group -->
			<?php
		endwhile;
	endif;
	wp_reset_query();
?>
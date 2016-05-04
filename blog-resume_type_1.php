<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
				<div class="history-group">
					<div class="history-unit">
						<h4 class="work-time"><?php echo get_the_date( 'M j, Y' ); ?></h4>
						
						<div class="work-desc">
							<h4><?php the_title(); ?></h4>
							
							<h5><?php
									$categories = get_the_category();
									$separator = ', ';
									$output = "";
									
									if ( $categories )
									{
										foreach ( $categories as $category )
										{
											$output .= $category->cat_name . $separator;
										}
										
										echo trim( $output, $separator );
									}
									// end if
								?></h5>
								
							<p><?php the_excerpt(); ?></p>
						</div>
						<!-- end .work-desc -->
					</div>
					<!-- end .history-unit -->
				</div>
				<!-- end .history-group -->
			<?php
		endwhile;
	endif;
	wp_reset_query();
?>
<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
				<div class="testo-group">
					<div class="testo">
						<?php
							if ( has_post_thumbnail() )
							{
								the_post_thumbnail( 'resume_blog_3_feat_img', array( 'alt' => get_the_title(), 'title' => "", 'class'	=> 'feat-img-resume-blog-type-2', ) );
								
								?>
									<div class="text">
										<h4><?php the_title(); ?> <span><?php
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
																		?></span></h4>
										
										<p><?php the_excerpt(); ?></p>
									</div>
									<!-- end .text -->
								<?php
							}
							else
							{
								?>
									<div class="text" style="margin-left: 0px;">
										<h4><?php the_title(); ?> <span><?php
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
																		?></span></h4>
										
										<p><?php the_excerpt(); ?></p>
									</div>
									<!-- end .text -->
								<?php
							}
							// end if
						?>
					</div>
					<!-- end .testo -->
				</div>
				<!-- end .testo-group -->
			<?php
		endwhile;
	endif;
	wp_reset_query();
?>
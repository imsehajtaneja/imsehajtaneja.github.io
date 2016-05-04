<!-- RESUME PAGE -->
<div id="resume" class="rm-back page">
	<div class="antiscroll-wrap">
		<div class="antiscroll-inner">
			<div class="content">
				<?php
					$resume_page = stripcslashes( get_option( 'resume_page', "" ) );
					
					if ( $resume_page != "" )
					{
						$args_resume_page = 'pagename=' . $resume_page;
						$loop_resume_page = new WP_Query( $args_resume_page );
						
						if ( $loop_resume_page->have_posts() ) :
							while ( $loop_resume_page->have_posts() ) : $loop_resume_page->the_post();
								
								?>
									<h2 class="inner-page-title"><span><?php the_title(); ?></span></h2>
								<?php
								
								the_content();
								
								wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'bookcard' ), 'after' => '</div>' ) );
							
							endwhile;
						endif;
						
						wp_reset_query();
					}
					// end if
				?>
				
				<?php
					$resume_page_blog = get_option( 'resume_page_blog', 'No' );
					
					if ( $resume_page_blog == 'Type 1' )
					{
						get_template_part( 'blog', 'resume_type_1' );
					}
					elseif ( $resume_page_blog == 'Type 2' )
					{
						get_template_part( 'blog', 'resume_type_2' );
					}
					elseif ( $resume_page_blog == 'Type 3' )
					{
						get_template_part( 'blog', 'resume_type_3' );
					}
				?>
			</div>
			<!-- end .content -->
		</div>
		<!-- end .antiscroll-inner -->
	</div>
	<!-- end .antiscroll-wrap -->
	
	<div class="rm-overlay"></div>
</div>
<!-- end RESUME PAGE -->
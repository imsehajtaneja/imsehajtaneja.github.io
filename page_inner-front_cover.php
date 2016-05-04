<!-- ABOUT PAGE -->
<div id="home" class="rm-front page">
	<div class="antiscroll-wrap">
		<div class="antiscroll-inner">
			<!-- COVER IMAGE -->
			<div class="cover">
				<div class="cover-image-holder">
					<?php
						$front_cover_image = get_option( 'front_cover_image', "" );
					?>
					<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo $front_cover_image; ?>">
				</div>
				<!-- end .cover-image-holder -->
				
				<!-- title -->
				<h1>
					<?php
						$logo_type = get_option( 'logo_type', 'Text Logo' );
						
						if ( $logo_type == 'Text Logo' )
						{
							$select_text_logo = get_option( 'select_text_logo', 'Theme Site Title' );
							
							if ( $select_text_logo == 'WordPress Site Title' )
							{
								$text_logo_out = get_bloginfo( 'name' );
							}
							elseif ( $select_text_logo == 'Theme Site Title' )
							{
								$text_logo_out = stripcslashes( get_option( 'your_name', "" ) );
							}
							else
							{
								$front_cover_page = stripcslashes( get_option( 'front_cover_page', "" ) );
								
								if ( $front_cover_page != "" )
								{
									$args_front_cover_page = 'pagename=' . $front_cover_page;
									$loop_front_cover_page = new WP_Query( $args_front_cover_page );
									
									if ( $loop_front_cover_page->have_posts() ) :
										while ( $loop_front_cover_page->have_posts() ) : $loop_front_cover_page->the_post();
										
											$text_logo_out = get_the_title();
										
										endwhile;
									endif;
									wp_reset_query();
								}
								// end if
							}
							// end if
							
							echo $text_logo_out;
						}
						else
						{
							$logo_image = get_option( 'logo_image', "" );
							
							?>
								<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo $logo_image; ?>">
							<?php
						}
						// end if
					?>
				</h1>
				<!-- end title -->
				
				<!-- tagline -->
				<h2>
					<?php
						$select_tagline = get_option( 'select_tagline', 'Theme Tagline' );
						
						if ( $select_tagline == 'WordPress Tagline' )
						{
							$tagline_out = get_bloginfo( 'description' );
						}
						else
						{
							$tagline_out = stripcslashes( get_option( 'your_slogan', "" ) );
						}
						// end if
						
						echo $tagline_out;
					?>
				</h2>
				<!-- end tagline -->
				
				<!-- extra titles -->
				<?php
					$front_cover_page = stripcslashes( get_option( 'front_cover_page', "" ) );
					
					if ( $front_cover_page != "" )
					{
						$args_front_cover_page = 'pagename=' . $front_cover_page;
						$loop_front_cover_page = new WP_Query( $args_front_cover_page );
						
						if ( $loop_front_cover_page->have_posts() ) :
							while ( $loop_front_cover_page->have_posts() ) : $loop_front_cover_page->the_post();
							
								the_content();
								
								wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'bookcard' ), 'after' => '</div>' ) );
							
							endwhile;
						endif;
						wp_reset_query();
					}
					// end if
				?>
				<!-- end extra titles -->
				
				<!-- open link -->
				<a class="rm-button-open ribbon" href="#/resume">
					<span class="ribbon-stitches-top"></span>
					
					<strong class="ribbon-content"><?php echo __( 'OPEN', 'bookcard' ); ?></strong>
					
					<span class="ribbon-stitches-bottom"></span>
				</a>
				<!-- end open link -->
				
				<!-- twitter widget -->
				<?php
					$twitter_username = get_option( 'twitter_username', "" );
					
					if ( $twitter_username != "" )
					{
						$twitter_icon_url = get_option( 'twitter_icon_url', "" );
						
						?>
							<aside class="widget widget-twitter">
								<?php
									if ( $twitter_icon_url != "" )
									{
										echo '<a class="twitter-link" target="_blank" href="' . $twitter_icon_url . '"></a>';
									}
								?>
								
								<div id="twitter-list"></div>
							</aside>
							<!-- end .widget-twitter -->
						<?php
					}
					// end if
				?>
				<!-- end twitter widget -->
			</div>
			<!-- end COVER IMAGE -->
		</div>
		<!-- end .antiscroll-inner -->
	</div>
	<!-- end .antiscroll-wrap -->
</div>
<!-- end ABOUT PAGE -->
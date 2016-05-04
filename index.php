<?php
	get_header();
?>


		<div class="rm-wrapper">
			<div class="rm-cover">
				<?php
					get_template_part( 'page_inner', 'front_cover' );
				?>
				
				
				<?php
					get_template_part( 'page_inner', 'resume' );
				?>
			</div>
			
			
			<?php
				get_template_part( 'page_inner', 'portfolio' );
			?>
			
			
			<div class="rm-right">
				<?php
					get_template_part( 'page_inner', 'back_cover' );
				?>
				
				
				<?php
					get_template_part( 'page_inner', 'contact' );
				?>
			</div>
		</div>
	</div>
</section>


<?php
	get_footer();
?>
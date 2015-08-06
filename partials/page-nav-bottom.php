<div id="page_nav_bottom" class="et_pb_section  et_pb_section_1 et_section_regular">
	<div class=" et_pb_row et_pb_row_0">
		<?php


			$omit_pages = array( "Home Page", "Contact Us", "Privacy Policy", "Terms & Conditions", "Core Values", "Disclaimer" );
			$pagelist = get_pages( "sort_column=post_date&sort_order=asc" );
			$pages = array();
			foreach ( $pagelist as $page ) {
				if ( !in_array( $page->post_title, $omit_pages ) ) {
					$pages[] += $page->ID;
				}
			}
			$current = array_search( get_the_ID(), $pages );
			$prevID = $pages[$current-1];
			$nextID = $pages[$current+1];
		?>


			<div class="prev et_pb_column et_pb_column_1_3">
				<?php if ( !empty( $prevID ) ) { ?>
					<a href="<?php echo get_permalink( $prevID ); ?>" title="<?php echo get_the_title( $prevID ); ?>"><?php echo get_the_title( $prevID ); ?></a>
				<?php } ?>
			</div>

			<div class="contact et_pb_column et_pb_column_1_3">
				<a href="<?php echo get_permalink( get_page_by_path("contact-us") ); ?>" title="<?php echo get_the_title( get_page_by_path("contact-us") ); ?>">Join Our Team</a>
			</div>

			<div class="next et_pb_column et_pb_column_1_3">
				<?php if ( !empty( $nextID ) ) { ?>
					<a href="<?php echo get_permalink( $nextID ); ?>" title="<?php echo get_the_title( $nextID ); ?>"><?php echo get_the_title( $nextID ); ?></a>
				<?php } ?>
			</div>
	</div>
</div>

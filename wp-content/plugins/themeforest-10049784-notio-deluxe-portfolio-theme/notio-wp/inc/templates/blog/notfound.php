<div class="not-found">
	<div>
		<?php if( is_search()) { ?>
			<h4><?php _e( 'Sorry, but nothing matched your search criteria.', 'notio' ); ?></h4>
		<?php } else { ?>
			<h4><?php _e( 'Please add posts from your WordPress admin page.', 'notio' ); ?></h4>
		<?php } ?>
		<a href="<?php esc_url(home_url('/')); ?>" class="btn large"><?php _e( 'Back to Home Page', 'notio' ); ?></a>
	</div>
</div>
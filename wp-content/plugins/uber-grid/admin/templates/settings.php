<div class="wrap">
	<div class="icon32" id="icon-options-general"><br></div>
	<h2><?php _e('UberGrid Settings', 'uber-grid')?></h2>
	<form method="post" action="options.php" id="uber-grid-settings">
		<?php settings_fields( 'uber-grid-options' ) ?>
		<ul>
			<li class="clear-after"><h3><?php _e('General', 'asg') ?></h3></li>
			<li class="clear-after">
				<label class="uber-grid-options-label"><?php _e('Hide buttons at frontend', 'asg') ?></label>
				<p class="inputs">
					<label class="checkbox-label"><input type="checkbox" name="uber_grid_hide_buttons" value="1"
						<?php echo checked(get_option('uber_grid_hide_buttons')) ?>>
					</label>
					<em><?php _e('This will disable the buttons appearing to the admins next to the gallery', 'asg') ?></em>
				</p>
			</li>
			<li class="clear-after"><h3><?php _e('Compatibility', 'uber-grid')?></li>
			<li class="clear-after">
				<label class="uber-grid-options-label"><?php _e('Use shortcode hack', 'uber-grid')?></label>
				<p class="inputs">
					<label class="checkbox-label"><input type="checkbox" name="uber_grid_shortcode_hack" value="1" <?php echo checked(get_option('uber_grid_shortcode_hack')) ?>></label><em><?php _e('Try this if UberGrid looks strange on your site', 'uber-grid')?></em>
				</p>
			</li>
		</ul>
		<?php submit_button(); ?>
	</form>
</div>

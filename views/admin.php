<div class="social-media-display">
	<h3>Enter in the full social media link</h3>
	<div>
		<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e( 'Facebook', 'social-media-display' ); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo esc_attr($instance['facebook']); ?>">
	</div>

	<div>
		<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e( 'Twitter', 'social-media-display' ); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo esc_attr($instance['twitter']); ?>">
	</div>

	<div>
		<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e( 'Linkedin', 'social-media-display' ); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo esc_attr($instance['linkedin']); ?>">
	</div>

	<div>
		<label for="<?php echo $this->get_field_id('google_plus'); ?>"><?php _e( 'Google Plus', 'social-media-display' ); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('google_plus'); ?>" name="<?php echo $this->get_field_name('google_plus'); ?>" value="<?php echo esc_attr($instance['google_plus']); ?>">
	</div>
</div>
<?php foreach ( $instance as $key => $social ) {
	if ( !empty($social) ) { ?>
		<a href="<?php echo $social; ?>">
			<img src="<?php echo plugins_url( "img/$key.png", dirname(__FILE__) ); ?>" alt="$key">
		</a>
	<?php }
} ?>

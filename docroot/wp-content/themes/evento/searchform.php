<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<div class="input">
	<input class="search-input" type="search" placeholder="<?php _e( 'Search keyword', 'evento' ); ?>">
		<div class="input-group-append">
			<button class="btns" type="button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search_icon_153438.png"></button>
		</div>
	</div>
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'evento' ); ?></button>
</form>
<!-- /search -->

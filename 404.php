<?php
/*
Template Name: 404
*/



get_header();
?>

<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'univesrallcollage' ); ?></h1>
	</header>

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'univesrallcollage' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>


<?php
get_footer();

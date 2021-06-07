<?php
/**
 * The template for displaying search results pages
 */

get_header();
?> 




<main class="site-content">
    <h1 class="page-title">Search Result</h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h3 class="page-title"><?php the_title() ?></h3>
			<div class="page-content"><?php the_content(); ?> </div>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Not found</p>
	<?php endif; ?>
</main>



<?php 
get_footer();


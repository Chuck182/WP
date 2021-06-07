<?php
/*
Template Name: Search
*/

?>

<form role="search" method="get" class="header__form" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" class="header__input" placeholder="Search this website..." value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" class="header__btn" value="Search" />
</form>



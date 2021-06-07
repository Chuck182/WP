<?php
/**
 * Header
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <title>Universal College</title>
</head>

<body>
    <header class="header">
    <div class="header__container">
        <div class="header__left">
            <h1 class="header__title"><?php the_field('header_title', 'option'); ?></h1>
            <span class="header__subtitle"><?php the_field('header_subtitle', 'option'); ?></span>
        </div>
        <div class="header__right">
            <h2 class="header__text"><?php the_field('header_description', 'option'); ?></h2>
            <a class="header__phone" href="tel:<?php the_field('head-phone-call'); ?>"><?php the_field('header_phone', 'option'); ?></a>
            <a class="header__mail" href="mailto:<?php the_field('header_email-send', 'option'); ?>"><?php the_field('header_email','option'); ?></a> 
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                    enable-background="new 0 0 50 50" xml:space="preserve">
                    <path fill="#FFFFFF"
                        d="M8.667,15h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,15,8.667,15z" />
                    <path fill="#FFFFFF"
                        d="M8.667,37h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,37,8.667,37z" />
                    <path fill="#FFFFFF"
                        d="M8.667,26h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,26,8.667,26z" />
                </svg>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => '', 
                    'container'       => 'ul', 
                    'container_class' => 'navbar-nav me-auto mb-2 mb-lg-0', 
                    'container_id'    => '',
                    'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ] );?>

            <?php get_search_form(); ?> 
        
        </div>
    </nav>
</header>

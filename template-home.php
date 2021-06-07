<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <main class="main">
        <section class="content-slider">
            <div class="container-slider">
        
                <?php $images = get_field('slider-big'); ?>
                <?php if( $images ): ?>

            <div class="slider">   <!-- big slider -->                           
                                                            
                 <?php foreach( $images as $image ): ?>

            <div class="slider__item">
                <img src="<?php echo $image['url']; ?>" />
            <div class="slider__description"><?php the_field('slider-description'); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php $images = get_field('slider-small'); ?>
        <?php if( $images ): ?>

            <div class="slider-small">    <!-- small slider -->

        <?php foreach( $images as $image ): ?>

            <div class="slider-small__item--s">
                <img src="<?php echo $image['url']; ?>" /> 
                <a href="#" class="slider__link">>> Links Text Goes Here</a>
            </div>
        <?php endforeach; ?>
        </div>
        <?php endif; ?>
            </div>
        </section>
        
        <section class="content-post">
            <div class="container-post">
            <div class="post-wrapper">    <!-- posts -->
            <?php 
            $posts = get_posts( array(
                'numberposts' => 4,
                'post_type'   => 'post',
                'suppress_filters' => true,
                'category'         => 0, 
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <div class="post">
                    <div class="post__top">
                    <h2 class="post__title"><?php the_title() ?></h2>
                </div>
                    <div class="post__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    <div class="post__descr">
                <?php the_content(); ?>
                    </div>
                    <a href="#" class="post__link">Continue Reading >></a>
                    </div>
                <?php
            }

            wp_reset_postdata(); 
            ?>
                </div>
            <?php get_sidebar(); ?>
                </div>
        </section>
    </main>
    <?php get_footer(); ?>

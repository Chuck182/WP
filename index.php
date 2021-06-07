<section class="content-post">
            <div class="container-post">
            <div class="post-wrapper">
            <?php 
            $posts = get_posts( array(
                'numberposts' => 4,
                'post_type'   => 'post',
                'suppress_filters' => true, 
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
                    <a href="#" class="post__link"><?php the_field('post-link'); ?></a>
                    </div>
                <?php
            }

            wp_reset_postdata(); 
            ?>
            </div>
            <?php get_sidebar(); ?>
            </div>
</section>
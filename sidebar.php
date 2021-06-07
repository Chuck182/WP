            <aside class="sidebar">
                    <div class="sidebar__top">
                        <h3 class="sidebar__title"><?php the_field('title-sidebar'); ?>
                        </h3>
                    </div>
                    <div class="sidebar__posts">
                    <?php 
                // Define our WP Query Parameters
                            $the_query = new WP_Query( 'posts_per_page=4' ); ?>
                                <?php 
                            // Start our WP Query
                            while ($the_query -> have_posts()) : $the_query -> the_post(); 
                            // Display the Post Title with Hyperlink
                            ?> 
                                    <div class="sidebar__post">
                   
                                    <div class="sidebar__img">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            <div class="sidebar__descrp">
                            <h3 class="sidebar__subtitle"><?php the_title(); ?></h3>
                            <p class="sidebar__text"><?php the_field('sidebar__recent_post_description'); ?></p>
                            <a href="#" class="sidebar__link post__link">Continue Reading >></a>
                            </div>
                     
                         </div>
                   
                         <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
            
                    <div class="sidebar__bottom">
                        <h3 class="gallery__title"><?php the_field('gallery-title'); ?>
                        </h3>
                    </div>
                    <div class="sidebar__gallery">          <!-- Fancybox gallery -->
                    <?php 
                    $images = get_field('gallery')?>
                    <?php if($images):?>

                        <?php foreach( $images as $image):?>
                        <div class="gallery__photo"> 
                        <a data-fancybox="gallery" href="<?php echo $image['sizes']['thumbnail'];?>">
                                <picture>      
                                    <source srcset="<?php echo $image['sizes']['thumbnail'];?>" type="image/webp"><img
                                        src="<?php echo $image['sizes']['thumbnail'];?>">
                                </picture>
                            </a>
                        </div>
                        <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </aside>
<?php
/**
 * The template for footer
 */

?>
<footer class="footer">
    <div class="footer__container">
        <div class="newsletter">
            <h4 class="newsletter__title"><?php the_field('footer_btn_title'); ?></h4>
            <?php echo do_shortcode ('[contact-form-7 id="5" title="Contact form 1"]')?>
            <a href="#" class="newsletter__link">To unsubsribe please click here >></a>  
        </div>
        <div class="footer-list">
            <h4 class="footer-list__title"><?php the_field('footer-title'); ?></h4>
            <ul class="list-footer">
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_1'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_2'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_3'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_4'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_5'); ?></a></li>
            </ul>
        </div>
        <div class="footer-list">
            <h4 class="footer-list__title"><?php the_field('footer-title'); ?></h4>
            <ul class="list-footer">
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_1'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_2'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_3'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_4'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_5'); ?></a></li>
            </ul>
        </div>
        <div class="footer-list">
            <h4 class="footer-list__title"><?php the_field('footer-title'); ?></h4>
            <ul class="list-footer">
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_1'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_2'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_3'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_4'); ?></a></li>
                <li class="list-footer__item"><a href="#" class="list-footer__link"><?php the_field('footer_sec_5'); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="copy-footer">
        <div class="copy-container">
            <div class="copy-footer__info"><?php the_field('footer_copy'); ?></div>
            <div class="copy-footer__create"><?php the_field('footer_creater'); ?></div>
        </div>
        </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
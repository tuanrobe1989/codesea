<?php

/**
 * The template for displaying the footer.
 *
 * @package tpf-wp-team
 */
?>
<footer class="footer">
    <div class="footer__quoteWrap">
        <div class="container">
            <blockquote class="footer__quote"><?php _e('Khởi đầu của bạn <br>Hành trình của chúng ta!', 'codesea') ?></blockquote>
        </div>
    </div>
    <div class="container">
        <div class="footer__row">
            <div class="footer__row__item footer__itemLeft">
                <a href="<?php echo BLOG_URL ?>" class="footer__itemLeft__logoWrap">
                    <img src="<?php echo SOURCE_URL ?>/images/logo.png" width="170" height="186" alt="<?php echo BLOG_NAME ?>" title="<?php echo BLOG_NAME ?>" class="footer__itemLeft__logo" />
                </a>
                <div class="footer__itemLeft__row">
                    <ul class="footer__itemLeft__item left">
                        <li><a href="tel:0939756991" class="icon icon--phone">0939 756 991</a></li>
                        <li><a href="mailto:info@codesea.edu.vn" class="icon icon--mail">info@codesea.edu.vn</a></li>
                        <li><a href="#" class="icon icon--address">Quận 7, Hồ Chí Minh</a></li>
                    </ul>
                    <nav class="footer__itemLeft__item right">
                        <ul>
                            <li class="footer__itemLeft__item--topColor"><a href="#">Về chúng tôi</a></li> 
                            <li><a href="#">About CodeSea Academy</a></li> 
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer__row__item footer__itemRight">
                <a href="#" class="">
                    <img src="<?php echo SOURCE_URL ?>/images/map.png" width="538" height="261" alt="<?php echo BLOG_NAME ?>" title="<?php echo BLOG_NAME ?>" class="footer__itemRight--img" />
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
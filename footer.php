<?php
/**
 * Footer template
 * 
 * @package Rigorous
 */
?>
            </div>
        </div>
    </main>

    <footer id="site_footer" class="site-footer"  aria-label="<?php esc_attr_e( 'Main Site Footer', 'rigorous' ); ?>">
        <div class="site-footer__row">
            <div class="site-footer__row--inner">
                <div class="footer-top">            
                    <div class="site-title">
                        <div class="site-title__inner">
                            <div class="logo">
                                <?php get_template_part( 'template-parts/footer/logo' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="site-menu">
                        <?php get_template_part( 'template-parts/footer/nav' ); ?>
                    </div>
                    
                    <div class="site-call-to-action">
                        Increase your online revenue
                        <a href="" class="action action-link-flat"><span class="action-inner">Hire Us</span></a>
                    </div>
                </div>

                <div class="footer-middle">
                    <div class="site-menu">
                        <?php get_template_part( 'template-parts/footer/social' ); ?>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="site-menu">
                        <?php get_template_part( 'template-parts/footer/nav', 'tertiary' ); ?>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
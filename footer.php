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

    <footer id="site_footer" class="site-footer" aria-label="Main Site Footer">
        <div class="site-footer__row">
            <div class="site-footer__row--inner">
                <div class="footer-top">            
                    <div class="site-title">
                        <div class="site-title__inner">
                            <div class="logo">
                                <a href="">
                                    <svg data-name="Footer Logo" xmlns="http://www.w3.org/2000/svg" width="32.444" height="71.226"><defs><clipPath id="aa"><path data-name="Path 322" d="M121.929 64.383l20.514-8.236-.089-13.483L110 20.616v12.856l20.936 14.651L110 57.274z" transform="translate(-110 -20.616)" fill="#77cc6d"/></clipPath><filter id="bb" x="-4.5" y="-4.5" width="41.419" height="44.543" filterUnits="userSpaceOnUse"><feOffset/><feGaussianBlur stdDeviation="1.5" result="blur"/><feFlood flood-opacity=".439"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic" in2="blur"/></filter></defs><path data-name="Path 321" d="M21.268 27.32L0 36.798v11.987l32.419 22.441V58.403L11.511 43.767l20.908-8.224z" fill="#77cc6d"/><g data-name="Mask Group 2" clip-path="url(#a)"><g filter="url(#b)"><path data-name="Path 320" d="M0-.004v12.963l32.419 22.58v-13.52z" fill="#77cc6d"/></g></g></svg>
                                    <span class="logo__name">
                                        <span class="first-line">Rigorous Digital</span>
                                        <span class="second-line">Wordpress Agency</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="site-menu">
                        {{> menus/secondary-menu }}
                    </div>
                    
                    <div class="site-call-to-action">
                        Increase your online revenue
                        <a href="" class="action action-link-flat"><span class="action-inner">Hire Us</span></a>
                    </div>
                </div>

                <div class="footer-middle">
                    <div class="site-menu">
                        {{> menus/social-menu }}
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="site-menu">
                        {{> menus/tertiary-menu }}
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
    <footer class="main-footer">
        <div class="container">
            <address>
                <strong><?php the_field('titre_formation', 'option'); ?></strong><br>
                <?php the_field('adresse_nom', 'option'); ?><br>
                <?php the_field('adresse_rue', 'option'); ?><br>
                <?php the_field('adresse_cp', 'option'); ?> <?php the_field('adresse_ville', 'option'); ?><br>
                T : <a href="tel:<?php the_field('adresse_telephone', 'option'); ?>"><?php the_field('adresse_telephone', 'option'); ?></a>
            </address>
            <?php wp_nav_menu([
                                  'theme_location' => 'footer',
                                  'container' => 'nav',
                                  'container_class' => 'footer-nav',
                                  'fallback_cb' => false
                              ]); ?>

<!--            <nav class="footer-nav">-->
<!--                <ul class="menu">-->
<!--                    <li class="menu-item"><a href="page-simple.html">Mentions légales</a></li>-->
<!--                    <li class="menu-item"><a href="page-simple.html">Politique de confidentialité</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
            <?php wp_nav_menu([
                                  'theme_location' => 'social',
                                  'container' => 'nav',
                                  'container_class' => 'social-nav',
                                  'fallback_cb' => false
                              ]); ?>

<!--            <nav class="social-nav">-->
<!--                <ul class="menu">-->
<!--                    <li class="menu-item"><a href="https://www.facebook.com/cefimformation/" target="_blank"><span class="screen-reader-text">Facebook du CEFIM</span><img loading="lazy"  src="img/icon-facebook.svg" alt="Facebook"></a></li>-->
<!--                    <li class="menu-item"><a href="https://twitter.com/cefimFormation/" target="_blank"><span class="screen-reader-text">Twitter du CEFIM</span><img loading="lazy"  src="img/icon-twitter.svg" alt="Twitter"></a></li>-->
<!--                    <li class="menu-item"><a href="https://www.linkedin.com/school/cefim/" target="_blank"><span class="screen-reader-text">LinkedIn du CEFIM</span><img loading="lazy"  src="img/icon-linkedin.svg" alt="LinkedIn"></a></li>-->
<!--                </ul>-->
<!--            </nav>-->
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>

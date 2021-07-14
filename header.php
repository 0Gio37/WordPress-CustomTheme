<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body class="home" <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="main-header">
        <div class="container">
            <div class="logo"><a href="<?php echo home_url();?>"><?php the_field('intitule_prinicipal', 'option'); ?></a></div>
<!--            <nav class="main-nav">-->
<!--                <button aria-expanded="false" aria-controls="main-menu">Menu</button>-->
<!--                <ul class="menu" id="main-menu" hidden>-->
<!--                    <li class="menu-item active"><a href="index.html">Accueil</a></li>-->
<!--                    <li class="menu-item"><a href="formation-liste.html">La formation</a></li>-->
<!--                    <li class="menu-item"><a href="etudiant-liste.html">Les étudiants</a></li>-->
<!--                    <li class="menu-item"><a href="actualite-liste.html">Actualités</a></li>-->
<!--                    <li class="menu-item"><a href="contact.html">Nous contacter</a></li>-->
                    <?php wp_nav_menu([
                            'theme_location'    =>'main',
                            'container'         =>'nav',
                            'container_class'   =>'main-nav',
                            'menu_class'        =>'menu',
                            'menu_id'           =>'main-menu',
                            'fallback_cb'       => false,
                            'items_wrap'        =>'<button aria-expanded="false" aria-controls="main-menu">Menu</button><ul id="%1$s" class="%2$s" hidden>%3$s</ul>'
                                      ]);?>
<!--                </ul>-->
<!--            </nav>-->

        </div>
    </header>












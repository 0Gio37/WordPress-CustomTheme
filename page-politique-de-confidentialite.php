<?php get_header();?>

    <main id="main-content" class="post main-padd">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="container container-narrow">
                <h2><?php the_field('pc_qui_titre'); ?></h2>
                <p><?php the_field('pc_qui_text'); ?></p>
                <hr/>
            </div>
            <div class="container container-narrow">
                <h2><?php the_field('pc_commentaires_titre'); ?></h2>
                <p><?php the_field('pc_commentaires_texte'); ?></p>
                <hr/>
            </div>
            <div class="container container-narrow">
                <h2><?php the_field('pc_medias_titre'); ?></h2>
                <p><?php the_field('pc_medias_texte'); ?></p>
                <hr/>
            </div>
        <div class="container container-narrow">
            <h2><?php the_field('cp_cookies_titre'); ?></h2>
            <p><?php the_field('pc_cookies_texte'); ?></p>
            <hr/>
        </div>
        <div class="container container-narrow">
            <h2><?php the_field('pc_contenu_embarque_titre'); ?></h2>
            <p><?php the_field('pc_contenu_embarque_texte'); ?></p>
            <hr/>
        </div>
        <div class="container container-narrow">
            <h2><?php the_field('pc_donnees_personnelles_titre'); ?></h2>
            <p><?php the_field('pc_donnees_personnelles_texte'); ?></p>
            <hr/>
        </div>
        <div class="container container-narrow">
            <h2><?php the_field('pc_durees_stockage_titre'); ?></h2>
            <p><?php the_field('pc_durees_de_stockage_texte'); ?></p>
            <hr/>
        </div>
        <div class="container container-narrow">
            <h2><?php the_field('pc_droits_titre'); ?></h2>
            <p><?php the_field('pc_droits_texte'); ?></p>
            <hr/>
        </div>
        <div class="container container-narrow">
            <h2><?php the_field('pc_transmission_titre'); ?></h2>
            <p><?php the_field('pc_transmission_texte'); ?></p>
        </div>
    </main>

<?php get_footer();?>

<?php get_header();?>

    <main id="main-content" class="modules">
        <div class="container container-narrow">
            <h1 class="modules-title"><?php the_field('page_formation_titre', 'option'); ?></h1>
            <div class="module-desc">
                <p><?php the_field('page_formation_descriptif', 'option'); ?></p>
            </div>
        </div>
        <div class="container">
            <?php if (have_posts() ) {
                while(have_posts() ){
                    the_post(); ?>
                    <article class="card">
                        <picture class="card-img">
                            <?php $imageModule = get_field('module_image'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imageModule,'formation-medium' ); ?>'>
                            <?php echo wp_get_attachment_image( $imageModule, 'formation-full' ); ?>
                        </picture>
                        <div class="card-content">
                            <h2 class="card-title">
                                <?php the_title(); ?> - <?php the_field('module_duree'); ?> heures
                            </h2>
                            <p class="card-excerpt">
                                <?php
                                $string = get_field("module_contenu");
                                echo wp_html_excerpt($string, 200, null);
                                ?> [...]
                            </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri();?>/img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
                    </article>
                <?php } ?>
            <?php } ?>
        </div>
    </main>

<?php get_footer();?>

<?php get_header();?>

    <main id="main-content" class="modules main-padd">
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
                        <picture>
                            <?php $imgID = get_field('module_image'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imgID,'formation-medium' ); ?>'>
                            <?php echo wp_get_attachment_image( $imgID, 'formation-full',false, ['loading' => 'lazy', 'class'=>'card-img','alt'=>'image de présentation la formation'] ); ?>
                        </picture>
                        <div class="card-content">
                            <?php
                            $hours = get_field('module_duree');
                            if($hours){?>
                                <h2 class="card-title"><?php the_title() ?> - <?php echo $hours ?> heures</h2>
                                <?php }else {?>
                                <h2 class="card-title"><?php the_title() ?></h2>
                            <?php } ?>
                            <p class="card-excerpt">
                                <?php
                                $string = get_field("module_contenu");
                                echo wp_html_excerpt($string, 200, null);
                                ?> [...]
                            </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri();?>/img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
                    </article>
                <?php }}?>

<!--            <nav class="pagination">-->
            <?php echo get_the_posts_pagination([
                    'prev_text'         => '<<',
                    'next_text'         => '>>',
                    'type'              => 'list',]);
            ?>
<!--                <ul class="pagination-list">-->
<!--                    <li class="pagination-item">-->
<!--                        <a href="#" class="pagination-link" aria-label="Précédent">-->
<!--                            <span aria-hidden="true">&laquo;</span>-->
<!--                            <span class="screen-reader-text">Précédent</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="pagination-item current">-->
<!--                        <a href="#" class="pagination-link">1</a>-->
<!--                    </li>-->
<!--                    <li class="pagination-item">-->
<!--                        <a href="#" class="pagination-link">2</a>-->
<!--                    </li>-->
<!--                    <li class="pagination-item">-->
<!--                        <a href="#" class="pagination-link">3</a>-->
<!--                    </li>-->
<!--                    <li class="pagination-item">-->
<!--                        <a href="#" class="pagination-link" aria-label="Suivant">-->
<!--                            <span aria-hidden="true">&raquo;</span>-->
<!--                            <span class="screen-reader-text">Suivant</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>
            </nav>-->

        </div>
    </main>

<?php get_footer();?>

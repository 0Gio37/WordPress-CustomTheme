<?php get_header();?>

    <main id="main-content" class="last-news">
        <div class="container">
            <h1 class="section-title"><?php the_field('actualites_titre', 'option'); ?></h1>
            <?php if (have_posts() ) {
                while(have_posts() ){
                    the_post(); ?>
                    <article class="card">
                        <picture>
                            <?php $imgID = get_field('actu_photo'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imgID,'news-small' ); ?>'>
                            <?php echo wp_get_attachment_image( $imgID, 'news-big',false, ['loading' => 'lazy', 'class'=>'card-img','alt'=>"image illustrant le mois de l'année"] ); ?>
                        </picture>
<!--                        <img loading="lazy"  src="img/news-1.jpg" alt="Some code" class="card-img" srcset="img/news-1.jpg,-->
<!--                            img/news-1_2x.jpg 2x">-->
                        <div class="card-content">
                            <p class="card-date"><time datetime="2020-02-12"><?php the_field('actu_date'); ?></time></p>
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-excerpt">
                                <?php
                                $string = get_field("actu_contenu");
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

<?php get_header();?>

    <main id="main-content" class="post">
        <div class="container container-narrow">
            <?php $imgID = get_field('actu_photo'); ?>
            <?php echo wp_get_attachment_image( $imgID, 'news-big', false, ['loading' => 'lazy', 'class'=>'card-img','alt'=>"image illustrant le mois de l'année"] ); ?>
<!--            <img loading="lazy"  src="img/news-1_2x.jpg" alt="Some code" class="featured-img">-->
            <h1><?php the_title(); ?></h1>
            <p class="post-date"><?php the_field('actu_date'); ?></p>
            <p><?php the_field('actu_contenu'); ?></p>
        </div>
    </main>

<?php get_footer();?>

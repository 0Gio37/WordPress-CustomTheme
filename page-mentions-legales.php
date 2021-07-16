<?php get_header();?>

<main id="main-content" class="post main-padd">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container container-narrow">
        <p><?php the_field('mentions_contenu'); ?></p>
    </div>
</main>

<?php get_footer();?>


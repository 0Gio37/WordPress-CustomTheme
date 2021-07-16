<?php get_header();?>

<main id="main-content" class="post">
    <?php
    $imgID = get_field('module_image');
    $imgArr = wp_get_attachment_image_src( $imgID, 'formation-full' );
    ?>
    <section class="module-hero" style="background-image: url(<?php echo $imgArr[0]; ?> )">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
    <section class="module-desc">
        <div class="container container-narrow">
            <p><?php the_field('module_contenu'); ?></p>
        </div>
    </section>
</main>

<?php get_footer();?>

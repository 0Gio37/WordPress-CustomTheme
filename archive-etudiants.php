<?php get_header();?>

    <main id="main-content" class="students main-padd">
        <div class="container">
            <h1 class="section-title"><?php the_field('page_etudiant_titre', 'option'); ?></h1>
                <?php if (have_posts() ) {
                    while(have_posts() ){
                    the_post(); ?>
                    <article class="student">
                        <picture>
                            <?php $imgID = get_field('etudiant_photo'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imgID,'etudiant-small' ); ?>'>
                            <?php echo wp_get_attachment_image( $imgID, 'etudiant-regular', false, ['loading' => 'lazy','class' => 'student-img'] ); ?>
                        </picture>
                        <h2 class="student-name"><?php the_title() ?></h2>
                        <a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
                    </article>
                <?php }} ?>

            <?php echo get_the_posts_pagination([
                    'prev_text'         => '<<',
                    'next_text'         => '>>',
                    'type'              => 'list']);
            ?>
        </div>
    </main>

<?php get_footer();?>

<?php get_header();?>

<main id="main-content" class="student-post">
    <div class="container">
            <?php $imgID = get_field('etudiant_photo'); ?>
            <?php echo wp_get_attachment_image( $imgID, 'etudiant-regular', false, ['class' => 'student-post-img', 'loading' => 'lazy', 'alt'=>'<?php the_title(); ?>'] ); ?>
<!--        <img loading="lazy"  src="img/etudiant-1_2x.jpg" alt="Francine Auhi" class="student-post-img">-->
        <h1 class="student-post-title"><?php the_title(); ?></h1>
        <div class="field">
            <div class="field-title">Son film</div>
            <div class="field-content"><?php the_field('etudiant_film'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Sa série</div>
            <div class="field-content"><?php the_field('etudiant_serie'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Son jeu vidéo</div>
            <div class="field-content"><?php the_field('etudiant_jeuxvideo'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Son héros/héroïne</div>
            <div class="field-content"><?php the_field('etudiant_hero'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Son livre</div>
            <div class="field-content"><?php the_field('etudiant_livre'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Sa chanson</div>
            <div class="field-content"><?php the_field('etudiant_chanson'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Son application</div>
            <div class="field-content"><?php the_field('etudiant_application'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">Son site web</div>
            <div class="field-content"><?php the_field('etudiant_siteweb'); ?></div>
        </div>
        <div class="field">
            <div class="field-title">En deux mots</div>
            <div class="field-content"><?php the_field('etudiant_presentation'); ?></div>
        </div>
    </div>
</main>

<?php get_footer();?>

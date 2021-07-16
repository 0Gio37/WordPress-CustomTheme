<?php get_header();?>

<main id="main-content">
    <?php
    $imgID = get_field('accueil_image_de_fond');
    $imgArr = wp_get_attachment_image_src( $imgID, 'home-full' );
    ?>
    <section class="home-hero inverted" style="background-image: url(<?php echo $imgArr[0]; ?> );">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php the_field('accueil_titre_principal'); ?></h1>
                <a href="etudiant-liste.html" class="hero-link"><?php the_field('accueil_titre_secondaire'); ?></a>
            </div>
        </div>
    </section>
    <section class="last-news">
        <div class="container">
            <h2 class="section-title"><?php the_field('accueil_sous_titre_actualites'); ?></h2>
            <?php
            $arg = [
                'post_type'     => 'post',
                'category_name' => 'actualites-mensuelles',
                'order'         => 'DESC',
                'orderby'       => 'date',
                'posts_per_page' => 3,
            ];
            $my_query = new WP_Query($arg);
            if ($my_query->have_posts()){
                while ($my_query->have_posts()) {
                    $my_query->the_post(); ?>
                    <article class="card">
                        <picture>
                            <?php $imgID = get_field('actu_photo'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imgID,'news-small' ); ?>'>
                            <?php echo wp_get_attachment_image( $imgID, 'news-big',false, ['loading' => 'lazy', 'class'=>'card-img','alt'=>"image illustrant le mois de l'année"] ); ?>
                        </picture>
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
                <?php }}
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <section class="students inverted">
        <div class="container">
            <h2 class="section-title"><?php the_field('accueil_sous_titre_etudiant'); ?></h2>
            <?php
            $arg = [
                'post_type'     => 'etudiants',
                'order'         => 'ACS',
                'orderby'       => 'title',
                'posts_per_page' => 4,
            ];
            $my_query = new WP_Query($arg);
            if ($my_query->have_posts()){
            while ($my_query->have_posts()) {
            $my_query->the_post(); ?>
                    <article class="student">
                        <picture>
                            <?php $imgID = get_field('etudiant_photo'); ?>
                            <source media="(max-width: 480px)" srcset='<?php echo wp_get_attachment_image_url($imgID,'etudiant-small' ); ?>'>
                            <?php echo wp_get_attachment_image( $imgID, 'etudiant-regular', false, ['loading' => 'lazy','class' => 'student-img'] ); ?>
                        </picture>
                        <h2 class="student-name"><?php the_title() ?></h2>
                        <a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
                    </article>
                <?php }}
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <section class="modules">
        <div class="container">
            <h2 class="section-title"><?php the_field('accueil_sous_titre_formation'); ?></h2>
            <?php
            $arg = [
                'post_type'     => 'formation',
                'order'         => 'DESC',
                'orderby'       => 'title',
                'posts_per_page' => 2,
            ];
            $my_query = new WP_Query($arg);
            if ($my_query->have_posts()){
            while ($my_query->have_posts()) {
            $my_query->the_post(); ?>
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
            <?php }}
            wp_reset_postdata();
            ?>
<!--            <article class="card">-->
<!--                <img loading="lazy"  src="img/formation-2.jpg" alt="A coloured keyboard" class="card-img" srcset="img/formation-2.jpg,-->
<!--					img/formation-2_2x.jpg 2x">-->
<!--                <div class="card-content">-->
<!--                    <h2 class="card-title">Module JavaScript</h2>-->
<!--                    <p class="card-excerpt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>-->
<!--                </div>-->
<!--                <a href="formation-simple.html" class="card-link">Lire la suite <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>-->
<!--            </article>-->
        </div>
    </section>
</main>

<?php get_footer();?>

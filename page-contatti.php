<?php
/* Template Name: Contatti */
get_header(); ?>
<main class="contatti">
    <!-- Hero -->
    <section class="hero-contatti container">
        <h1 class="hero-title title-h2 medium black-title uppercase">
            <?php the_title(); ?>
            <span class="title-bg semibold uppercas"><?php the_title(); ?></span>
        </h1>
        <div class="hero-info">
            <div class="info-contatti">
                <?php
                $info_contatti = get_field('testo_contatti');
                if ($info_contatti): ?>
                    <div class="text-contatti">
                        <?php echo $info_contatti ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="map-container">
                <?php
                $location = get_field('mappa');
                if ($location): ?>
                    <div class="map">
                        <?php echo $location ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>
</main>
<?php get_footer(); ?>
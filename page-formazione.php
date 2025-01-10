<?php
/* Template Name: Formazione */
get_header(); ?>
<main class="formazione">
    <!-- Hero -->
    <section class="hero-formazione container">
        <?php
        $title = get_field('titolo_hero');
        $text = get_field('testo_hero');

        if ($title) : ?>

            <h1 class="title title-h2 medium black-title uppercase">
                <?php echo esc_html($title); ?>
                <span class="title-bg semibold uppercase"><?php echo esc_html($title); ?></span>
            </h1>
        <?php endif;
        if ($text) : ?>
            <div class="text text-body">
                <?php echo $text; ?>
            </div>
        <?php endif; ?>
    </section>
    <!-- Loop Corsi -->
    <section class="loop-corsi container">
        <h2 class="title title-h3 medium black-title uppercase">Corsi in Programmazione</h2>

        <?php /* Loop Corsi */

        $corsi_loop = new WP_Query(array(
            'post_type'     => 'corsi',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        )); ?>

        <?php if ($corsi_loop->have_posts()) : ?>
            <ul class="corsi-list">
                <?php while ($corsi_loop->have_posts()) : $corsi_loop->the_post(); ?>
                    <div class="card">
                        <div class="card-box">
                            <?php the_post_thumbnail('medium', array('class' => '', 'alt' => get_the_title())); ?>
                            <div class="card-info">
                                <div class="card-wrap">
                                    <div>
                                        <p class="label text-small">Corso</p>
                                        <?php
                                        $durata = get_field('durata');
                                        if ($durata) : ?>
                                            <p class="durata"><?php echo esc_html($durata); ?></p>
                                        <?php endif; ?>
                                    </div>

                                    <p class="card-title title-h5 medium"><?php the_title(); ?></p>
                                </div>

                                <a href="<?php echo the_permalink(); ?>" class="card-icon">
                                    <span>
                                        +
                                    </span>
                                </a>

                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>
    <!-- Blocco valori -->
    <section class="valori container"> 
        <div class="valori-info">
            <?php
            $title_valori = get_field('titolo_blocco');
            $text_valori = get_field('testo_blocco');

            if ($title_valori) : ?>

                <h3 class="title-valori title-h3 medium black-title uppercase">
                    <?php echo esc_html($title_valori); ?>
                </h3>
            <?php endif;
            if ($text_valori) : ?>
                <div class="text-valori text-body">
                    <?php echo $text_valori; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="valori-repeater">
            <?php
            if (have_rows('repeater_blocco')): ?>
                <ul class="valori-list">
                    <?php
                    while (have_rows('repeater_blocco')) : the_row();

                        $text = get_sub_field('testo_elemento'); ?>

                        <li class="link-item">
                            <div class="icon">
                                <div class="icon-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                        <g clip-path="url(#clip0_228_6973)">
                                            <path d="M12.5 21.5598L6.93996 15.9998L5.04663 17.8798L12.5 25.3331L28.5 9.33312L26.62 7.45312L12.5 21.5598Z" fill="url(#paint0_linear_228_6973)" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_228_6973" x1="16.7733" y1="7.45312" x2="16.7733" y2="25.3331" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#DA0A15" />
                                                <stop offset="1" stop-color="#B32323" />
                                            </linearGradient>
                                            <clipPath id="clip0_228_6973">
                                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <div class="link-text title-h5 semibold uppercase black-title">
                                <?php echo $text; ?>
                            </div>
                        </li>

                    <?php
                    endwhile; ?>
                </ul>
            <?php
            endif; ?>
        </div>
    </section>

    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
</main>
<?php get_footer(); ?>
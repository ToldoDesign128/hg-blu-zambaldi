<?php
get_header(); ?>
<main class="post-corsi">
    <!-- Hero -->
    <section class="hero-post-corsi container">
        <div class="hero-wrap">
            <div class="img-mobile">
                <svg xmlns="http://www.w3.org/2000/svg" width="390" height="249" viewBox="0 0 390 249" fill="none">
                    <path d="M268.789 249L311.507 85.9335L332.021 161.07H488V139.475H348.417L310.331 0L268.789 170.61L230.556 53.8378L184.161 200.191H-642V221.785H199.896L230.924 123.871L268.789 249Z" fill="url(#paint0_linear_213_1054)" fill-opacity="0.08" />
                    <defs>
                        <linearGradient id="paint0_linear_213_1054" x1="-642" y1="126.114" x2="488" y2="122.924" gradientUnits="userSpaceOnUse">
                            <stop offset="0.074345" stop-color="white" />
                            <stop offset="0.727543" stop-color="#F8F8F8" />
                            <stop offset="1" stop-color="#F5F5F5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="img-desk">
                <svg xmlns="http://www.w3.org/2000/svg" width="1620" height="480" viewBox="0 0 1620 480" fill="none">
                    <path d="M288.955 479.497L206.219 165.481L166.489 310.17H0V268.586H134.733L208.498 0L288.955 328.541L363.005 103.675L452.861 385.506H1619.33V427.089H422.386L362.293 238.538L288.955 479.497Z" fill="white" fill-opacity="0.08" />
                </svg>
            </div>

            <?php
            $cta_title = get_field('titolo_blocco');
            $cta_text = get_field('testo_blocco'); ?>

            <div class="cta-content">
                <?php if ($cta_title) : ?>
                    <p class="title-block title-h3 regular uppercase"><?php echo esc_html($cta_title) ?></p>
                <?php endif;
                if ($cta_text) : ?>
                    <div class="text-block text-body"><?php echo $cta_text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Content Corso -->
    <section class="post-content container">
        <div class="content-info">
            <?php
            $title_valori = get_field('titolo_pensato');
            $text_valori = get_field('testo_pensato');

            if ($title_valori) : ?>

                <h3 class="title-content title-h3 medium black-title uppercase">
                    <?php echo esc_html($title_valori); ?>
                </h3>
            <?php endif;
            if ($text_valori) : ?>
                <div class="text-content text-body">
                    <?php echo $text_valori; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="content-repeater">
            <?php
            if (have_rows('repeater_icone')): ?>
                <ul class="content-list">
                    <?php
                    while (have_rows('repeater_icone')) : the_row();

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
        <div class="programma">
            <div class="programma-info">
                <?php
                $title_programma = get_field('titolo_programma');
                $durata = get_field('durata');

                if ($title_valori) : ?>

                    <h3 class="title-programma title-h3 medium black-title uppercase">
                        <?php echo esc_html($title_valori); ?>
                    </h3>
                <?php endif;
                if ($text_valori) : ?>
                    <div class="text-programma title-h4 regular black-title">
                        <span></span>
                        <?php echo $durata; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="repeater-programma">
                <?php
                if (have_rows('repeater_programma')): ?>
                    <ol class="programma-list">
                        <?php
                        while (have_rows('repeater_programma')) : the_row();

                            $title = get_sub_field('titolo_elemento');
                            $text = get_sub_field('contenuto_elemento'); ?>

                            <li class="link-item">
                                <div class="title-h4 semibold red-title">
                                    <?php echo esc_html($title); ?>
                                </div>

                                <div class="text">
                                    <?php echo $text; ?>
                                </div>
                            </li>

                        <?php
                        endwhile; ?>
                    </ol>
                <?php
                endif; ?>
            </div>
        </div>
    </section>
    <!-- Gallery -->
    <section class="gallery container">
        <div class="swiper swiperGallery">
            <?php
            $images = get_field('galleria');
            $size = 'large';
            if ($images): ?>
                <div class="swiper-wrapper">
                    <?php foreach ($images as $image_id): ?>
                        <li class="swiper-slide">
                            <?php echo wp_get_attachment_image($image_id, $size); ?>
                        </li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
</main>
<?php get_footer(); ?>
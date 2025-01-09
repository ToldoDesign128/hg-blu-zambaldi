<?php
/* Template Name: Prodotti */
get_header(); ?>
<main class="prodotti">
    <!-- Hero -->
    <section class="hero-prodotti container">
        <?php
        $titoletto = get_field('titoletto');
        $title = get_field('titolo');
        $text = get_field('testo');

        if ($titoletto) : ?>
            <p class="titoletto uppercase medium">
                <?php echo esc_html($titoletto); ?>
            </p>
        <?php endif;
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
        <div class="block-img">
            <?php
            $image = get_field('immagine');
            if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="block-txt">
            <div class="block-txt-wrap">
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
                $title_block = get_field('titolo_blocco');
                $text_block = get_field('testo_blocco');

                if ($title_block) : ?>

                    <h2 class="title-block title-h3 regular uppercase">
                        <?php echo esc_html($title_block); ?>
                    </h2>
                <?php endif;
                if ($text_block) : ?>
                    <div class="text-block text-body ">
                        <?php echo $text_block; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Fornitori -->
    <section class="fornitori container">
        <?php
        $title_fornitori = get_field('titolo_fornitori');
        $text_fornitori = get_field('testo_fornitori');

        if ($title_fornitori) : ?>

            <h3 class="title-fornitori title-h3 medium black-title uppercase">
                <?php echo esc_html($title_fornitori); ?>
            </h3>
        <?php endif;
        if ($text_fornitori) : ?>
            <div class="text-fornitori">
                <?php echo $text_fornitori; ?>
            </div>
        <?php endif; ?>
        <div class="repeater-fornitori">
            <?php
            if (have_rows('repeater_fornitori')): ?>
                <ul class="fornitori-list">
                    <?php
                    while (have_rows('repeater_fornitori')) : the_row();

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
    <!-- Brand -->
    <section class="brand container">
        <?php
        $title_brand = get_field('titolo_brand');

        if ($title_brand) : ?>

            <h3 class="title-brand title-h3 medium black-title uppercase">
                <?php echo esc_html($title_brand); ?>
            </h3>
        <?php endif; ?>

        <div class="repeater-brand">
            <?php
            if (have_rows('repeater_loghi')): ?>
                <ul class="loghi-list">
                    <?php
                    while (have_rows('repeater_loghi')) : the_row();

                        $image = get_sub_field('immagine_logo');
                        $link = get_sub_field('link_logo');

                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                            <li class="logo-item">
                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <?php if ($image) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            </li>

                    <?php
                        endif;
                    endwhile; ?>
                </ul>
            <?php
            endif; ?>
        </div>
    </section>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>
</main>
<?php get_footer(); ?>
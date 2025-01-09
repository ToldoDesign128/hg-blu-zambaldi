<?php
/* Template Name: Assistenza */
get_header(); ?>
<main class="assistenza">
    <!-- Hero -->
    <section class="hero-assistenza container">
        <?php
        $title = get_field('titolo');
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
    <!-- Tipologia di Assistenza -->
    <section class="tipologia container">
        <?php
        $title_tipologia = get_field('titolo_assistenza');
        $text_tipologia = get_field('testo_assistenza');

        if ($title_tipologia) : ?>

            <h3 class="title title-h3 medium black-title uppercase">
                <?php echo esc_html($title_tipologia); ?>
            </h3>
        <?php endif;
        if ($text_tipologia) : ?>
            <div class="text">
                <?php echo $text_tipologia; ?>
            </div>
        <?php endif; ?>
        <div class="repeater-assistenza">
            <?php
            if (have_rows('repeater_assistenza')): ?>
                <ol class="assistenza-list">
                    <?php
                    while (have_rows('repeater_assistenza')) : the_row();

                        $title = get_sub_field('titolo_elemento');
                        $text = get_sub_field('testo_elemento'); ?>

                        <li class="link-item">
                            <?php echo esc_html($title); ?>

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
    </section>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>
</main>
<?php get_footer(); ?>
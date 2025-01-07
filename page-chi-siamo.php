<?php
/* Template Name: Chi Siamo */
get_header(); ?>
<main class="about">
    <!-- Hero -->
    <section class="hero-about container">
        <?php
        $title = get_field('titolo');
        $text = get_field('testo');

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
        <div class="repeater">
            <?php
            if (have_rows('repeater')): ?>
                <ul class="repeater-list">
                    <?php
                    while (have_rows('repeater')) : the_row();

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

                            <div class="link-text title-h5">
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
    <!-- Azienda -->
    <section class="azienda container">
        <?php
        $title_azienda = get_field('titolo_azienda');
        $text_azienda = get_field('testo_azienda');

        if ($title_azienda) : ?>

            <h3 class="title-azienda title-h3 medium uppercase black-title">
                <?php echo esc_html($title_azienda); ?>
            </h3>
        <?php endif;
        if ($text_azienda) : ?>
            <div class="text-azienda text-body">
                <?php echo $text_azienda; ?>
            </div>
        <?php endif; ?>

        <div class="team">
            <?php
            $title_team = get_field('titolo_team');

            if ($title_team) : ?>

                <h3 class="title-team title-h3 medium uppercase black-title">
                    <?php echo esc_html($title_team); ?>
                </h3>
            <?php endif;
            if (have_rows('repeater_team')): ?>
                <ul class="repeater-team">
                    <?php
                    while (have_rows('repeater_team')) : the_row();

                        $nome = get_sub_field('nome_card');
                        $foto = get_sub_field('foto_card');
                        $mail = get_sub_field('mail_card');
                        $telefono = get_sub_field('telefono_card');

                        if ($mail) {
                            $mail_url = $mail['url'];
                            $mail_title = $mail['title'];
                            $mail_target = $mail['target'] ? $mail['target'] : '_self';
                        };
                        if ($telefono) {
                            $telefono_url = $telefono['url'];
                            $telefono_title = $telefono['title'];
                            $telefono_target = $telefono['target'] ? $telefono['target'] : '_self';
                        }; ?>

                        <li class="card-team">
                            <span class="card-border"></span>
                            <p class="title-h4 semibold"><?php echo esc_html($nome) ?></p>
                            <div class="img-wrap">
                                <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>">
                            </div>
                            <div class="card-link">
                                <div class="link-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="23" viewBox="0 0 28 23" fill="none">
                                        <path d="M25.2 0.5H2.8C1.26 0.5 0.014 1.7375 0.014 3.25L0 19.75C0 21.2625 1.26 22.5 2.8 22.5H25.2C26.74 22.5 28 21.2625 28 19.75V3.25C28 1.7375 26.74 0.5 25.2 0.5ZM25.2 6L14 12.875L2.8 6V3.25L14 10.125L25.2 3.25V6Z" fill="#464651" />
                                    </svg>
                                    <a class="text-body" href="<?php echo esc_url($mail_url); ?>" target="<?php echo esc_attr($mail_target); ?>">
                                        <?php echo esc_html($mail_title); ?>
                                    </a>
                                </div>
                                <div class="link-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                        <path d="M5.02778 10.8194C7.02778 14.75 10.25 17.9583 14.1806 19.9722L17.2361 16.9167C17.6111 16.5417 18.1667 16.4167 18.6528 16.5833C20.2083 17.0972 21.8889 17.375 23.6111 17.375C24.375 17.375 25 18 25 18.7639V23.6111C25 24.375 24.375 25 23.6111 25C10.5694 25 0 14.4306 0 1.38889C0 0.625 0.625 0 1.38889 0H6.25C7.01389 0 7.63889 0.625 7.63889 1.38889C7.63889 3.125 7.91667 4.79167 8.43055 6.34722C8.58333 6.83333 8.47222 7.375 8.08333 7.76389L5.02778 10.8194Z" fill="#464651" />
                                    </svg>
                                    <a class="text-body medium" href="<?php echo esc_url($telefono_url); ?>" target="<?php echo esc_attr($telefono_target); ?>">
                                        <?php echo esc_html($telefono_title); ?>
                                    </a>
                                </div>
                            </div>
                        </li>

                    <?php
                    endwhile; ?>
                </ul>
            <?php
            endif; ?>
        </div>
    </section>
    <!-- Testimonianze -->
    <section class="testimonianze container">
        <?php
        $title_testimonianze = get_field('titolo_testimonianze');
        $text_testimonianze = get_field('testo_testimonianze');

        if ($title_testimonianze) : ?>

            <h4 class="title-testimonianze title-h3 medium uppercase black-title">
                <?php echo esc_html($title_testimonianze); ?>
            </h4>
        <?php endif;
        if ($text_testimonianze) : ?>
            <div class="text-testimonianze">
                <?php echo $text_testimonianze; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <?php
            $card_text = get_field('testo_testimonianza');
            $card_img = get_field('immagine_cliente');
            $card_name = get_field('nome_e_cognome');
            $card_role = get_field('ruolo'); ?>

            <img src="#" alt="quote" class="icon-bg">

            <?php if ($card_text) {
                echo $card_text;
            }; ?>

            <div class="card-info">
                <?php if ($card_img) : ?>
                    <img src="<?php echo esc_url($card_img['url']); ?>" alt="<?php echo esc_attr($card_img['alt']); ?>" />
                <?php endif;
                if ($card_name) : ?>
                    <p><?php echo esc_html($card_name) ?></p>
                <?php endif;
                if ($card_role) : ?>
                    <p><?php echo esc_html($card_role) ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="repeater-loghi">
            <?php
            if (have_rows('repeater_loghi')): ?>
                <ul class="loghi-list">
                    <?php
                    while (have_rows('repeater_loghi')) : the_row();

                        $link = get_sub_field('link_logo');
                        $image = get_sub_field('immagine_logo');

                        if ($link) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        } ?>

                        <li class="link-item">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
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
<?php
/* Template Name: Testimonianze */
get_header(); ?>
<main class="testimonianze">
    <!-- Hero -->
    <section class="hero-testimonianze container">

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
            <div class="text">
                <?php echo $text; ?>
            </div>
        <?php endif; ?>

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
    </section>
    <!-- Loop Testimonianze -->
    <section class="loop-testimonianze container">
        <?php
        $custom_loop = new WP_Query(array(
            'post_type'     => 'testimonianze',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        )); ?>

        <?php if ($custom_loop->have_posts()) : ?>

            <div class="loop-container">

                <?php while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                    <div class="card">
                        <?php
                        $card_text = get_field('testo_testimonianza');
                        $card_img = get_field('immagine_cliente');
                        $card_name = get_field('nome_e_cognome');
                        $card_role = get_field('ruolo'); ?>

                        <svg class="quote-bg" xmlns="http://www.w3.org/2000/svg" width="125" height="86" viewBox="0 0 125 86" fill="none">
                            <path d="M21.9887 0.0109311C25.8805 0.0105169 28.8644 1.66292 30.9404 4.96815C33.0164 8.27858 33.1465 11.6852 31.3307 15.188L23.3542 31.1454L38.9215 31.1437C43.2025 31.1433 46.8661 32.6685 49.9125 35.7193C52.964 38.765 54.4899 42.4283 54.4904 46.7093L54.4929 70.0603C54.4933 74.3413 52.9681 78.005 49.9173 81.0513C46.8716 84.1028 43.2083 85.6288 38.9273 85.6292L15.5763 85.6317C11.2953 85.6322 7.62905 84.107 4.57754 81.0561C1.53122 78.0104 0.00782421 74.3471 0.00736852 70.0661L0.00361942 34.8451C0.00349515 33.6775 0.101962 32.4763 0.299012 31.2412C0.490883 30.0114 0.911081 28.8775 1.55961 27.8396L12.649 5.84966C13.5569 4.03338 14.854 2.60624 16.5403 1.56824C18.2267 0.530245 20.0428 0.0111383 21.9887 0.0109311ZM92.0415 0.00347437C95.9333 0.0030601 98.9173 1.65546 100.993 4.9607C103.069 8.27112 103.199 11.6778 101.384 15.1806L93.407 31.1379L108.974 31.1363C113.255 31.1358 116.919 32.661 119.965 35.7119C123.017 38.7575 124.543 42.4209 124.543 46.7019L124.546 70.0528C124.546 74.3338 123.021 77.9975 119.97 81.0438C116.924 84.0953 113.261 85.6213 108.98 85.6218L85.6291 85.6243C81.3481 85.6247 77.6819 84.0995 74.6304 81.0486C71.584 78.003 70.0606 74.3396 70.0602 70.0586L70.0564 34.8376C70.0563 33.6701 70.1522 32.4688 70.344 31.2338C70.5411 30.0039 70.9639 28.8701 71.6124 27.8322L82.7018 5.84221C83.6097 4.02592 84.9068 2.59878 86.5931 1.56079C88.2795 0.522788 90.0956 0.0036815 92.0415 0.00347437Z" fill="#F6F6F8" />
                        </svg>

                        <div class="card-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17" fill="none">
                                <path d="M3.8836 0.00148043C4.57108 0.00139818 5.09818 0.329454 5.4649 0.985651C5.83162 1.64288 5.8546 2.31921 5.53384 3.01463L4.12481 6.18268L6.87472 6.18235C7.63095 6.18226 8.27813 6.48507 8.81625 7.09076C9.35529 7.69543 9.62485 8.42272 9.62493 9.27264L9.62537 13.9086C9.62545 14.7585 9.35603 15.4858 8.8171 16.0906C8.27909 16.6965 7.63198 16.9994 6.87575 16.9995L2.75087 17C1.99464 17.0001 1.34701 16.6973 0.80797 16.0916C0.269845 15.4869 0.000742783 14.7596 0.000662287 13.9097L2.07555e-08 6.9172C-2.19328e-05 6.6854 0.0173718 6.44691 0.0521808 6.20171C0.0860733 5.95755 0.160301 5.73244 0.274861 5.52639L2.23376 1.16066C2.39414 0.800067 2.62327 0.516735 2.92116 0.310658C3.21905 0.104582 3.53986 0.00152155 3.8836 0.00148043ZM16.2582 1.5461e-08C16.9457 -8.22295e-05 17.4728 0.327974 17.8395 0.98417C18.2062 1.6414 18.2292 2.31773 17.9085 3.01315L16.4994 6.1812L19.2493 6.18087C20.0056 6.18078 20.6528 6.48359 21.1909 7.08928C21.7299 7.69395 21.9995 8.42124 21.9996 9.27116L22 13.9071C22.0001 14.757 21.7307 15.4844 21.1917 16.0892C20.6537 16.695 20.0066 16.9979 19.2504 16.998L15.1255 16.9985C14.3693 16.9986 13.7216 16.6958 13.1826 16.0901C12.6445 15.4854 12.3754 14.7582 12.3753 13.9082L12.3746 6.91572C12.3746 6.68392 12.3915 6.44543 12.4254 6.20023C12.4602 5.95607 12.5349 5.73096 12.6495 5.52491L14.6084 1.15918C14.7688 0.798587 14.9979 0.515254 15.2958 0.309178C15.5937 0.103101 15.9145 4.1138e-05 16.2582 1.5461e-08Z" fill="url(#paint0_linear_233_7585)" />
                                <defs>
                                    <linearGradient id="paint0_linear_233_7585" x1="11" y1="0" x2="11" y2="17" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DA0A15" />
                                        <stop offset="1" stop-color="#B32323" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="card-text">
                                <?php if ($card_text) {
                                    echo $card_text;
                                }; ?>
                            </div>
                        </div>

                        <div class="card-info">
                            <?php if ($card_img) : ?>
                                <img src="<?php echo esc_url($card_img['url']); ?>" alt="<?php echo esc_attr($card_img['alt']); ?>" />
                            <?php endif;
                            if ($card_name) : ?>
                                <p class="info-name text-body"><?php echo esc_html($card_name) ?></p>
                            <?php endif;
                            if ($card_role) : ?>
                                <p class="info-role text-body black-title"><?php echo esc_html($card_role) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>
    </section>
    <!-- CTA -->
    <section class="cta container">
        <div class="cta-wrap">

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
            $cta_title = get_field('titolo_cta');
            $cta_text = get_field('testo_cta');
            $cta_button = get_field('pulsante_cta');
    
            if ($cta_button) {
                $cta_button_url = $cta_button['url'];
                $cta_button_title = $cta_button['title'];
                $cta_button_target = $cta_button['target'] ? $cta_button['target'] : '_self';
            }; ?>
    
            <div class="cta-content">
                <?php if ($cta_title) : ?>
                    <p class="title-block title-h3 regular uppercase"><?php echo esc_html($cta_title) ?></p>
                <?php endif;
                if ($cta_text) : ?>
                    <div class="text-block text-body"><?php echo $cta_text ?></div>
                <?php endif;
                if ($cta_button) : ?>
                    <a class="btn" href="<?php echo esc_url($cta_button_url); ?>" target="<?php echo esc_attr($cta_button_target); ?>"><?php echo esc_html($cta_button_title); ?></a>
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
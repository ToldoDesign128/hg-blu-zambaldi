<?php
/* Template Name: Home */
get_header(); ?>
<main class="home-page">
    <!-- Hero -->
    <section class="hero-home container">
        <div class="hero-box">
            <?php
            $title = get_field('titolo');
            $text = get_field('testo');

            if ($title) : ?>
                <h1 class="title title-h1">
                    <?php echo esc_html($title); ?>
                    <span class="title-bg semibold"><?php echo esc_html($title); ?></span>
                </h1>
            <?php endif;
            if ($text) : ?>
                <div class="text text-body">
                    <?php echo $text; ?>
                </div>
            <?php endif; ?>
            <div class="hero-btn">

                <?php
                $btn_1 = get_field('pulsante_1');
                if ($btn_1):
                    $btn_1_url = $btn_1['url'];
                    $btn_1_title = $btn_1['title'];
                    $btn_1_target = $btn_1['target'] ? $btn_1['target'] : '_self';
                ?>

                    <a class="btn-red text-small semibold" href="<?php echo esc_url($btn_1_url); ?>" target="<?php echo esc_attr($btn_1_target); ?>"><?php echo esc_html($btn_1_title); ?></a>

                <?php endif;

                $btn_2 = get_field('pulsante_2');
                if ($btn_2):
                    $btn_2_url = $btn_2['url'];
                    $btn_2_title = $btn_2['title'];
                    $btn_2_target = $btn_2['target'] ? $btn_2['target'] : '_self';
                ?>

                    <a class="btn text-small semibold" href="<?php echo esc_url($btn_2_url); ?>" target="<?php echo esc_attr($btn_2_target); ?>"><?php echo esc_html($btn_2_title); ?></a>

                <?php endif; ?>

            </div>
        </div>

        <div class="block-gallery">

            <div class="gallery-box">
                <div class="gallery-wrap">
                    <!-- Galleria 1 -->
                    <div class="swiper-container gallery-1">
                        <div class="swiper-wrapper">
                            <?php
                            $images = get_field('gallery_1');
                            $size = 'full';
                            if ($images):
                                foreach ($images as $image_id): ?>
                                    <div class="swiper-slide">
                                        <?php echo wp_get_attachment_image($image_id, $size); ?>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
                <div class="gallery-wrap">

                    <!-- Galleria 2 -->
                    <div class="swiper-container gallery-2">
                        <div class="swiper-wrapper">
                            <?php
                            $images = get_field('gallery_2');
                            $size = 'full';
                            if ($images):
                                foreach ($images as $image_id): ?>
                                    <div class="swiper-slide">
                                        <?php echo wp_get_attachment_image($image_id, $size); ?>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-wrap">

                <!-- Galleria 3 -->
                <div class="swiper-container gallery-3">
                    <div class="swiper-wrapper">
                        <?php
                        $images = get_field('gallery_3');
                        $size = 'full';
                        if ($images):
                            foreach ($images as $image_id): ?>
                                <div class="swiper-slide">
                                    <?php echo wp_get_attachment_image($image_id, $size); ?>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Chi siamo -->
    <section class="about-section">
        <div class="block-txt container">
            <div class="block-wrap">
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
                    <div class="text-block text-body">
                        <?php echo $text_block; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="block-cta container">
            <?php
            $title_about = get_field('titolo_about');
            $text_about = get_field('testo_about');

            $btn = get_field('pulsante_about');
            if ($btn) {
                $btn_url = $btn['url'];
                $btn_title = $btn['title'];
                $btn_target = $btn['target'] ? $btn['target'] : '_self';
            }

            if ($title_about) : ?>
                <h2 class="title-about title-h3 medium uppercase black-title">
                    <?php echo esc_html($title_about); ?>
                </h2>
            <?php endif;
            if ($text_about) : ?>
                <div class="text-about text-body">
                    <?php echo $text_block; ?>
                </div>
            <?php endif;
            if ($btn) : ?>
                <a class="btn text-small semibold" href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>"><?php echo esc_html($btn_title); ?></a>
            <?php endif; ?>
        </div>
    </section>
    <!-- Defibrillatori -->
    <section class="defibrillatori-section container">
        <?php
        $title_defi = get_field('titolo_defibrillatori');
        $text_defi = get_field('testo_defibrillatori');

        if ($title_defi) : ?>
            <h2 class="title-defi title-h3 medium uppercase black-title">
                <?php echo esc_html($title_defi); ?>
            </h2>
        <?php endif;
        if ($text_defi) : ?>
            <div class="text-defi text-body">
                <?php echo $text_defi; ?>
            </div>
        <?php endif; ?>
        <div class="loop-defi">
            <?php
            // ID della pagina "Defibrillatori"
            $parent_id = 407;

            // Query per ottenere tutte le pagine figlie del genitore specificato
            $args = array(
                'post_type' => 'page',
                'post_parent' => $parent_id,
                'orderby' => 'menu_order', // Ordina per l'ordine di menù (puoi cambiare se necessario)
                'order'   => 'ASC',        // Ordine ascendente
                'posts_per_page' => -1      // Ottieni tutte le pagine
            );

            $child_pages = new WP_Query($args);

            if ($child_pages->have_posts()) : ?>
                <ul class="child-pages-list">
                    <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
                        <li class="card-item">
                            <div class="card-title">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-res', 'alt' => get_the_title())); ?>
                                <?php the_title('<h5 class="title-h5 uppercase medium">', '</h5>'); ?>
                            </div>
                            <div class="card-content">
                                <?php
                                $text_card = get_field('testo_hero');
                                if ($text_card) : ?>
                                    <div class="text-body">
                                        <?php echo $text_card; ?>
                                    </div>
                                <?php endif; ?>
                                <a class="card-btn" href="<?php the_permalink(); ?>">
                                    <span>+</span>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>Non ci sono pagine figlie della pagina Defibrillatori.</p>
            <?php endif;

            // Ripristina i dati del post originale
            wp_reset_postdata();
            ?>

        </div>
    </section>
    <!-- Corsi -->
    <section class="corsi-section container">
        <div class="corsi-wrap">
            <?php
            $title_corsi = get_field('titolo_corsi');

            if ($title_corsi) : ?>
                <h2 class="title-corsi title-h3 medium uppercase black-title">
                    <?php echo esc_html($title_corsi); ?>
                </h2>
            <?php endif;

            $btn_corsi = get_field('pulsante_corsi');
            if ($btn_corsi):
                $btn_corsi_url = $btn_corsi['url'];
                $btn_corsi_title = $btn_corsi['title'];
                $btn_corsi_target = $btn_corsi['target'] ? $btn_corsi['target'] : '_self';
            ?>

                <a class="btn text-small semibold" href="<?php echo esc_url($btn_corsi_url); ?>" target="<?php echo esc_attr($btn_corsi_target); ?>"><?php echo esc_html($btn_corsi_title); ?></a>

            <?php endif; ?>
        </div>

        <?php
        /* Loop Corsi */

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
        <?php endif;

        $btn_corsi = get_field('pulsante_corsi');
        if ($btn_corsi):
            $btn_corsi_url = $btn_corsi['url'];
            $btn_corsi_title = $btn_corsi['title'];
            $btn_corsi_target = $btn_corsi['target'] ? $btn_corsi['target'] : '_self';
        ?>
            <div class="mobile-btn-wrap">
                <a class="btn text-small semibold" href="<?php echo esc_url($btn_corsi_url); ?>" target="<?php echo esc_attr($btn_corsi_target); ?>"><?php echo esc_html($btn_corsi_title); ?></a>
            </div>
        <?php endif; ?>
    </section>
    <!-- Prodotti e Assistenza -->
    <section class="prodotti-section container">
        <?php
        $title_prodotti = get_field('titolo_prodotti');
        $text_prodotti = get_field('testo_prodotti');

        if ($title_prodotti) : ?>
            <h2 class="title-prodotti title-h3 medium uppercase black-title">
                <?php echo esc_html($title_prodotti); ?>
            </h2>
        <?php endif;
        if ($text_prodotti) : ?>
            <div class="text-prodotti text-body">
                <?php echo $text_prodotti; ?>
            </div>
        <?php endif; ?>

        <?php
        // Recupera le pagine 'prodotti' e 'assistenza'
        $prodotti_page = get_page_by_path('prodotti');
        $assistenza_page = get_page_by_path('assistenza');

        // Verifica se le pagine sono state trovate
        if ($prodotti_page && $assistenza_page) :

            // Recupera i campi ACF della pagina 'prodotti'
            $prodotti_titolo = get_field('titolo', $prodotti_page->ID);
            $prodotti_testo = get_field('testo', $prodotti_page->ID);
            $prodotti_immagine = get_field('immagine', $prodotti_page->ID);

            // Recupera i campi ACF della pagina 'assistenza'
            $assistenza_titolo = get_field('titolo', $assistenza_page->ID);
            $assistenza_testo = get_field('testo', $assistenza_page->ID);
            $assistenza_immagine = get_field('immagine', $assistenza_page->ID);

            // Funzione per troncare il testo senza spezzare le parole
            function truncate_text($text, $length)
            {
                $text = wp_strip_all_tags($text); // Rimuove tutti i tag HTML
                if (strlen($text) <= $length) {
                    return $text;
                }
                $text = substr($text, 0, $length);
                $last_space = strrpos($text, ' ');
                if ($last_space !== false) {
                    $text = substr($text, 0, $last_space);
                }
                return $text . '...';
            }
        ?>
            <div class="card-section">
                <div class="card-prodotti">
                    <div class="card-content">
                        <p class="title-h5 semibold uppercase"><?php echo esc_html($prodotti_titolo); ?></p>
                        <div><?php echo esc_html(truncate_text($prodotti_testo, 150)); ?></div>
                        <a class="card-icon" href="<?php echo get_permalink($prodotti_page->ID); ?>"><span>+</span></a>
                    </div>
                    <?php if ($prodotti_immagine): ?>
                        <img src="<?php echo esc_url($prodotti_immagine['url']); ?>" alt="<?php echo esc_attr($prodotti_immagine['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="card-assisstenza">
                    <div class="card-content">
                        <p class="title-h5 semibold uppercase"><?php echo esc_html($assistenza_titolo); ?></p>
                        <div><?php echo esc_html(truncate_text($assistenza_testo, 150)); ?></div>
                        <a class="card-icon" href="<?php echo get_permalink($assistenza_page->ID); ?>"><span>+</span></a>
                    </div>
                    <?php if ($assistenza_immagine): ?>
                        <img src="<?php echo esc_url($assistenza_immagine['url']); ?>" alt="<?php echo esc_attr($assistenza_immagine['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        <?php
        endif;
        ?>

    </section>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
</main>
<?php get_footer(); ?>
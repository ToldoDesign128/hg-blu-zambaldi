<?php
/* Template Name: Home */
get_header(); ?>
<main class="home">
    <!-- Hero -->
    <section class="hero-home">
        <?php
        $title = get_field('titolo');
        $text = get_field('testo');

        if ($title) : ?>
            <h1 class="title">
                <?php echo esc_html($title); ?>
                <span><?php echo esc_html($title); ?></span>
            </h1>
        <?php endif;
        if ($text) : ?>
            <div class="text">
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

                <a class="btn-red" href="<?php echo esc_url($btn_1_url); ?>" target="<?php echo esc_attr($btn_1_target); ?>"><?php echo esc_html($btn_1_title); ?></a>

            <?php endif;

            $btn_2 = get_field('pulsante_2');
            if ($btn_2):
                $btn_2_url = $btn_2['url'];
                $btn_2_title = $btn_2['title'];
                $btn_2_target = $btn_2['target'] ? $btn_2['target'] : '_self';
            ?>

                <a class="btn" href="<?php echo esc_url($btn_2_url); ?>" target="<?php echo esc_attr($btn_2_target); ?>"><?php echo esc_html($btn_2_title); ?></a>

            <?php endif; ?>

        </div>
        <div class="block-gallery">
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

    </section>
    <!-- Chi siamo -->
    <section class="about">
        <div class="block-txt">
            <img src="" alt="elettrocardiogramma" class="cta-bg">
            <?php
            $title_block = get_field('titolo_blocco');
            $text_block = get_field('testo_blocco');

            if ($title_block) : ?>
                <h2 class="title-block">
                    <?php echo esc_html($title_block); ?>
                </h2>
            <?php endif;
            if ($text_block) : ?>
                <div class="text-block">
                    <?php echo $text_block; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="block-cta">
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
                <h2 class="title-about">
                    <?php echo esc_html($title_about); ?>
                </h2>
            <?php endif;
            if ($text_about) : ?>
                <div class="text-about">
                    <?php echo $text_block; ?>
                </div>
            <?php endif;
            if ($btn) : ?>
                <a class="btn" href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>"><?php echo esc_html($btn_title); ?></a>
            <?php endif; ?>
        </div>
    </section>
    <!-- Defibrillatori -->
    <section class="defibrillatori">
        <?php
        $title_defi = get_field('titolo_defibrillatori');
        $text_defi = get_field('testo_defibrillatori');

        if ($title_defi) : ?>
            <h2 class="title-defi">
                <?php echo esc_html($title_defi); ?>
            </h2>
        <?php endif;
        if ($text_defi) : ?>
            <div class="text-defi">
                <?php echo $text_defi; ?>
            </div>
        <?php endif; ?>
        <div class="loop-defi">
            <?php
            // ID della pagina "Defibrillatori"
            $parent_id = 21;

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
                        <li>
                            <div class="card-title">
                                <?php
                                $icon_defi = get_field('immagine_hero');
                                if (!empty($icon_defi)): ?>
                                    <img src="<?php echo esc_url($icon_defi['url']); ?>" alt="<?php echo esc_attr($icon_defi['alt']); ?>" />
                                <?php endif; ?>
                                <?php the_title(); ?>
                            </div>
                            <div class="card-content">
                                <?php
                                $text_card = get_field('testo_hero');
                                if ($text_card) : ?>
                                    <div>
                                        <?php echo $text_card; ?>
                                    </div>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>">
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
    <section class="corsi">
        <?php
        $title_corsi = get_field('titolo_corsi');

        if ($title_corsi) : ?>
            <h2 class="title-corsi">
                <?php echo esc_html($title_corsi); ?>
            </h2>
        <?php endif;

        $btn_corsi = get_field('pulsante_corsi');
        if ($btn_corsi):
            $btn_corsi_url = $btn_corsi['url'];
            $btn_corsi_title = $btn_corsi['title'];
            $btn_corsi_target = $btn_corsi['target'] ? $btn_corsi['target'] : '_self';
        ?>

            <a class="btn" href="<?php echo esc_url($btn_corsi_url); ?>" target="<?php echo esc_attr($btn_corsi_target); ?>"><?php echo esc_html($btn_corsi_title); ?></a>

        <?php endif;

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
                            <?php the_post_thumbnail('thumbnail', array('class' => '', 'alt' => get_the_title())); ?>
                            <div class="card-info">

                                <p class="label">Corso</p>
                                <?php
                                $durata = get_field('durata');
                                if ($durata) : ?>
                                    <p class="durata"><?php echo esc_html($durata); ?></p>
                                <?php endif; ?>

                                <p class="card-title"><?php the_title(); ?></p>

                                <a href="<?php echo the_permalink(); ?>" class="card-icon">+</a>

                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>
    <!-- Prodotti e Assistenza -->
    <section class="prodotti">
        <?php
        $title_prodotti = get_field('titolo_prodotti');
        $text_prodotti = get_field('testo_prodotti');

        if ($title_prodotti) : ?>
            <h2 class="title-prodotti">
                <?php echo esc_html($title_prodotti); ?>
            </h2>
        <?php endif;
        if ($text_prodotti) : ?>
            <div class="text-prodotti">
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
        ?>
            <section class="card-section">
                <div class="card-prodotti">
                    <h2><?php echo esc_html($prodotti_titolo); ?></h2>
                    <div><?php echo $prodotti_testo; ?></div>
                    <?php if ($prodotti_immagine): ?>
                        <img src="<?php echo esc_url($prodotti_immagine['url']); ?>" alt="<?php echo esc_attr($prodotti_immagine['alt']); ?>">
                    <?php endif; ?>
                    <a href="<?php echo get_permalink($prodotti_page->ID);?>"><span>+</span></a>
                </div>

                <div class="card-assisstenza">
                    <h2><?php echo esc_html($assistenza_titolo); ?></h2>
                    <div><?php echo $assistenza_testo; ?></div>
                    <?php if ($assistenza_immagine): ?>
                        <img src="<?php echo esc_url($assistenza_immagine['url']); ?>" alt="<?php echo esc_attr($assistenza_immagine['alt']); ?>">
                    <?php endif; ?>
                    <a href="<?php echo get_permalink($assistenza_page->ID);?>"><span>+</span></a>
                </div>
            </section>
        <?php
        endif;
        ?>

    </section>
    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
</main>
<?php get_footer(); ?>
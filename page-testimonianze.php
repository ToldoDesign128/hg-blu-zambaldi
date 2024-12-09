<?php
/* Template Name: Testimonianze */
get_header(); ?>
<main class="testimonianze">
    <!-- Hero -->
    <section class="hero-testimonianze">

        <?php
        $title = get_field('titolo');
        $text = get_field('testo_hero');

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
    <section class="loop-testimonianze">
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

                    <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>
    </section>
    <!-- CTA -->
    <section class="cta">
        <img src="" alt="elettrocardiogramma" class="cta-bg">

        <?php
        $cta_title = get_field('titolo_cta');
        $cta_text = get_field('testo_cta');
        $cta_button = get_field('pulsante_cta');

        if ($cta_button) {
            $cta_button_url = $cta_button['url'];
            $cta_button_title = $cta_button['title'];
            $cta_button_target = $cta_button['target'] ? $cta_button['target'] : '_self';
        }; ?>

        <img src="#" alt="quote" class="icon-bg">

        <div class="cta-content">
            <?php if ($cta_title) : ?>
                <p><?php echo esc_html($cta_title) ?></p>
            <?php endif;
            if ($cta_text) : ?>
                <div><?php echo $cta_text ?></div>
            <?php endif;
            if ($cta_button) : ?>
                <a href="<?php echo esc_url($cta_button_url); ?>" target="<?php echo esc_attr($cta_button_target); ?>"><?php echo esc_html($cta_button_title); ?></a>
            <?php endif; ?>
        </div>
    </section>
    <!-- Form -->
    <section class="form">

    </section>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>

</main>
<?php get_footer(); ?>
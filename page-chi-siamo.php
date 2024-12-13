<?php
/* Template Name: Chi Siamo */
get_header(); ?>
<main class="about">
    <!-- Hero -->
    <section class="hero-prodotti">
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
        <div class="block-img">
            <?php
            $image = get_field('immagine');
            if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
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
        <div class="repeater">
            <?php
            if (have_rows('repeater')): ?>
                <ul class="repeater-list">
                    <?php
                    while (have_rows('repeater')) : the_row();

                        $text = get_sub_field('testo_elemento'); ?>

                        <li class="link-item">
                            <img src="#" alt="check-icon" class="list-icon">

                            <div class="text">
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
    <section class="azienda">
        <?php
        $title_azienda = get_field('titolo_azienda');
        $text_azienda = get_field('testo_azienda');

        if ($title_azienda) : ?>

            <h3 class="title-azienda">
                <?php echo esc_html($title_azienda); ?>
            </h3>
        <?php endif;
        if ($text_azienda) : ?>
            <div class="text-azienda">
                <?php echo $text_azienda; ?>
            </div>
        <?php endif; ?>

        <div class="team">
            <?php
            $title_team = get_field('titolo_team');

            if ($title_team) : ?>

                <h3 class="title-team">
                    <?php echo esc_html($title_team); ?>
                </h3>
            <?php endif;
            if (have_rows('repeater_team')): ?>
                <ul class="repeater-team">
                    <?php
                    while (have_rows('repeater_team')) : the_row();

                        $nome = get_sub_field('testo_elemento');
                        $foto = get_sub_field('testo_elemento');
                        $mail = get_sub_field('testo_elemento');
                        $telefono = get_sub_field('testo_elemento');

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
                            <div class="card-box">
                                <p><?php echo esc_html($nome) ?></p>
                                <div class="img-wrap">
                                    <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>">
                                </div>
                            </div>
                            <div class="card-link">
                                <div class="link-item">
                                    <img src="#" alt="mail-icon">
                                    <a href="<?php echo esc_url($mail_url); ?>" target="<?php echo esc_attr($mail_target); ?>">
                                        <?php echo esc_html($mail_title); ?>
                                    </a>
                                </div>
                                <div class="link-item">
                                    <img src="#" alt="tel-icon">
                                    <a href="<?php echo esc_url($telefono_url); ?>" target="<?php echo esc_attr($telefono_target); ?>">
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
    <section class="testimonianze">
        <?php
        $title_testimonianze = get_field('titolo_testimonianze');
        $text_testimonianze = get_field('testo_testimonianze');

        if ($title_testimonianze) : ?>

            <h4 class="title-testimonianze">
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
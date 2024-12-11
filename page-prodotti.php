<?php
/* Template Name: Prodotti */
get_header(); ?>
<main class="prodotti">
    <!-- Hero -->
    <section class="hero-prodotti">
        <?php
        $titoletto = get_field('titoletto');
        $title = get_field('titolo');
        $text = get_field('testo');

        if ($titoletto) : ?>
            <p class="titoletto">
                <?php echo esc_html($titoletto); ?>
            </p>
        <?php endif;
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
    </section>
    <!-- Fornitori -->
    <section class="fornitori">
        <?php
        $title_fornitori = get_field('titolo_fornitori');
        $text_fornitori = get_field('testo_fornitori');

        if ($title_fornitori) : ?>

            <h3 class="title-fornitori">
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
    <!-- Brand -->
    <section class="brand">
        <?php
        $title_brand = get_field('titolo_brand');

        if ($title_brand) : ?>

            <h3 class="title-brand">
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
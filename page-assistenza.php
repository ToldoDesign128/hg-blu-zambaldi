<?php
/* Template Name: Assistenza */
get_header(); ?>
<main class="assistenza">
    <!-- Hero -->
    <section class="hero-assistenza">
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
    <!-- Tipologia di Assistenza -->
    <section class="tipologia">
        <?php
        $title_tipologia = get_field('titolo_assistenza');
        $text_tipologia = get_field('testo_assistenza');

        if ($title_tipologia) : ?>

            <h3 class="title">
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
    <section class="form">

    </section>
    <!-- FAQ -->
    <?php get_template_part('/template-parts/faq') ?>
</main>
<?php get_footer(); ?>
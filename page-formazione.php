<?php
/* Template Name: Formazione */
get_header(); ?>
<main class="formazione">
    <!-- Hero -->
    <section class="hero-formazione">
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
    </section>
    <!-- Loop Corsi -->
    <section class="loop-corsi">
        <h2 class="title">Corsi in Programmazione</h2>

        <?php /* Loop Corsi */

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
    <!-- Blocco valori -->
    <section class="valori">
        <div class="valori-info">
            <?php
            $title_valori = get_field('titolo_blocco');
            $text_valori = get_field('testo_blocco');

            if ($title_valori) : ?>

                <h3 class="title-valori">
                    <?php echo esc_html($title_valori); ?>
                </h3>
            <?php endif;
            if ($text_valori) : ?>
                <div class="text-valori">
                    <?php echo $text_valori; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="valori-repeater">
            <?php
            if (have_rows('repeater_blocco')): ?>
                <ul class="valori-list">
                    <?php
                    while (have_rows('repeater_blocco')) : the_row();

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

    <!-- Form -->
    <?php get_template_part('/template-parts/form') ?>
</main>
<?php get_footer(); ?>
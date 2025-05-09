<?php
/* Template Name: Contatti */
get_header(); ?>
<main class="contatti">
    <!-- Hero -->
    <section class="hero-contatti container">
        <h1 class="hero-title title-h2 medium black-title uppercase">
            <?php the_title(); ?>
            <span class="title-bg semibold uppercas"><?php the_title(); ?></span>
        </h1>
        <div class="hero-info">
            <div class="info-link"> 
                <?php
                if (have_rows('repeater_link')): ?>
                    <ul class="link-list">
                        <?php
                        while (have_rows('repeater_link')) : the_row();

                            $image = get_sub_field('icona_link');
                            $link = get_sub_field('link');

                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <li class="link-item">
                                    <?php if ($image) : ?>
                                        <div class="image-wrap">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </div>
                                    <?php endif; ?>

                                    <a class="text-body" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                </li>

                        <?php
                            endif;
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
            </div>
            <div class="map-container">
                <?php
                $location = get_field('mappa');
                if ($location): ?>
                    <div class="map">
                        <?php echo $location ?>
                    </div>
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
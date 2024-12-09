<section class="faq">
    <?php
    $faq_title = get_field('titolo_faq');
    $faq_testo = get_field('testo_faq');

    if ($faq_title) : ?>

        <p class="faq-title">
            <?php echo esc_html($faq_title); ?>
        </p>

    <?php endif;
    if ($faq_testo) : ?>

        <p class="faq-title">
            <?php echo $faq_testo ?>
        </p>
    <?php endif; ?>

    <?php
    if (have_rows('repeater_faq')): ?>
        <ul class="faq-list">
            <?php
            while (have_rows('repeater_faq')) : the_row();

                $domanda = get_sub_field('domanda');
                $risposta = get_sub_field('risposta'); ?>

                <li class="faq-item">
                    <p class="domanda">
                        <?php echo esc_html($domanda); ?>
                    </p>
                    <span class="faq-icon">

                    </span>
                    <div class="risposta">
                        <?php echo $risposta ?>
                    </div>
                </li>

            <?php
            endwhile; ?>
        </ul>
    <?php
    endif; ?>

</section>
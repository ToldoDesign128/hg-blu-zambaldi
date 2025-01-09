<section class="faq container">
    <?php
    $faq_title = get_field('titolo_faq');
    $faq_testo = get_field('testo_faq');

    if ($faq_title) : ?>

        <p class="faq-title title-h3 medium black-title uppercase">
            <?php echo esc_html($faq_title); ?>
        </p>

    <?php endif;
    if ($faq_testo) : ?>

        <div class="faq-text text-body">
            <?php echo $faq_testo ?>
        </div>
    <?php endif; ?>

    <?php
    if (have_rows('repeater_faq')): ?>
        <ul class="faq-list">
            <?php
            while (have_rows('repeater_faq')) : the_row();

                $domanda = get_sub_field('domanda');
                $risposta = get_sub_field('risposta'); ?>

                <li class="faq-item">
                    <div class="item-wrap">
                        <p class="domanda">
                            <?php echo esc_html($domanda); ?>
                        </p>
                        <span class="faq-icon">
                            <span class="icon title-h4">+</span>    
                        </span>
                        <div class="risposta">
                            <?php echo $risposta ?>
                        </div>
                    </div>
                </li>

            <?php
            endwhile; ?>
        </ul>
    <?php
    endif; ?>

</section>
<section class="form">

    <?php
    $title = get_field('titolo_form');
    $text = get_field('testo_form');
    $form = get_field('form');

    if ($title) : ?>

        <h5 class="form-title">
            <?php echo esc_html($title); ?>
            <span><?php echo esc_html($title); ?></span>
        </h5>
    <?php endif;
    if ($text) : ?>
        <div class="form-text">
            <?php echo $text; ?>
        </div>
    <?php endif;
    if ($text) : ?>
        <div class="form-content">
            <?php echo $form; ?>
        </div>
    <?php endif; ?>
    
</section>
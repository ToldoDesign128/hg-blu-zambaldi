<section id="formBlock" class="form container">

    <div class="form-wrap">

        <?php
        $title = get_field('titolo_form');
        $text = get_field('testo_form');
        $form = get_field('form');

        if ($title) : ?>

            <h5 class="form-title title-h3 medium uppercase">
                <?php echo esc_html($title); ?>
            </h5>
        <?php endif;
        if ($text) : ?>
            <div class="form-text text-body">
                <?php echo $text; ?>
            </div>
        <?php endif;
        if ($text) : ?>
            <div class="form-content">
                <?php echo $form; ?>
            </div>
        <?php endif; ?>
    </div>

</section>
<!-- Footer -->
<footer>
    <div class="img-bg">
        <svg width="1800" height="389" viewBox="0 0 1800 389" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M235.431 437L310.827 150.815L347.032 282.681H1800V244.782H375.97L308.75 0L235.431 299.424L167.951 94.4865L86.0674 351.339H0V389.238H113.838L168.6 217.397L235.431 437Z" fill="#3C3C47" fill-opacity="0.3" />
        </svg>
    </div>

    <div class="footer-info container">
        <a href="<?php echo home_url(); ?>" class="footer-logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Logo-bianco.svg'; ?>" alt="Logo-Bianco">
        </a>
        <div class="footer-col-1">

            <div>
                <?php
                $nome_azienda = get_field('nome_azienda_footer', 'option');
                if ($nome_azienda) : ?>
                    <p class="azienda title-h5  medium">
                        <?php echo esc_html($nome_azienda); ?>
                    </p>
                <?php endif;
                $indirizzo = get_field('indirizzo_footer', 'option');
                if ($indirizzo):
                    $indirizzo_url = $indirizzo['url'];
                    $indirizzo_title = $indirizzo['title'];
                    $indirizzo_target = $indirizzo['target'] ? $indirizzo['target'] : '_self';
                ?>
                    <a class="indirizzo" href="<?php echo esc_url($indirizzo_url); ?>" target="<?php echo esc_attr($indirizzo_target); ?>"><?php echo esc_html($indirizzo_title); ?></a>
                <?php endif;

                $piva = get_field('piva_footer', 'option');
                if ($piva) : ?>
                    <p class="piva">
                        <?php echo esc_html($piva); ?>
                    </p>
                <?php endif; ?>

            </div>
            <div>
                <?php
                $cu = get_field('codice_univoco_footer', 'option');
                if ($cu) : ?>
                    <p class="cu text-small ">
                        <?php echo esc_html($cu); ?>
                    </p>
                <?php endif;

                $pec = get_field('pec_footer', 'option');
                if ($pec) : ?>
                    <p class="pec text-small ">
                        <?php echo esc_html($pec); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-col-2">
            <div class="tel">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/Phone.svg'; ?>" alt="">
                <div class="tel-box">
                    <?php

                    $tel = get_field('telefono_1_footer', 'option');
                    if ($tel):
                        $tel_url = $tel['url'];
                        $tel_title = $tel['title'];
                        $tel_target = $tel['target'] ? $tel['target'] : '_self';
                    ?>
                        <a class="" href="<?php echo esc_url($tel_url); ?>" target="<?php echo esc_attr($tel_target); ?>"><?php echo esc_html($tel_title); ?></a>
                    <?php endif;

                    $tel_2 = get_field('telefono_2_footer', 'option');
                    if ($tel_2):
                        $tel_2_url = $tel_2['url'];
                        $tel_2_title = $tel_2['title'];
                        $tel_2_target = $tel_2['target'] ? $tel_2['target'] : '_self';
                    ?>
                        <a class="" href="<?php echo esc_url($tel_2_url); ?>" target="<?php echo esc_attr($tel_2_target); ?>"><?php echo esc_html($tel_2_title); ?></a>
                    <?php endif; ?>
                </div>

            </div>

            <div class="mail">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/Mail.svg'; ?>" alt="">
                <div class="mail-box">
                    <?php
                    $mail = get_field('mail_1_footer', 'option');
                    if ($mail):
                        $mail_url = $mail['url'];
                        $mail_title = $mail['title'];
                        $mail_target = $mail['target'] ? $mail['target'] : '_self';
                    ?>
                        <a class="" href="<?php echo esc_url($mail_url); ?>" target="<?php echo esc_attr($mail_target); ?>"><?php echo esc_html($mail_title); ?></a>
                    <?php endif;

                    $mail_2 = get_field('mail_2_footer', 'option');
                    if ($mail_2):
                        $mail_2_url = $mail_2['url'];
                        $mail_2_title = $mail_2['title'];
                        $mail_2_target = $mail_2['target'] ? $mail_2['target'] : '_self';
                    ?>
                        <a class="" href="<?php echo esc_url($mail_2_url); ?>" target="<?php echo esc_attr($mail_2_target); ?>"><?php echo esc_html($mail_2_title); ?></a>
                    <?php endif;

                    $mail_3 = get_field('mail_3_footer', 'option');
                    if ($mail_3):
                        $mail_3_url = $mail_3['url'];
                        $mail_3_title = $mail_3['title'];
                        $mail_3_target = $mail_3['target'] ? $mail_3['target'] : '_self';
                    ?>
                        <a class="" href="<?php echo esc_url($mail_3_url); ?>" target="<?php echo esc_attr($mail_3_target); ?>"><?php echo esc_html($mail_3_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-privacy container">
        <div class="privacy-wrap">
            <?php

            $privacy = get_field('privacy_policy', 'option');
            if ($privacy):
                $privacy_url = $privacy['url'];
                $privacy_title = $privacy['title'];
                $privacy_target = $privacy['target'] ? $privacy['target'] : '_self';
            ?>
                <a class="privacy text-small" href="<?php echo esc_url($privacy_url); ?>" target="<?php echo esc_attr($privacy_target); ?>"><?php echo esc_html($privacy_title); ?></a>
            <?php endif;

            $cookie = get_field('cookie_policy', 'option');
            if ($cookie):
                $cookie_url = $cookie['url'];
                $cookie_title = $cookie['title'];
                $cookie_target = $cookie['target'] ? $cookie['target'] : '_self';
            ?>
                <a class="cookie text-small" href="<?php echo esc_url($cookie_url); ?>" target="<?php echo esc_attr($cookie_target); ?>"><?php echo esc_html($cookie_title); ?></a>
            <?php endif;

            $pref = get_field('modifica_preferenze', 'option');
            if ($pref):
                $pref_url = $pref['url'];
                $pref_title = $pref['title'];
                $pref_target = $pref['target'] ? $pref['target'] : '_self';
            ?>
                <a class="pref text-small" href="<?php echo esc_url($pref_url); ?>" target="<?php echo esc_attr($pref_target); ?>"><?php echo esc_html($pref_title); ?></a>
            <?php endif; ?>
        </div>
        <div class="credits-wrap">
            <?php

            $credits = get_field('credits_footer', 'option');
            if ($credits):
                $credits_url = $credits['url'];
                $credits_title = $credits['title'];
                $credits_target = $credits['target'] ? $credits['target'] : '_self';
            ?>
                <a class="credits text-small" href="<?php echo esc_url($credits_url); ?>" target="<?php echo esc_attr($credits_target); ?>"><?php echo esc_html($credits_title); ?></a>
            <?php endif; ?>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
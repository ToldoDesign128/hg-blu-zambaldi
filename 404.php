<?php
get_header(); ?>
<main class="error">
    <section class="hero-error">
        <h1 class="title title-h1 medium black-title uppercase">
            404
            <span class="title-bg semibold uppercase">
                404
            </span>
        </h1>
        <p class="text">Non siamo riusciti a trovare la pagina che cerchi</p>
        <a class="btn-red" href="<?php echo home_url(); ?>">Torna alla Home</a>
    </section>
</main>
<?php get_footer(); ?>
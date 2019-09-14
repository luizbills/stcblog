<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>STC blog</title>
        <?php wp_head(); ?>
    </head>
    <body class="ms-Fabric">
        <?php get_header(); ?>
        <main class="main">
            <header class="main__header">
                <h1>Jejda!</h1>
                <p>Někde se stala chyba. Tým kočiček na vyřešení problému už usilovně pracuje. Mezitím se koukni na <a href="<?php echo esc_url( home_url( '/' ) ); ?>">hlavní stránku</a>, nebo zkus něco vyhledat.</p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/mslogo.svg"/>
            </header>
            <img class="error--404" src="<?php echo get_theme_file_uri( 'assets/img/cat.svg'); ?>"/>
        </main>
        <?php get_footer(); ?>
    </body>
</html>
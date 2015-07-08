<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php
            if (wp_title('', false)) {
                echo ' :';
            }
            ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header role="banner" class="clear">
                <hgroup>
                    <h1 class="logo">
                        <a href="<?php echo home_url(); ?>">
<?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </hgroup>
                <nav class="nav" role="navigation">
<?php html5blank_nav(); ?>
                </nav>
                <div class="contact">
               <?php get_template_part('partials/social-links');?>
                </div>
            </header>
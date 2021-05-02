<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- <a href="primary" class="skip-link screen-reader-text">
    <?php esc_html_e('Skip to content', 'aurno'); ?>
</a> -->

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php 
            the_custom_logo();
            if(is_front_page() && is_home()):
                ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/'));?>" rel="home">
                            <?php bloginfo('name')?>
                        </a>
                    </h1>
                <?php
            else:
                ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url(home_url('/'));?>" rel="home">
                            <?php bloginfo('name')?>
                        </a>
                    </p>
                <?php
            endif;
            $aurno_description = get_bloginfo('description', 'display');
            if($aurno_description || is_customize_preview()):
                ?>
                    <p class="site-description">
                        <?php echo $aurno_description; ?>
                    </p>
                <?php
            endif;
        ?>
    </div>
    <nav id="site-navigation" class="main-navigation">
        <!-- <button 
        class="menu-toggle" 
        aria-controls = 'main-menu'
        aria-expanded="false">
            <?php esc_html_e('Main Menu', 'aurno')?>
        </button> -->
        <?php wp_nav_menu([
            'theme_location' => 'main-menu',
        ]); ?>
    </nav>
</header>
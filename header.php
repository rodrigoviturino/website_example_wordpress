<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>'/style.css'; ">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>
<body>
    
<header class="header-primary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
        <div class="container-fluid">

            <!-- <a class="navbar-brand" href="index.html">Logo</a> -->
            <?php
                if(has_custom_logo() ) {
                    the_custom_logo();
                } 
            ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                if(has_nav_menu('primary')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'fallback_cb' => false,
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => false
                        )
                    );
                }
            
            ?>        

        </div>
    </nav>
</header>
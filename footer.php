<?php  wp_footer(); ?>

<footer class="footer bg-secondary py-2">
    <div class="container">
        <div class="row align-items-center justify-content-center">
        <?php
                if(has_nav_menu('footer_menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu',
                            'fallback_cb' => false,
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => false
                        )
                    );
                }
            
            ?> 

            <p class="text-center text-white m-0">Rodrigo Viturino &copy; 2020 - Wordpress + Bootstrap</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- <script src="https://unpkg.com/@popperjs/core@2.0.0-rc.2"></script> -->
<!-- end Scripts -->

</body>
</html>
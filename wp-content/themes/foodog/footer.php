</div>

<?php wp_footer() ?>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links navbar -->
                    <h5 class="text-uppercase">categories</h5>

                    <?php wp_nav_menu
                    ([
                        'theme_location'=>'footer',
                        'container'=>false,
                        'menu_class'=> 'navbar-nav mr-auto',
                    ])
                    ?>

                </div>

                <!-- Grid column -->
                <div class="col-md-5 mb-md-0 mb-3">

                    <!-- Links popular posts -->
                    <h5 class="text-uppercase">popular posts</h5>

                    <div class="popular">
                        <?php
                        require_once('loop/loop_popular.php');
                        ?>
                    </div>
                </div>

                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-3">

                </div>

            </div>


        </div>
        <!-- Footer Links -->

        <div class="footer-social text-right">

            <!--Facebook-->
            <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
            <!--Instagram-->
            <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>

        </div>

    </footer>


    <?php wp_footer() ?>
</body>
</html>


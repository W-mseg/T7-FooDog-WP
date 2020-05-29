    </div>
    <!-- Footer -->
    <footer class="page-footer">

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

                    <!-- Content Instagram -->
                    <h5 class="text-uppercase">instagram</h5>

                    <!-- InstagramWidget -->
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/831830" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:80%; "></iframe>
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


</div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">CATEGORIES</h5>

                <?php wp_nav_menu([
                    'theme_location'=>'footer',
                    'container'=>false,
                    'menu_class'=> 'navbar-nav mr-auto',
                ])
                ?>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">POPULAR POSTS</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link post + img Marco </a>
                    </li>
                    <li>
                        <a href="#!">Link post + img Marco</a>
                    </li>
                    <li>
                        <a href="#!">Link post + img Marco</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">INSTAGRAM</h5>
                <p>API insta (or instagram feed plugin?)</p>

            </div>

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-social text-right">

        <!--Facebook-->
        <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
        <!--Twitter-->
        <a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
        <!--Instagram-->
        <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>

        include social medias and homme button > JS?
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<?php wp_footer() ?>
</body>
</html>


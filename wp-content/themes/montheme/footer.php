</div>
    <footer>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul>
                <li>
                    <h2>CATEGORIES</h2>
                    <p>
                        <?php wp_nav_menu([
                            'theme_location'=>'footer',
                            'container'=>false,
                            'menu_class'=> 'navbar-nav mr-auto',
                        ])
                        ?>
                    </p>
                </li>
                <li>
                    <h2>POPULAR POSTS</h2>
                </li>
                <li>
                    <h2>INSTAGRAM</h2>
                </li>
            </ul>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FooDog</title>
    <?php wp_head() ?>
</head>
<body>

    <!--Header Social & search icons-->
    <div class="text-right">
        <!--Facebook-->
        <a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
        <!--Twitter-->
        <a class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
        <!--Instagram-->
        <a class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
        <!--search-->
        <?php get_search_form(); ?>
    </div>

    <!--Logo Foodog-->
    <div class="text-center">
        <img src="http://localhost:8000/wp-content/uploads/2020/05/logo.jpeg" class="img-fluid"  >
    </div>

    <!--Menu Foodog-->
    <nav class="navbar navbar-expand-lg navbar-light ">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu
                ([
                    'theme_location'=>'header',
                    'container'=>false,
                    'menu_class'=> 'navbar-nav mr-auto',

                ])
            ?>
        </div>
    </nav>


    <!--Beginning posts-->
    <div class="container">




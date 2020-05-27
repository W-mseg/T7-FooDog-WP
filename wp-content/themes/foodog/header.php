<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>


<?echo get_search_form()?>

<div class="text-right">
    <!--Facebook-->
    <a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
    <!--Twitter-->
    <a class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
</div>

<div class="text-center">
    <img src="media/logo.JPG" class="img-fluid" >
</div>


<nav class="navbar navbar-expand-lg navbar-light ">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu([
            'theme_location'=>'header',
            'container'=>false,
            'menu_class'=> 'navbar-nav mr-auto',

        ])
        ?>

        <!--
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">NUTRITION <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">WELLNESS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LIFESTYLE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">COMMUNITY</a>
            </li>
        </ul>
        -->
    </div>
</nav>

<div class="container">




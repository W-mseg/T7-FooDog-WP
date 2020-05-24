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




<?echo get_search_form()?>

<img src="http://localhost:8000/wp-content/uploads/2020/05/logo-1.jpeg">

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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




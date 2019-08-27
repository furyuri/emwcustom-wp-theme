<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    
</head>
 
<body <?php body_class(); ?>>
 
<nav class="nav navbar-default navbar-fixed-top" id="main-nav">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.essentialmassageandwellness.com"> 
                <img src=<?php echo "\"" . get_template_directory_uri() . "/images/emw-logo2.svg" . "\"" . " alt=\"Essential Massage & Wellness\"" . " id=\"emwLogo\""; ?>>
            </a>
        </div>
            
        <div class="collapse navbar-collapse" id="navbar-collapse-1">     
                    <?php
                    //Populate Menu consisting of UL and LI based off of WP Menu
                    wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'menu_class' => 'nav navbar-nav navbar-right',  
                        'container' => false
                    ) ); 
                    ?>
        </div>
    </div>
</nav>
 

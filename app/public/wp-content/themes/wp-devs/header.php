<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<? bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- this will make sure all scripts are loaded in the head. css as well -->
    <?php wp_head(); ?>
</head>
<!-- hover over any function to see what it does! thank you intellisense! -->
<body <? body_class() ?>>
<div id='page' class="site">
<header>
    <!--  -->
<section class="top-bar">
    <div class="container">
        <div class="logo">
            logo
        </div>
        <div class="searchbox">search</div>
    </div>
    </section>
    <section class="menu-area">
        <div class="container">
        <nav class="main-menu">
            <button class="check-button">
                <div class="menu-icon">
                    <!-- type .bar$*3 and you will get all the bars set up in that multiple! -->
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>

        
                </div>
            </button>
            <!-- this will map through each menu item we designated through the admin file -->
            <!-- the depth is how many sub menus can be in the nav... in this case it can have one dropdown -->
            <?php wp_nav_menu( array('theme_location' => 'wp_devs_main_menu', "depth" => 2)); ?>
         
        </nav>
        </div>
    </section>

</header>
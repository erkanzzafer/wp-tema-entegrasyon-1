<!DOCTYPE HTML>
<html lang="en">
<head>
        <title><?php bloginfo('name'); ?> <?php wp_title();?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

       

        
<?php wp_head(); ?>
</head>
<body>

<header>  
        <div class="container">
                <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">ORDER: +34 685 778 8892</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

<?php 
        wp_nav_menu(
        array(
        'theme_location' => 'ust-menu',
        'container'=>'ul',
        'menu_id' =>'main-menu',
        'menu_class' => 'main-menu font-mountainsre'
        ));
?>

               

                <div class="clearfix"></div>
        </div><!-- container -->
</header>

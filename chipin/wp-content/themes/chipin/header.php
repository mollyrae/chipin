<?php

    ini_set('display_errors', 'on');

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php if(is_pod_page('start')) {?>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js"></script>
        <?php } ?>

    </head>
    <body>

        <div class="wrapper">

            <div class="login-hide">

                <?php login_with_ajax(); ?>

            </div>

            <nav class="main">

                <div class="nav-control">
                    <a href="#nav"><img src="<?php bloginfo('template_url') ?>/img/nav-toggle.png" alt="nav-icon" /> </a> <!-- anchor -->
                </div>

                <a href="<?php echo get_bloginfo('url'); ?>/index"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo"></a>
                <ul class="clearfix">
                    <li><a href="<?php echo get_bloginfo('url'); ?>/index">Home</a></li>
                    
                        <?php if(is_user_logged_in()){ ?>

                            <?php $current_user = wp_get_current_user(); ?>
                            <li><a href="<?php echo get_bloginfo('url'); ?>/user/<?php echo $current_user->user_login ?>"><?php echo $current_user->user_login ?>'s Profile</a></li>

                            <li><a href="<?php echo get_bloginfo('url'); ?>/start">Start a Project</a></li>

                        <?php }else{ ?>

                            <li><a href="#" class="toggle">User Profile</a></li>

                            <li><a href="#" class="toggle">Start a Project</a></li>

                        <?php }; ?>


                    <li><a href="<?php echo get_bloginfo('url'); ?>/browse">Browse</a></li>

                    <li><a class="toggle" href="#">Login/Logout</a></li>

                    <li><a href="http://localhost:8888/chipin/wp-login.php?action=register" class="lwa-links-register-inline toggle">Register</a></li>
                </ul>
            </nav>
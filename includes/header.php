<?php
    
    $rootPath = '/elevate/';

    $includePath = $_SERVER['DOCUMENT_ROOT'];
    $includePath .= "/elevate/includes/";
    include $includePath . 'dbcon.php';
    
    $defaultDesc = "Elevate provides stunning web design, effective branding and user experience serivices in Glasgow, Scotland. Giving you the most stylish and up to date websites. Glasgow Web design. Low cost web design, graphic design and branding";
    $defaultTitle = "Elevate | Web Design - Branding - UX & UI | Glasgow";

    if(isset($pageTitle)) {
        $pageTitle = $pageTitle . " | ";
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>
            <?php if(isset($pageTitle)) { echo $pageTitle; } echo $defaultTitle; ?>
        </title>
        <meta name="description" content="<?php if(isset($pageDesc)) { echo $pageDesc; } else { echo $defaultDesc; } ?>">
        <meta property="og:image" content="http://www.elisweb.co.uk/blog/images/me-mask.png" />
        <meta property="og:description" content="<?php if(isset($pageDesc)) { echo $pageDesc; } else { echo $defaultDesc; } ?>" />
        <meta property="og:url" content="http://www.elisweb.co.uk" />
        <meta property="og:title" content="<?php if(isset($pageTitle)) { echo $pageTitle; } echo $defaultTitle; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo $rootPath; ?>images/logo.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $rootPath; ?>images/logo.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $rootPath; ?>images/logo.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $rootPath; ?>images/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
        <!-- Animation CSS -->
        <link href="<?php echo $rootPath; ?>css/animate.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo $rootPath; ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- Custom CSS -->
        <link href="<?php echo $rootPath; ?>css/main.css" rel="stylesheet">
        <link href="<?php echo $rootPath; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet"> </head>

    <body>
        <nav>
            <ul class="list-unstyled main-menu">
                <!--Include your navigation here-->
                <li class="text-right nav-close"><a href="#" id="nav-close"><i class="fa fa-times-thin fa-2x" aria-hidden="true"></i></a></li>
                <li class='navLogo'>
                    <a href="/elevate/"><img src='<?php echo $rootPath; ?>images/logo-black.png' alt='Elevate' /></a>
                </li>
                <li class='dropdown'><a href="#">Services &nbsp;</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="<?php echo $rootPath; ?>services/">All Services</a></li>
                        <li class="sub-nav"><a href="<?php echo $rootPath; ?>services/web-design/">Web Design</a></li>
                        <li class="sub-nav"><a href="<?php echo $rootPath; ?>services/graphic-design/">Graphic Design</a></li>
                        <li class="sub-nav"><a href="<?php echo $rootPath; ?>services/marketing/">Marketing</a></li>
                        <li class="sub-nav"><a href="<?php echo $rootPath; ?>services/ux-ui/">UX & UI</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $rootPath; ?>our-work">Our Work</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="navbar">
            <div class="navbar-header"> <a id="nav-expander" class="nav-expander"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a> </div>
        </div>
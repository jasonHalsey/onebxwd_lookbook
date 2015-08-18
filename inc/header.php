<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>One Bxwd</title>
        <meta name="description" content="ONE BXWD’s main purpose is to bring an innovative and comfortable wardrobe to the boundless cross generational male. Using a refined approach by combining performance fabrics with a polished sportswear mind set.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheets/screen.css">
        
        <script src="//use.typekit.net/vvq3khi.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        

        <script src="js/instafeed.min.js"></script>
        <script async src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


         
    </head>
    <body class="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <div class="main_logo">
                <img src="images/onebxwd_brand_white.svg" />
            </div>
            <div class="sliding-panel-button icon-menu"></div>

            <nav class="js-menu sliding-panel-content">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="download.php" target="_blank">wholesale</a></li>

                <?php 
                    $pageName = basename($_SERVER['PHP_SELF'], ".php");

                    if ($pageName == "index") {
                        print "<li><a class='insta' href='#instagram'>Instagram</a></li>";
                    }                                       
                ?> 


                <li><a href="contact.php">Contact</a></li>
              </ul>
              <div class="nav_logo">
                <img src="images/onebxwd_brand_white.svg" />
              </div>
            </nav>

            <div class="js-menu-screen sliding-panel-fade-screen"></div>

        </div>
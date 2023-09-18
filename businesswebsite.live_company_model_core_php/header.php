<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="<?php echo (isset($desc) && $desc!='')?$desc: CommonHelper::$siteName. ' is a design and development firm focused on Information, Interface Design and development.'; ?>">
    <meta name="keywords" content="website development company, software development company, mobile app development company, IT services company, web design company, web design agency, iOS app development, android application development" />
    <meta property="og:url"  content="<?php echo CommonHelper::$siteUrl; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="<?php echo CommonHelper::$siteName; ?>" />
    <meta property="og:title" content="LET'S TRANSFORM YOUR IDEAS INTO A REALITY | <?php echo CommonHelper::$siteName; ?>" />
    <meta property="og:description" content="<?php echo CommonHelper::$siteName; ?> is a design and development firm focused on Information, Interface Design and development." />
    <meta property="og:image" content="assets/images/businesswebsite-logo-banner.jpg?scrape=true" />
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <!--====== Magnific Popup CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->        
    <!--====== Slick CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/slick.css"> -->        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .navLogo{
        width:200px!important;
        height:50px!important;
    }
    .footerSiteName {
        color: white;
    }
    .headerSiteName {
        font-size: 24px;
        font-weight: 600;
    }
    .headerSiteName{
        color: white;
    }
    .sticky a.headerSiteName{
        color: #222;
    }
    </style>    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170845583-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-170845583-1');
    </script>

</head>
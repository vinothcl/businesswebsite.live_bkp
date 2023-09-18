<!-- <div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     -->
    <header class="header-area">
        <div class="navbar-area <?php echo $script?'':'sticky'?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand headerSiteName" href="index.php">
                                <!-- <img class="navLogo" src="assets/images/logo.png" alt="Logo"> -->
                                <?php echo CommonHelper::$siteName; ?>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item <?php echo $pageName=='home'?'active':'' ?> ">
                                        <a class="page-scroll" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item <?php echo $pageName=='about'?'active':'' ?>">
                                        <a class="page-scroll" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item <?php echo $pageName=='services'?'active':'' ?>">
                                        <a class="page-scroll" href="services.php">Services</a>
                                    </li>                                    
                                    <li class="nav-item <?php echo $pageName=='sroducts'?'active':'' ?>">
                                        <a class="page-scroll" href="products.php">Portfolio</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" href="mailto:<?php echo CommonHelper::$siteContactEmail; ?>" style="color: white;">Contact Us</a>

                                <!-- <a class="main-btn" data-scroll-nav="0" href="contact-us.html">Contact Us</a> -->
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
    </header>
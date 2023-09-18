<?php

class CommonHelper {
	public static $linkColor = '#ffc324';
	public static $siteName = 'BusinessWebsite.live';
	public static $siteUrl = 'https://www.businesswebsite.live/';
	public static $siteLinkedInUrl = 'https://www.linkedin.com/company/businesswebsite-live/';
	public static $siteFbUrl = 'https://www.facebook.com/businesswebsite.live';	
	public static $siteContactEmail = 'clvinoth@gmail.com';
	public static $siteNameWithoutExtentionCamelCase = 'BusinessWebsite';
	public static $siteNameWithoutExtentionNonCamelCase = 'Businesswebsite';

	public static function siteDisplay($title, $content, $desc='', $pageName='', $script=''){
		?>
		<!doctype html>
		<html class="no-js" lang="en">
			<?php include('header.php'); ?>
			<body>    
			        <?php
			        	include('nav.php');
			        	echo $content;
			        	include('footer.php');
			        	echo "<script>".$script."</script>";
			        ?>       
			</body>
		</html>
		<?php
	}
	public static function services() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Our Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-items services-color-1 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni-layout"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Web Design" href="web-design.php"><h5 class="title" style="color:'.$linkColor.'">Web Design</h5></a>
			                            <p class="text">' . self::$siteName . ' give our heart to make your website design unique, device friendly responsive and reflect the vision and mission of your business visually.</p>
			                        </div>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
			                    <div class="services-items services-color-1 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni-vector"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Web Development" href="web-development.php"><h5 class="title" style="color:'.$linkColor.'">Web Development</h5></a>
			                            <p class="text">With our rich experience, expertise in various technologies and wide spread customer base across various industries are able to provide the best and appropriate solution to serve the purpose that fits to your business requirement. We can do whatever you as a client want to include in your website.</p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-3 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni lni-android"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Mobile Apps Development" href="mobile-applications-development.php"><h5 class="title" style="color:'.$linkColor.'">Mobile Apps Development</h5></a>
			                            <p class="text">' . self::$siteName . ' have expertise to develop robust and user friendly Mobile Apps for Android, iOS and Windows phone users.</p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">                            
			                    <div class="services-items services-color-3 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni-zoom-in"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="SEO" href="seo.php"><h5 class="title" style="color:'.$linkColor.'">SEO</h5></a>
			                            <p class="text">' . self::$siteName . ' dedicates its time, efforts experience and knowledge to bring our clients websites to the first page of Google and other popular search engine results.</p>
			                        </div>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni-users"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Digital Marketing" href="digital-marketing.php"><h5 class="title" style="color:'.$linkColor.'">Digital Marketing</h5></a>
			                                <p class="text">' . self::$siteName . ' do below related services<br/>
			                                Social Media Marketing & Content Marketing<br/>
			                                – Facebook Fan Page<br/>
			                                - Linkedin Accounts<br/>
			                                - Twitter Accounts<br/>
			                                - Instagram Accounts<br/>
			                                - Youtube Channels<br/>
			                                - Content Creation<br/>
			                                - Content Promotion
			                                </p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            <div class="col-xs-12 col-sm-6 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-icon">
			                            <i class="lni-blackboard"></i>
			                        </div>
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Quality Assurance" href="quality-assurance.php"><h5 class="title" style="color:'.$linkColor.'">Quality Assurance</h5></a>
			                            <p class="text">Our Quality Assurance (QA) and testing methodology is built upon three cornerstones: Domain, Technology, and Process/Methodology.</p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function products() {
		return '<section id="products" class="project-masonry-area pt-115 pb-120">
			<div class="container">
			    <div class="row no-gutters">
			        <div class="col-sm-12">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-shape"></div>
			                <div class="services-separator"></div>                            
			                <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                <h1 class="title">Our Portfolio</h5>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			    </div>
			    <div class="row no-gutters">
			    	<div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="evnzon.com" href="https://www.evnzon.com/" target="_blank"><img alt="evnzon logo" class="img-thumbnail" src="assets/images/evnzon-logo.png"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="evnzon.com" href="https://www.evnzon.com/" target="_blank">www.evnzon.com</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			        <div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="sreevidyacolleges.com" href="https://www.sreevidyacolleges.com/" target="_blank"><img alt="sreevidyacolleges logo" class="img-thumbnail" src="assets/images/sreevidyacolleges-logo.png"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="sreevidyacolleges.com" href="https://www.sreevidyacolleges.com/" target="_blank">www.sreevidyacolleges.com</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			        <div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="mssap.in" href="https://www.mssap.in/" target="_blank"><img alt="mssap logo" class="img-thumbnail" src="assets/images/mssap-logo.png"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="mssap.in" href="https://www.mssap.in/" target="_blank">www.mssap.in</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			        <div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="Bloggify.in" href="http://www.bloggify.in" target="_blank"><img alt="bloggify logo" class="img-thumbnail" src="assets/images/bloggify-logo.png"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="Bloggify.in" href="http://www.bloggify.in" target="_blank">Bloggify.in</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			        <div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="BlogLead.org" href="http://www.bloglead.org" target="_blank"><img alt="BlogLead logo" class="img-thumbnail" src="assets/images/bloglead-logo.png"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="BlogLead.org" href="http://www.bloglead.org" target="_blank">BlogLead.org</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			        <div class="col-xs-12 col-sm-4 p-3">
			            <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                <div class="services-items services-color-1 d-sm-flex">
			                    <div class="services-content media-body" style="max-width: 100%;">
			                    	<a title="Laraphp.com" href="http://www.laraphp.com" target="_blank"><img alt="laraphp logo" class="img-thumbnail" src="assets/images/laraphp-logo.jpg"></a>
			                        <h5 class="title">
			                        <br>
			                        	<a title="Laraphp.com" href="http://www.laraphp.com" target="_blank">Laraphp.com</a>
			                        </h5>			                                                
			                    </div>
			                </div> <!-- services items -->
			            </div> <!-- single services -->
			        </div>
			    </div>
			</div> <!-- container -->
			</section>';
	}
	public static function about() {
		return '<section id="about" class="about-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">WELCOME</h6>
                        <h1 class="title"><span>Know </span> More About.</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img alt="' . self::$siteName . ' about" src="assets/images/about.jpg" alt="">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h1 class="title">Learn Little <br> More About Us <br> and Industry.</h3>
                        <ul class="about-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">' . self::$siteName . ' is a Web and Mobile App development company, specialized in delivering quality, cost effective, user friendly and result-oriented web designing, website development, mobile app development, e-commerce and online marketing (SEO and SEM) solutions for any sized client globally. Our experience professional, creative and expert designing and development team guided by customer oriented approach helps our client to get the ROI for their digital investments.
                        <br> <br> We have delivered innovative and unique digital designing and development solutions of varying complexities to customers all over the world. Satisfaction of our clients has been our top most priority since our inception as a website and mobile app design and development company.</p>
                        <div class="about-counter pt-20">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-counter counter-color-1 mt-30 d-flex">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span>4</span></span>
                                            <p class="text">Products</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-counter counter-color-2 mt-30 d-flex">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span>1.5L</span>+</span>
                                            <p class="text">Registered Users</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>';
	}
	public static function indexSlider(){
		return '<div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">'."LET'S TRANSFORM YOUR IDEAS INTO A REALITY".'</h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">' . self::$siteName . ' is a design and development firm focused on Information, Interface Design and development.</p>                            
                            <div class="header-play wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <!-- <a title="' . self::$siteName . '" class="play-btn" href="https://rebrand.ly/explore-ud">Purchase Now <i class="lni-cart-full"></i></a> -->
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img alt="' . self::$siteName . ' web development services" src="assets/images/hero-image.png">
                </div>
            </div> <!-- header hero image -->

            <div class="header-shape">
                <img alt="' . self::$siteName . ' web development services shape" src="assets/images/shape/header-shape.png">
            </div>
        </div> <!-- header hero -->
        ';
	}
	public static function DigitalMarketingServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Digital Marketing Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' digital marketing services" src="assets/images/businesswebsite-digital-marketing-services.png" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Digital Marketing" href="digital-marketing.php"><h5 class="title" style="color:'.$linkColor.'">Digital Marketing</h5></a>
											<p class="text">Today’s new media is Digital media and like the print and visual media any business has to make its presence felt in the Digital/New Media too. Digital media means Internet and Mobile phones.</p>
											<p class="text">Only a passionate marketing and branding team can help to reach to the targeted audience in the Digital Media. So any business house needs a passionate team to reach out to the target audience in the Digital media.</p>
											<p class="text">' . self::$siteName . ' do below related services<br/>
												Social Media Marketing & Content Marketing<br/>
													– Facebook Fan Page<br/>
													- Linkedin Accounts<br/>
													- Twitter Accounts<br/>
													- Instagram Accounts<br/>
													- Youtube Channels<br/>
													- Content Creation<br/>
													- Content Promotion
											</p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function MobileAppsDevelopmentServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Mobile Apps Development Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' mobile apps development services" src="assets/images/businesswebsite-mobile-app-development-services.jpg" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Mobile Apps Development" href="mobile-applications-development.php"><h5 class="title" style="color:'.$linkColor.'">Mobile Apps Development</h5></a>
										<p class="text">World is changing fastly. Smart phones are becoming order of the day. Even the yesterday generations have strarted to use smart phones and Mobile Apps more comfortably.</p>
										<p class="text">Catching up with the fast paced changes in the Digital Space is a must and ' . self::$siteName . ' helps you not only to stay in the race effectively but also lead the race. We have expertise to develop robust and user friendly Mobile Apps for Android, iOS and Windows phone users.</p>
			                        </div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function QualityAssuranceServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Quality Assurance Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' quality assurance services" src="assets/images/businesswebsite-quality-assurance-services.jpg" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Quality Assurance" href="quality-assurance.php"><h5 class="title" style="color:'.$linkColor.'">Quality Assurance</h5></a>
										<p class="text">Our Quality Assurance (QA) and testing methodology is built upon three cornerstones: Domain, Technology, and Process/Methodology.</p>
										<p class="text">' . self::$siteName . ' do below related services<br/>
													- Functionality Testing </br>
													- System Testing </br>
													- Security Testing </br>
													- Compatibility Testing </br>
													- Usability Testing </br>
													- Localization Testing </br>
													- Performance Testing </br>
													- Test Automation </br>
											</p>
									</div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function SEOServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">SEO Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' SEO services" src="assets/images/businesswebsite-search-engine-optimization-services-SEO-services.png" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="SEO" href="seo.php"><h5 class="title" style="color:'.$linkColor.'">SEO</h5></a>
										<p class="text">Search Engine Optimisation is the process of bringing your business website to the top of the popular search engine results. Today Google, Bing are the most popular search engines across world.
										Google is the most popular word of mouth in the digital arena which spreads faster to take any business in any category across all geographical location.</p>

										<p class="text">Our SEO team at ' . self::$siteName . ' dedicates its time, efforts experience and knowledge to bring our clients websites to the first page of Google and other popular search engine results. In todays digital world reaching the first page results in popular search engines is like getting a featured column in any popular magazine or advertising in a premier slot in a popular TV across globe.</p>

										<p class="text">We follow Whitehat SEO techniques and thus ensure your website is not blacklisted and once there at the top stays there.</p>
									</div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function WebDesignServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Web Design Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			            <div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' web design services " src="assets/images/businesswebsite-web-design-services.jpg" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Web Design" href="web-design.php"><h5 class="title" style="color:'.$linkColor.'">Web Design</h5></a>
										<p class="text">Website has become the face or identity of your business globally. The size of your business doesn’t matter but the visual impact necessary for the first impression is created by the design of your website.</p>

										<p class="text">We from ' . self::$siteName . ' give our heart to make your website design unique, device friendly responsive and reflect the vision and mission of your business visually.</p>

										<p class="text">Our UI and UX team take clues from you the main stake holder of your business and create designs to reach and impress your prospective customers – the visitors who is the most important stake holder of your business.</p>	
									</div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function WebDevelopmentServices() {
		$linkColor = self::$linkColor;
		return '<section id="service" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Web Development Services</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			        	<div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' web development services" src="assets/images/businesswebsite-web-development-services.jpg" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">
			                        <div class="services-content media-body" style="max-width: 100%;">
			                            <a title="Web Development" href="web-development.php"><h5 class="title" style="color:'.$linkColor.'">Web Development</h5></a>
										<p class="text">Websites have become the face of any business today. Much happens in the online space when it comes to the business world. Starting from visitor engagement, selling products online, data collection, knowing your customers, providing only relevant information and this goes on.</p>

										<p class="text">We at ' . self::$siteName . ' with our rich experience, expertise in various technologies and wide spread customer base across various industries are able to provide the best and appropriate solution to serve the purpose that fits to your business requirement. We can do whatever you as a client want to include in your website.</p>

										<p class="text">We combine our rich UI and UX capabilities with our expert technical capability to make your online presence felt effectively and comfortable by your website visitors.</p>
									</div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	public static function SiteMap() {
		$linkColor = self::$linkColor;
		return '<section id="SiteMap" class="service-area pt-90">
			<div class="container">
			    <div class="service">
			        <div class="row no-gutters">
			            <div class="col-sm-12">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			                    <div class="services-shape"></div>
			                    <div class="services-separator"></div>                            
			                    <div class="services-items services-color-1 d-sm-flex justify-content-center"> 
			                    <h1 class="title">Site Map</h5>
			                    </div> <!-- services items -->
			                </div> <!-- single services -->
			            </div>
			        </div>
			        <div class="row no-gutters">
			        	<div class="col-sm-4 p-3">
			        		<img alt="' . self::$siteName . ' site map" src="assets/images/businesswebsite-sitemap.png" class="img-responsive">
			        	</div>
			            <div class="col-sm-8 p-3">
			                <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			                    <div class="services-items services-color-2 d-sm-flex">			                        
									<div class="services-content media-body" style="max-width: 100%;">
										- <a title="Home" href="index.php" style="color:'.$linkColor.'"">Home</a></br>
										- <a title="About" href="about.php" style="color:'.$linkColor.'"">About</a></br>
										- <a title="Services" href="services.php" style="color:'.$linkColor.'"">Services</a></br>
										- <a title="Products" href="products.php" style="color:'.$linkColor.'"">Products</a></br>
										- <a title="Web Design" href="web-design.php" style="color:'.$linkColor.'"">Web Design</a></br>
										- <a title="Web Development" href="web-development.php" style="color:'.$linkColor.'"">Web Development</a></br>
										- <a title="Mobile Apps Development" href="mobile-applications-development.php" style="color:'.$linkColor.'"">Mobile Apps Development</a></br>
										- <a title="SEO" href="seo.php" style="color:'.$linkColor.'"">SEO</a></br>
										- <a title="Digital Marketing" href="digital-marketing.php" style="color:'.$linkColor.'"">Digital Marketing</a></br>
										- <a title="Quality Assurance" href="quality-assurance.php" style="color:'.$linkColor.'"">Quality Assurance</a></br>
										- <a title="Site Map" href="sitemap.php" style="color:'.$linkColor.'"">Site Map</a></br>										
									</div>
			                    </div> <!-- single services -->
			                </div> <!-- single services -->
			            </div>
			            
			        </div> <!-- row -->
			    </div> <!-- service -->
			</div> <!-- container -->
			</section>';
	}
	
	

}
<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - SEO Services";
    $desc = CommonHelper::$siteName." follow Whitehat SEO techniques and thus ensure your website is not blacklisted and once there at the top stays there.";
    $content = CommonHelper::SEOServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
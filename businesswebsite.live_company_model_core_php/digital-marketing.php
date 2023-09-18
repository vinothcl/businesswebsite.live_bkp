<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Digital Marketing Services";
    $desc = CommonHelper::$siteName." do Facebook, Linkedin, Twitter, Instagram Marketing and Content Marketing, Content Creation, Content Promotion.";
    $content = CommonHelper::DigitalMarketingServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Web Design Services";
    $desc = CommonHelper::$siteName." give our heart to make your website design unique, responsive and reflect the vision and mission of your business visually.";
    $content = CommonHelper::WebDesignServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Site Map";
    $content = CommonHelper::SiteMap();
    CommonHelper::siteDisplay($title, $content);
?>
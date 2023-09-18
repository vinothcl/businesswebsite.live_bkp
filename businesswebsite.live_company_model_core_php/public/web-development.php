<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Web Development Services";
    $desc = CommonHelper::$siteName." combine our rich UI and UX capabilities with our expert technical capability to make your online presence felt effectively and comfortable.";
    $content = CommonHelper::WebDevelopmentServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
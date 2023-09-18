<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Mobile Apps Development Services";
    $desc = CommonHelper::$siteName." have expertise to develop robust and user friendly Mobile Apps for Android, iOS and Windows phone users.";
    $content = CommonHelper::MobileAppsDevelopmentServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
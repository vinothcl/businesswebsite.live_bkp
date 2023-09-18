<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - About";
    $desc = CommonHelper::$siteName." is a Web and Mobile App development company specialized in delivering quality, cost effective, user friendly and result-oriented web designing.";
    $content = CommonHelper::about();
    CommonHelper::siteDisplay($title, $content, $desc, 'about');
?>
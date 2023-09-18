<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Services";
    $desc = CommonHelper::$siteName." provides Web Design, Web Development, Mobile Apps Development, SEO, Digital Marketing, Quality Assurance services.";
    $content = CommonHelper::services();
    CommonHelper::siteDisplay($title, $content, $desc, 'services');
?>


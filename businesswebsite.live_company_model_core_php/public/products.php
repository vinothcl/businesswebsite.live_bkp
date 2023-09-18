<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Portfolio";
    $desc = CommonHelper::$siteName." have free portfolio like Listicle.biz, Bloggify.in, BlogLead.org, Laraphp.com for global users.";
    $content = CommonHelper::products();
    CommonHelper::siteDisplay($title, $content, $desc, 'portfolio');
?>
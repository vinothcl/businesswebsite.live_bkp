<?php
    include('CommonHelper.php');
    $siteName = CommonHelper::$siteName;
    $title = $siteName. " - Quality Assurance Services";
    $desc = CommonHelper::$siteName." do Functionality, System, Security, Compatibility, Usability, Localization, Performance,  Automation Testing services.";
    $content = CommonHelper::QualityAssuranceServices();
    CommonHelper::siteDisplay($title, $content, $desc);
?>
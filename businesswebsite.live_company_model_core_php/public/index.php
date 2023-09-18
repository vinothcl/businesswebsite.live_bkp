<?php
    include('CommonHelper.php');
    $title = CommonHelper::$siteName;
    $desc = "";
    $content = '';
    $content .= CommonHelper::indexSlider();
    $content .= CommonHelper::about();
    $content .= CommonHelper::services();
    $content .= CommonHelper::products();
    $pageName = 'home';
    $script = "$(function() {
                     $(window).on('scroll', function(event) {    
                        var scroll = $(window).scrollTop();
                        if (scroll < 20) {
                            $('.navbar-area').removeClass('sticky');
                        } else{
                            $('.navbar-area').addClass('sticky');
                        }
                    }); 
                });";
    CommonHelper::siteDisplay($title, $content, $desc, $pageName, $script);
?>


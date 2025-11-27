<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>



    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.png" sizes="any">

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="UI UX Design Company">
    <meta property="og:description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
    <meta property="og:url" content="https://mixdesign.dev/themeforest/rayo">
    <meta property="og:image" content="https://mixdesign.dev/themeforest/rayo/img/og-image.jpg">
    <!-- Facebook Metadata End -->
  

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FAF7F6">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#161616">
    <meta name="msapplication-navbutton-color" content="#161616">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Custom Browser Color End -->
    
    <?php wp_head(); ?>

  </head>

  <body>

      <?php include "inc/header-content.php"; ?>
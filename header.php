<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="ja">
  <title>
    <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
  </title>
  <meta name="title" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <!-- Add Favicon & WebClip -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicons/manifest.json">
  <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicons/safari-pinned-tab.svg" color="">
  <meta name="theme-color" content="">
  <!-- Add Favicon & WebClip End. -->
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Default css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
  <!-- Font Awesome JS -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fontawesome-all.min.js"></script>
  <!-- Core Js Flie -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/core.min.js"></script>
  <?php if (has_action('wp_head', '_admin_bar_bump_cb')) {
    remove_action('wp_head', '_admin_bar_bump_cb');
} wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <p>header</p>
  </header>

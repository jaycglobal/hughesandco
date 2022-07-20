<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- <link href="http://fonts.cdnfonts.com/css/gotham-book" rel="stylesheet">
  <link href="http://fonts.cdnfonts.com/css/evangelina" rel="stylesheet"> -->




  <?php wp_head(); ?>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


<label for="Mobile menu open">
  <div id="menu-activator" class="menu-activator">
    <input type="checkbox" class="sr-hide" name="Mobile menu open">
    <span class="line line-1"></span>
    <span class="line line-2"></span>
    <span class="line line-3"></span>
</div>
</label>



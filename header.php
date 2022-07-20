<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link href="http://fonts.cdnfonts.com/css/gotham-book" rel="stylesheet">
  <!-- <link href="http://fonts.cdnfonts.com/css/evangelina" rel="stylesheet"> -->


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>




  <div id="menu-activate" class="menu-activator menu--1" data-aos="fade-right"  data-aos-easing="ease-in-out" data-aos-anchor="#hero">

    <label>
      <input type="checkbox">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="30"></circle>
        <path class="line--1 line--debug" d="M0 40h62c13 0 6 28-4 18L35 35"></path>
        <path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35"></path>
        <path class="line--2 line--debug" d="M0 50h70"></path>
        <path class="line--2" d="M0 50h70"></path>
        <path class="line--3 line--debug" d="M0 60h62c13 0 6-28-4-18L35 65"></path>
        <path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65"></path>
      </svg>
    </label>
  </div>
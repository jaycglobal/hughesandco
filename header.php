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

<?php if(is_front_page()) : ?>
  <label for="Mobile menu open">
    <div id="menu-activator" class="menu-activator">
      <input type="checkbox" class="sr-hide" name="Mobile menu open">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </div>
  </label>

<?php else : ?>
  <a href="<?php echo home_url();?>" id="to-home">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path style="fill:#ffffff" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" /></svg>
  </a>
<?php endif; ?>



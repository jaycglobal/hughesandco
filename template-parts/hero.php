<?php
$large_bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
$small_bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<style>
#hero .hero-img {
  background-image: url(<?php echo $large_bg_image; ?>);
}

@media screen and (max-width: 768px) {
  #hero .hero-img {
    background-image: url(<?= $small_bg_image; ?>);
  }
}
</style>

<div id="hero">
  <div class="hero-img kenburns"></div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 col-xl-4">
        <div class="hero-content">
          <div class="page-title" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-anchor="#hero">
              <?php
              if (is_front_page()) {
                echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/logo.svg');
              } else {
                echo "<h1 class='jumbo'>".get_the_title()."</h1>";
              }
              ?>
          </div>
          <p class="hero-excerpt" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-anchor="#hero">
            <?php 
            if (is_front_page()) {
               echo "Hughes & Co offer full-scope PR communications and marketing services across the superyacht sector. "; 
            } else {
              echo get_the_excerpt();
            } 
            ?>
          
          </p>
        </div>
      </div>
    </div>
  </div>
  <a href="#section-1" class="gbc-scroll">

    <svg class="next-section-scroll  pulsate-bck" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
      <g id="Group_53" data-name="Group 53" transform="translate(-1772 -949)">
        <g id="Group_51" data-name="Group 51" transform="translate(1837.24 975.932) rotate(90)">
          <line id="Line_4" data-name="Line 4" x2="26.136" y2="26.136" transform="translate(0 0)" fill="none" stroke="#fff" stroke-width="5" />
          <line id="Line_5" data-name="Line 5" y1="26.136" x2="26.136" transform="translate(0 24.146)" fill="none" stroke="#fff" stroke-width="5" />
        </g>
        <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(1772 949)" fill="none" stroke="#fff" stroke-width="5">
          <circle cx="40" cy="40" r="40" stroke="none" />
          <circle cx="40" cy="40" r="37.5" fill="none" />
        </g>
      </g>
    </svg>
  </a>


</div>


<script>

  var mainHero = document.getElementById('hero'),
  mainHeroScrollOffset = mainHero.offsetHeight / 2
 
  function update_hero_height() {
    mainHeroScrollOffset = mainHero.offsetHeight / 2;
  }

  function activate_hero(){
    if (window.pageYOffset < mainHeroScrollOffset) {
     mainHero.classList.add('page-top');
     document.body.classList.add('page-top');
    } else {
     mainHero.classList.remove('page-top');
     document.body.classList.remove('page-top');

    }
  }

document.addEventListener('DOMContentLoaded', activate_hero);
window.addEventListener('scroll', activate_hero);
window.addEventListener('resize', throttle(update_hero_height, 1000))


function throttle(fn, wait) {
  var time = Date.now();
  return function() {
    if ((time + wait - Date.now()) < 0) {
      fn();
      time = Date.now();
    }
  }
}


</script>
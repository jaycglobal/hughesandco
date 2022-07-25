<div class="col-12 col-md-6 col-lg-4 accord" data-accord="<?php echo sanitize_title_with_dashes(get_the_title()); ?>">
  <div class="accord-wrap h-100">

    <p class="accord-title"><?php the_title(); ?></p>

    <svg class="accord-activate" xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50">
      <g id="Group_129" data-name="Group 129" transform="translate(-1115 -5884)">
        <rect id="Rectangle_129" class="vertical" data-name="Rectangle 129" width="5" height="50" rx="2.5" transform="translate(1138 5884)" fill="#fff" />
        <rect id="Rectangle_133" class="horizontal" data-name="Rectangle 133" width="5" height="51" rx="2.5" transform="translate(1115 5912) rotate(-90)" fill="#fff" />
      </g>
    </svg>

    <div class="accord-content">
      <div class="wrap">

        <?php the_content(); ?>
        
      </div>
    </div>
  </div>
</div>
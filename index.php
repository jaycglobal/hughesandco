<?php 
// One page website
// If the user is on any page but 
// homepage then redirect to home
if ( !is_home() || !is_front_page() ) : ?>
    <?php wp_redirect( home_url() ); exit; ?>
<?php endif ?>

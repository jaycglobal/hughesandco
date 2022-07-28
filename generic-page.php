<?php

/*
 * Template Name: Stripped Back Page
 * 
*/

get_header(); ?>


<section class="container" id="section-1">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="jumbo page-title"><?php the_title(); ?></h1>
            <hr>
        </div>
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<script>
    /* Section Scroll */
    let scrollEls = document.getElementsByClassName('gbc-scroll');

    for (let index = 0; index < scrollEls.length; index++) {
        const element = scrollEls[index];

        element.addEventListener('click', function(e) {

            if (document.getElementById('site-menu').classList.contains('open')) {
                openMainMenu();

            }

            let scrollToURL = this.href;
            let scrollToHash = scrollToURL.split('#')[1];
            let scrollToEl = document.getElementById(scrollToHash);

            e.preventDefault();
            window.scroll({
                top: getOffsetTop(scrollToEl),
                left: 0,
                behavior: 'smooth'
            });
        });

    }

    // Custom method for retrieving an elements offset
    const getOffsetTop = element => {
        let offsetTop = 0;
        while (element) {
            offsetTop += element.offsetTop;
            element = element.offsetParent;
        }
        return offsetTop;
    }
</script>
<?php get_footer(); ?>
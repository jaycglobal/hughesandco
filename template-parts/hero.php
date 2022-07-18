<div id="hero" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.jpg)">
  <div class="hero-img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.jpg)"></div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 col-xl-4">
        <div class="hero-content">
          <?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/logo.svg'); ?>

          <p class="hero-excerpt" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-anchor="#hero">Hughes & Co offer full-scope PR communications
            & marketing services across the superyacht sector. </p>
        </div>
      </div>
    </div>
  </div>
  <a href="#section-1" class="gbc-scroll ">

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
  const el = document.querySelector("#hero");
  const box = getBoundingBox(el)
  var totalDistance = 0;
  var oldCursorX, oldCursorY;

  el.addEventListener("mousemove", function(e) {

    var cursorThreshold = 1000;

    if (oldCursorX) totalDistance += Math.sqrt(Math.pow(oldCursorY - e.clientY, 2) + Math.pow(oldCursorX - e.clientX, 2));
    if (totalDistance >= cursorThreshold) {
      console.log("Mouse moved 100px!");
      bgMove(e)
      totalDistance = 0;
    }

    oldCursorX = e.clientX;
    oldCursorY = e.clientY;


    // bgMove(e)
  });

  var bgMoving = false;

  function bgMove(e) {
    const el = document.querySelector("#hero");
    const elBg = el.querySelector(".hero-img");



    let rect = el.getBoundingClientRect();
    let x = e.clientX - rect.left; //x position within the element.
    let y = e.clientY - rect.top; //y position within the element.

    elBg.style.transform = "translate(" + (mousePosFromCenter(e).x) + "%, " + (mousePosFromCenter(e).y) + "%) scale(1)";
    elBg.style.transformOrigin = Math.abs(x) + "px " + Math.abs(y) + "px";



    if (!bgMoving) {
      bgMoving = true;

      setTimeout(function() {
        elBg.style.transform = "translate(" + (mousePosFromCenter(e).x) + "%, " + (mousePosFromCenter(e).y) + "%) scale(1.2)";
        bgMoving = false;

      }, 2000)
    }


    // elBg.style.backgroundPosition = (mousePosFromCenter(e).x) + "% " + (mousePosFromCenter(e).y)  + "% ";

    // elBg.style.backgroundPositionY = (e.offsetY / 50) + 50 + "%";
  }

  function mousePosFromCenter(e) {

    let windowHeight = window.innerHeight
    let windowWidth = window.innerWidth
    let xValue = e.x
    let yValue = e.y

    let mousePosX = (-1 - (xValue / windowWidth) * 2) * 2
    let mousePosY = (1 - (yValue / windowHeight) * 2) * 2

    return {
      x: mousePosX,
      y: mousePosY
    }
  };


  let inactivityTime = function() {
    let time;
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;

    function logout() {
      el.classList.add('moving')

    }

    function resetTimer() {
      el.classList.remove('moving')

      clearTimeout(time);
      time = setTimeout(logout, 2000)
    }
  };

  inactivityTime();


  function throttle(callback, limit) {
    var wait = false; // Initially, we're not waiting
    return function() { // We return a throttled function
      if (!wait) { // If we're not waiting
        callback.call(); // Execute users function
        wait = true; // Prevent future invocations
        setTimeout(function() { // After a period of time
          wait = false; // And allow future invocations
        }, limit);
      }
    }
  }

  function getBoundingBox(element) {
    const box = element.getBoundingClientRect()
    const ret = {}

    // Loops through all DomRect properties.
    // Cannot spread because they're not enumerable.
    for (const prop in box) {
      ret[prop] = box[prop]
    }

    ret.xCenter = (box.left + box.right) / 2
    ret.yCenter = (box.top + box.bottom) / 2

    return ret
  }


  // el.addEventListener("mousemove", (e) => {

  //   // e = Mouse click event.
  //   var rect = e.target.getBoundingClientRect();
  //   var x = e.clientX - rect.left; //x position within the element.
  //   var y = e.clientY - rect.top; //y position within the element.
  //   console.log("Left? : " + (x + (e.target.offsetWidth / 2)) + " ; Top? : " + y + ".");
  // })
</script>
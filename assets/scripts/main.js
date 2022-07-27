document.addEventListener('DOMContentLoaded', function(e) {

  let urlHash = location.hash.replace('#', '');
  console.log(urlHash)

  if (urlHash.length > 0 && urlHash !== 'services-section') {
    e.preventDefault()
    console.log()

    changeHashWithoutScrolling(window.location.hash.replace('#', ''));
    activateAccordLink(window.location.hash.replace('#', ''));
  }

})

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

/* Accordions */
var accordionSection = document.querySelector('.accordion');
var accordions = accordionSection.querySelectorAll('.accord');

var mainAccordion = document.querySelector('.main-accord');
var mainAccordionTitle = mainAccordion.querySelector('.accord-title');
var mainAccordionContent = mainAccordion.querySelector('.accord-content');

for (let i = 0; i < accordions.length; i++) {
  const accord = accordions[i];
  accord.addEventListener('click', loadAccord)

}

var accordLinks = document.querySelectorAll('a[data-accordlink]');

for (let index = 0; index < accordLinks.length; index++) {
  const accordLink = accordLinks[index];

  accordLink.addEventListener('click', function(e) {

    e.preventDefault();

    let serviceName = e.target.dataset.accordlink;

    changeHashWithoutScrolling(serviceName);
    activateAccordLink(serviceName);

  })

}

function loadAccord(clickedEl) {
  if (clickedEl.el instanceof Element || clickedEl.el instanceof HTMLDocument) {
    clickedAccord = clickedEl.el;
  } else {
    clickedAccord = this;
  }

  if (clickedAccord.classList.contains('main-accord')) {
    // Close accordion
    openMainAccordContent();
    location.hash = "services-section"

    setTimeout(function() { accordionSection.classList.toggle('open');
      mainAccordion.classList.toggle('open'); }, 500)
    return;

  } else {
    accordionSection.classList.toggle('open');
    mainAccordion.classList.toggle('open');
    setTimeout(openMainAccordContent, 500)
  }

  // Clicked accordion vars

  clickedAccordTitle = clickedAccord.querySelector('p.accord-title');
  clickedAccordContent = clickedAccord.querySelector('div.accord-content');

  // Set main accordion content
  mainAccordionTitle.innerHTML = clickedAccordTitle.innerHTML;
  mainAccordionContent.innerHTML = clickedAccordContent.innerHTML;

  if (!clickedAccord.classList.contains('viewed')) {
    clickedAccord.classList.add('viewed');

  }

  window.scroll({
    top: getOffsetTop(document.querySelector('section.accordion')),
    left: 0,
    behavior: 'smooth'
  });

}

function activateAccordLink(link) {

  window.scroll({
    top: getOffsetTop(document.querySelector('section.accordion')),
    left: 0,
    behavior: 'smooth'
  });

  if (accordionSection.classList.contains('open')) {
    openMainAccordContent();
    setTimeout(function() { accordionSection.classList.toggle('open');
      mainAccordion.classList.toggle('open'); }, 500)
  }

  if (document.getElementById('site-menu').classList.contains('open')) {
    openMainMenu();

  }

  setTimeout(function() {
    loadAccord({
      el: document.querySelector('.accord[data-accord="' + link + '"]')
    });
  }, 1000)

}

function openMainAccordContent() {
  if (mainAccordionContent.style.maxHeight) {
    mainAccordionContent.style.maxHeight = null;
  } else {
    mainAccordionContent.style.maxHeight = (mainAccordionContent.scrollHeight + 200) + "px";
  }
}

/* Main Menu */
var menuActivators = document.querySelectorAll('.menu-activator');
console.log(menuActivators)
for (let index = 0; index < menuActivators.length; index++) {
  const activator = menuActivators[index];
  activator.addEventListener('click', openMainMenu);

}

function openMainMenu(e) {

  try {
    e.stopPropagation();
    e.preventDefault();
  } catch (error) {

  }

  document.getElementById('site-menu').classList.toggle('open')
  document.body.classList.toggle('open-menu')

  document.getElementById('menu-activator').querySelector('input[type="checkbox"]').checked = !document.getElementById('menu-activator').querySelector('input[type="checkbox"]').checked;
  document.getElementById('menu-activator').classList.toggle('open')
}

function changeHashWithoutScrolling(hash) {
  const id = hash.replace(/^.*#/, "")
  const elem = document.getElementById(id)
  if (elem) {
    elem.id = id + "-tmp"
    window.location.hash = hash
    elem.id = id
  }
}
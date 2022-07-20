document.addEventListener('DOMContentLoaded', function() {



})


/* Section Scroll */
let scrollEls = document.getElementsByClassName('gbc-scroll');

for (let index = 0; index < scrollEls.length; index++) {
  const element = scrollEls[index];

  element.addEventListener('click', function(e) {
   
    let scrollToURL = this.href;
    let scrollToHash  = scrollToURL.split('#')[1];
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
  while(element) {
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

function loadAccord() {


  
  if (this.classList.contains('main-accord')) {
    // Close accordion
    openMainAccordContent();
    setTimeout(function(){ accordionSection.classList.toggle('open'); mainAccordion.classList.toggle('open'); }, 500)
     return;

  } else {
    accordionSection.classList.toggle('open');
    mainAccordion.classList.toggle('open');
    setTimeout(openMainAccordContent, 500)
  }

  // Clicked accordion vars
  let clickedAccord = this,
  clickedAccordTitle = clickedAccord.querySelector('p.accord-title'),
  clickedAccordContent = clickedAccord.querySelector('div.accord-content');

  // Set main accordion content
  mainAccordionTitle.innerHTML = clickedAccordTitle.innerHTML;
  mainAccordionContent.innerHTML = clickedAccordContent.innerHTML;

  if (!clickedAccord.classList.contains('viewed')) {
    clickedAccord.classList.add('viewed');

  }

  if (window.innerWidth <= 1000) {
    window.scroll({
      top: getOffsetTop(document.querySelector('section.accordion')), 
      left: 0, 
      behavior: 'smooth'
    });
  }


}


function openMainAccordContent() {
  if (mainAccordionContent.style.maxHeight) {
    mainAccordionContent.style.maxHeight = null;
  } else {
    mainAccordionContent.style.maxHeight = (mainAccordionContent.scrollHeight + 200) + "px";
  }
}

/* Main Menu */
var menuActivators = document.querySelectorAll('div.menu-activator');
console.log(menuActivators)
for (let index = 0; index < menuActivators.length; index++) {
  const activator = menuActivators[index];
  activator.addEventListener('click', openMainMenu);
  
}

function openMainMenu(e){

    e.stopPropagation();
    e.preventDefault();
  document.getElementById('site-menu').classList.toggle('open')
  this.querySelector('input[type="checkbox"]').checked = !this.querySelector('input[type="checkbox"]').checked;
  this.classList.toggle('open')
  console.log('opening')
}
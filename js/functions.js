( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.service_title').matchHeight();
    $('.matchimg').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});



} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#DB0812",
      "text": "#242624"
    },
    "button": {
      "background": "#000",
      "text": "#DB0812"
    }
  },
  "theme": "edgeless",
  "position": "top",
  "static": false,
  "content": {
    "message": "We use cookies |  Accept by closing or navigate back",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

function openNav() {
  document.getElementById("mySidenav").style.width = "373px";
  // document.getElementById("content").style.marginRight = "373px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  // document.getElementById("content").style.marginRight = "0";
}

var mySwiper = new Swiper('.portfolio_carousel', {
   // Optional parameters
   // direction: 'vertical',
   loop: true,

   // If we need pagination
   pagination: {
     el: '.swiper-pagination',
     clickable: true,
   },

   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
 });

 var swiper2 = new Swiper('.project-gallery', {
   loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-button-next-unique',
        prevEl: '.swiper-button-prev-unique',
      },
    });

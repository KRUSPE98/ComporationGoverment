/*-----------------------------------------------------
    Scroll Menu BG
-------------------------------------------------------*/

/****** START SET ACTIVE BACKGROUND BLACK TO THE NAV-BAR IN SOME CONDITIONS ******/
showWait();
$(window).scroll(function () {
    if ($("#header").offset().top > 50) {
        $("#header").addClass("menu-bg");
    } else {
        var main_route = (window.location.pathname.split("/")[1]);
        if(main_route != 'nosotros'){
            $("#header").removeClass("menu-bg");
        }
    }
});

// alert("Hola");
// SmartWizard initialize
// $('#smartwizard').smartWizard({
//     enableURLhash : false,
//     toolbarSettings: {
//       showNextButton: false, // show/hide a Next button
//       showPreviousButton: false, // show/hide a Previous button
//   }
//   });
// $('#smartwizard').smartWizard({
//     selected: 0,
//     theme: 'default',
//     transitionEffect: 'fade',
//     // showStepURLhash: false,
//     anchorSettings: {
//         anchorClickable: true, // Enable/Disable anchor navigation
//         enableAllAnchors: true, // Activates all anchors clickable all times
//         markDoneStep: true, // add done css
//         enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
//     },
//     toolbarSettings: {
//       showNextButton: false, // show/hide a Next button
//       showPreviousButton: false, // show/hide a Previous button
//   },
// //   useURLhash: false,
//     //lang: { next: 'Next', previous: 'Previous' }
// });


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }


/****** END SET ACTIVE BACKGROUND BLACK TO THE NAV-BAR IN SOME CONDITIONS ******/


/****** START SET ACTIVE NAV-ITEMS IN THE NAV-BAR ******/

$(document).ready(function() {
    var main_route = (window.location.pathname.split("/")[1]);
    if (main_route == '') {
        main_route = 'home';
    }
    if(main_route == 'nosotros'){
        $("#header").addClass("menu-bg");
    }
    $('.nav-item.page_' + main_route).addClass('active');
});

/****** END SET ACTIVE NAV-ITEMS IN THE NAV-BAR ******/

/* Details Lightbox - Magnific Popup */
$('.popup-with-move-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false, /* keep it false to avoid html tag shift with margin-right: 17px */
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
});



/*------------------------------*/
/* Tab Carousel
/*------------------------------*/


$(".tab-carousel").owlCarousel({

    navigation : false, // Show next and prev buttons
    slideSpeed : 400,
    pagination : false,
    singleItem:true,
    autoPlay: true,
    navigation : true,
     navigationText: [
  "<i class='fa fa-angle-left'></i>",
  "<i class='fa fa-angle-right'></i>"
  ] ,


});


/* Preloader */
$(window).on('load', function() {
    hideWait();
});

function hideWait() {
    var preloaderFadeOutTime = 500;
    var preloader = $('.spinner-wrapper');

    setTimeout(function() {
        preloader.fadeOut(preloaderFadeOutTime);
    }, 500);
}

function showWait() {
    var preloader = $('.spinner-wrapper');
    preloader.show();
}

/*------------------------------*/
/*  Scroll to top
/*------------------------------*/

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});

$('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 0);
    return false;
});



var owl = $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: false,
    dots: false,
});

// Botón anterior
$(".custom-prev").on('click', function() {
    owl.trigger('prev.owl.carousel');
});

// Botón siguiente
$(".custom-next").on('click', function() {
    owl.trigger('next.owl.carousel');
});

toastr.options = {
    "closeButton": true,  // Habilita el botón de cierre
    "positionClass": "toast-center",  // Centramos la notificación
    "preventDuplicates": true,
};

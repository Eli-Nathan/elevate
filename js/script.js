var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-950065-32']);
_gaq.push(['_trackPageview']);
(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
$(document).ready(function () {
    $(".navbar li a").click(function (event) {
        $(".navbar-collapse").collapse('hide');
    });
});
window.sr = ScrollReveal({
    reset: true
});
sr.reveal('.workPiece', {
    origin: 'bottom'
    , distance: '200px'
    , delay: 200
    , duration: 600
    , mobile: true,
    reset: false
});
/*sr.reveal('.logoImg', {
    origin: 'top'
    , distance: '200px'
    , delay: 300
    , mobile: true
});
sr.reveal('.eli', {
    origin: 'left'
    , distance: '200px'
    , delay: 300
    , mobile: true
});
sr.reveal('.web', {
    origin: 'right'
    , distance: '200px'
    , delay: 300
    , mobile: true
}); 
sr.reveal('.serv-2', {
    origin: 'top'
    , distance: '200px'
    , delay: 200
    , duration: 600
    , mobile: true,
    reset: false
});
sr.reveal('.serv-3', {
    origin: 'bottom'
    , distance: '200px'
    , delay: 200
    , duration: 600
    , mobile: true,
    reset: false
});
sr.reveal('.serv-4', {
    origin: 'top'
    , distance: '200px'
    , delay: 200
    , duration: 600
    , mobile: true,
    reset: false
});
sr.reveal('.box1', {
    opacity: 0
    , scale: 0
    , delay: 100
    , mobile: true
});
sr.reveal('.box2', {
    opacity: 0
    , scale: 0
    , delay: 200
    , mobile: true
});
sr.reveal('.box3', {
    opacity: 0
    , scale: 0
    , delay: 300
    , mobile: true
});
sr.reveal('.box4', {
    opacity: 0
    , scale: 0
    , delay: 400
    , mobile: true
});
sr.reveal('.box5', {
    opacity: 0
    , scale: 0
    , delay: 500
    , mobile: true
});
sr.reveal('.box6', {
    opacity: 0
    , scale: 0
    , delay: 600
    , mobile: true
});
sr.reveal('.chef', {
    origin: 'left'
    , distance: '500px'
    , delay: 300
    , mobile: true
    , easing: 'ease-in-out'
    , duration: 600
    , reset: false
});
sr.reveal('.george', {
    origin: 'bottom'
    , distance: '700px'
    , delay: 500
    , mobile: true
    , easing: 'ease-in-out'
    , duration: 600
    , reset: false
});
sr.reveal('.about-item-secondary', {
    origin: 'right'
    , distance: '700px'
    , delay: 600
    , mobile: true
    , easing: 'ease-in-out'
    , duration: 600
    , reset: false
});
sr.reveal('.contact-form', {
    origin: 'left'
    , distance: '200px'
    , delay: 200
    , duration: 1000
    , mobile: true
});
sr.reveal('.contact-block-content', {
    origin: 'right'
    , distance: '200px'
    , delay: 200
    , duration: 1000
    , mobile: true
});*/
$(document).ready(function () {
    //Navigation Menu Slider
    $('#nav-expander').on('click', function (e) {
        e.preventDefault(); // Prevent default
        $('body').toggleClass('nav-expanded'); // Give body the class .nav-expanded
    });
    $('#nav-close').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('nav-expanded');
    });
    $(document).click(function (event) {
        if (!$(event.target).closest('.main-menu, #nav-expander').length) {
            if ($('body').hasClass("nav-expanded")) {
                $('body').removeClass('nav-expanded');
            }
        }
    })
    // Initialize navgoco with default options
    $(".main-menu").navgoco({
        caret: '<span class="caret"></span>',
        accordion: false,
        openClass: 'open',
        save: true,
        cookie: {
            name: 'navgoco',
            expires: false,
            path: '/'
        },
        slide: {
            duration: 300,
            easing: 'swing'
        }
    });
});
$(document).on('click', '.mobileServices .btn', function () {
    console.log("Clicked");
    var caret = $(this).find(".caret-icon");
    caret.toggleClass('fa-caret-up fa-caret-down');
})
$(document).ready(function () {
    // to fade in on page load
    $("body").css("display", "none");
    $("body").fadeIn(750);
    // to fade out before redirect
    $('a:not[href*=#]:not([href=#myCarousel])').click(function (e) {
        redirect = $(this).attr('href');
        e.preventDefault();
        $('body').fadeOut(900, function () {
            document.location.href = redirect
        });
    });
});

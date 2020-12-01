const bars = document.querySelector('.bars')
const nav = document.querySelector('.nav-links')
const navLinks = document.querySelectorAll('.nav-links li')
const navBarLogo = document.querySelector('.logo a')
const navBar = document.querySelector('nav')
const navLinkA = document.querySelectorAll('.nav-links li a')
const address = document.querySelector('.contact-city')
const taxControlButtons = document.querySelector('.taxonomy-control-container-buttons')

const navSlide = () => {
    bars.addEventListener('click', () => {
        //Toggle Nav
        nav.classList.toggle('nav-active')

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards  ${index / 7 + .5}s`
            }
        })

        //Monbile logo comes in
        navBarLogo.classList.toggle('navBarLogoReize')

        //Bars Animation
        bars.classList.toggle('toggle')
        if ($('.what-we-do-page').length > 0) {
        //Get rid of taxonomy
        taxControlButtons.classList.toggle('no-tax')
        }
    })

}
navSlide()

w = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;
var targetWidth = 1200;
if (w >= targetWidth) {
    // When scrolling NavBar changes in Desktop View
    window.onscroll = function () { scrollFunction() };

    scrollFunction = () => {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navBar.classList.add('style-nav-bar-in')
            navBar.classList.remove('style-nav-bar-out')
            navBarLogo.classList.add('style-logo-in')
            navBarLogo.classList.remove('style-logo-out')

        } else {
            navBar.classList.remove('style-nav-bar-in')
            navBar.classList.add('style-nav-bar-out')
            navBarLogo.classList.remove('style-logo-in')
            navBarLogo.classList.add('style-logo-out')
        }
    }
}

//Boat is moving in
$(function () {
    if ($('.home-page .main-section').length > 0) {
        var anime1 = anime({
            targets: '.main-section-am-cup-boat',
            translateX: [0, '-50vw'],
            easing: 'linear',
            duration: 1000,
            autoplay: false,
        })

        var mainS = $('.home-page .main-section').offset().top
        $(document).on('scroll', function () {

            var scrollTop = $(document).scrollTop()
            var progress = (scrollTop - (mainS - 500)) / 900
            anime1.seek(anime1.duration * progress)
        })
    }


    //Taxonomy
    if ($('.what-we-do-page .taxonomy-control-container .container').length > 0) {
        var mixer = mixitup('.what-we-do-page .taxonomy-control-container .container');
    }
})


//Contact
$(function () {
    $('.face').on('click', function () {
        var sState = $(this).data('state')

        if (sState == 'closed') {
            //open it
            $(this).next().slideDown(400)
            $(this).animate(1000).css('border-bottom', '2px solid rgba(0, 0, 0, 0)')
            sState = $(this).data('state', 'open')
        } else {
            $(this).next().slideUp(600)
            $(this).animate(1000).css('border-bottom', '2px solid rgba(0, 0, 0, 0.5)')
            sState = $(this).data('state', 'closed')
        }
    })
})
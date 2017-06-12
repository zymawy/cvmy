/* global $ , particlesJS , smoothScroll , Typed*/
$(function () {
    'use strict';

    // This Function Count From 0 To Given Number 
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    new WOW().init();
    
    // For Fitting The Text To Be More Nice And Suteable For All Screens
    
    $(".text").fitText(3, {
        minFontSize: '16px',
        maxFontsize: '30px'
    });

    // This For Scrolling 

    $("html").niceScroll({
        cursorcolor: '#3498db',
        cursorwidth: 10,
        cursorborder: "1px solid #ecf0f1",
        hidecursordelay: 500,
        autohidemode: false
    });

    
        // For Smooth Scrolling LOl It's birtty GOod
            smoothScroll.init({
                updateURL: false,
                speed: 2000,
                offset: 100,
            });
        // FancyBox 
    $("[data-fancybox]").fancybox({
		// Options will go here
        margin : [44, 0],
        gutter : 30,
        speed : 330,
        opacity : 'auto',
	});

    // For Loading Screen [ Sipnner ]
    
    $(window).load(function() {
        $("body").css("overflow","auto");
        $(".spinner").fadeOut(1000,function() {
            $(".loading-overlay").addClass("wow bounceOutDown animated");
            $(".loading-overlay").fadeOut(2000);
        });
        $(".loading-overlay").remove();
    });

    // Change The Color Options 
    var colorLi = $(".colorOption li");
    colorLi
    .eq(0).css("backgroundColor","#e74c3c").end()
    .eq(1).css("backgroundColor","#2ecc71").end()
    .eq(2).css("backgroundColor","#3498db").end()
    .eq(3).css("backgroundColor","#f1c40f");
    
    colorLi.click(function() {
        $("link[href*='theme']").attr("href",$(this).attr('data-value'));
       //console.log($(this).attr('data-value'));
    });
    
    
        Typed.new(".loading", {
            strings: ["Loading..."],
            typeSpeed: 100,
            loop: true,
            loopCount: null,
            showCursor: true,
            cursorChar: "|",
        });
    Typed.new(".intro", {
            strings: [
                "مثابر...",
                "استطيع العمل تحت الضغط بأذن الله",
                "اجيد التعامل مع العمل الجماعي",
                "استطيع التكيف بسهولة تام مع طبيعية العمل",
                
            ],
            typeSpeed: 100,
            loop: true,
            loopCount: null,
            showCursor: true,
            cursorChar: "|",
        });
        
            Typed.new(".introEn", {
            strings: [
                "Ready...",
                "I Can Manage My Self To Work With Team",
                "I Have The Abllity To Work Under Prusher",
                " Strugle Man ... ",
                
            ],
            typeSpeed: 100,
            loop: true,
            loopCount: null,
            showCursor: true,
            cursorChar: "|",
        });
    
        $(".introEn").css("color","#FFF");
    // This For Particles Js 
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 10,
                    "density": {
                        "enable": false,
                        "value_area": 50
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "star",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }

    );
});

$(document).ready(function() {
        $('#fileUpload input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $(this).siblings(".apply-label").text(fileName);
    });

    // $(".nav-item").click(() => {
    //     $(this).addClass("active")
    // })


    $("#questions_block .info-box button").click(function() {
        $(this).closest(".info-box").siblings(".info-box").removeClass("box_active");
        $(this).closest(".info-box").toggleClass("box_active");
    });

    $("#sticky-mobile li").click(function() {
        $
        $(this).toggleClass("show");
        $(this).siblings().removeClass("show");
    });
    var count = 0;
    $("#next-button").click(function() {
        var $activeStep = $(".step.active-step");
        var $nrActive = $(".blog_count #clicks .active-number");

        if (count < $(".step").length - 1) {
            count++;
            $activeStep.next().addClass("active-step");
            $activeStep.removeClass("active-step");
            $nrActive.next().addClass("active-number");
            $nrActive.removeClass("active-number");
        }
    });
    var count1 = 0;
    $("#preview-button").click(function() {
        var $activeStep = $(".step.active-step");
        var $nrActive = $(".blog_count #clicks .active-number");
        if (count1 < $(".step").length - 1) {
            count1++;
            $activeStep.removeClass("active-step");
            $activeStep.prev().addClass("active-step");
            $nrActive.removeClass("active-number");
            $nrActive.prev().addClass("active-number");
        }
    });

    $("#moreInfo .show-more").click(function() {
        if ($(this).siblings(".text").hasClass("show-more-height")) {
            $(this).children("span").text("Weniger");
        } else {
            $(this).children("span").text("Zeig mehr");
        }
        $(this).siblings(".text").toggleClass("show-more-height");

    });

    $('div#slider_content .slider_img').slick({
        autoplay: true,
        infinite: true,
        dots: true,
        nextArrow: '<button class="btn_slider-left"><span class="left_arrow"></span></button>',
        prevArrow: '<button class="btn-slider-right"><span class="right_arrow"></span></button>',
    });

    $('.menu__btn').click(function() {
        $(this).toggleClass("cross-active");
    });

    $('.dropdown').click(function() {
        var target_id = $(this).attr('data-toggle');
        $('.dropdown-list').not(target_id).slideUp();
        $(target_id).slideToggle();
        // $('.dropdown-list').not(target_id).parents('li, .icon-tab').removeClass('active');
        // $('.dropdown').not(this).parents(' .icon-tab').removeClass('active');
        $(this).parents('li, .icon-tab').toggleClass('active');
    });

    var x = 0;
    $(".btn_slider-left.slick-arrow").click(function() {
        var $numberActive = $("#clicks .active-number");
        if (x < $("#slider_content .item").length - 1) {
            x++;
            $numberActive.next().addClass("active-number");
            $numberActive.removeClass("active-number");
        }
    });
    var y = 0;
    $(".btn-slider-right.slick-arrow").click(function() {
        var $numberActive = $("#clicks .active-number");
        if (y < $("#slider_content .item").length - 1) {
            y++;
            $numberActive.removeClass("active-number");
            $numberActive.prev().addClass("active-number");
        }
    });

    $(".redHover").hover(
        function() {
            $(this).siblings().removeClass("active_socialIcon");
        },
        function() {
            $(this).siblings(".redHoverActive").addClass("active_socialIcon");
        }
    );

    $('div#slider2_content .slider_img').slick({
        centerMode: true,
        autoplay: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('div#slider2_content1 .slider_img').slick({
        centerMode: true,
        autoplay: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('div#blog-slider .slider_img').slick({
        // centerMode: true,
        autoplay: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },

            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

});


$(document).ready(function() {
    $.fn.multislider = function(data, callback) {
        var $multislider = $(this);
        var $msContent = $multislider.find('.DigiTalent-slider-content');
        var $msRight = $multislider.find('button.DigiTalent-slider-right');
        var $msLeft = $multislider.find('button.DigiTalent-slider-left');
        var $imgFirst = $msContent.find('.item:first');
        if (typeof data === 'string') {
            getStringArgs(data);
            return $multislider;
        } else if (typeof data === 'object' || typeof data === 'undefined') {
            init();
        }
        var $imgLast,
            totalWidth,
            numberVisibleSlides,
            animateDistance,
            animateSlideRight,
            animateSlideLeft,
            defaults,
            settings,
            animateDuration,
            autoSlideInterval;

        function init() {
            minifyContent();
            createSettings();
            saveData();
            selectAnimations();
        }
        $msRight.on('click', animateSlideLeft);
        $msLeft.on('click', animateSlideRight);
        $multislider.on('click', 'DigiTalent-slider-right, DigiTalent-slider-left', resetInterval);
        $(window).on('resize', findItemWidth);

        function pauseAbove() {
            if (window.innerWidth > settings.pauseAbove) { $multislider.addClass('DigiTalent-slider-PAUSE'); }
            $(window).on('resize', function() {
                if (window.innerWidth > settings.pauseAbove) {
                    $multislider.addClass('DigiTalent-slider-PAUSE');
                } else {
                    $multislider.removeClass('DigiTalent-slider-PAUSE');
                }
            });
        }

        function pauseBelow() {
            if (window.innerWidth < settings.pauseBelow) { $multislider.addClass('DigiTalent-slider-PAUSE'); }
            $(window).on('resize', function() {
                if (window.innerWidth < settings.pauseBelow) {
                    $multislider.addClass('DigiTalent-slider-PAUSE');
                } else {
                    $multislider.removeClass('DigiTalent-slider-PAUSE');
                }
            });
        }

        function getStringArgs(str) {
            if (typeof $multislider.data(str) !== 'undefined') {
                $multislider.data(str)();
            } else {
                console.error("Multislider currently only accepts the following methods: next, prev, pause, play");
            }
        }

        function saveData() {
            $multislider.data({
                "pause": function() { $multislider.addClass('DigiTalent-slider-PAUSE'); },
                "unPause": function() { $multislider.removeClass('DigiTalent-slider-PAUSE'); },
                "continuous": function() {
                    $multislider.removeClass('DigiTalent-slider-PAUSE');
                    continuousLeft();
                },
                "next": function() { overRidePause(singleLeft); },
                "nextAll": function() { overRidePause(allLeft); },
                "prev": function() { overRidePause(singleRight); },
                "prevAll": function() { overRidePause(allRight); },
                "settings": settings
            });
        }

        function overRidePause(animation) {
            if ($multislider.hasClass('DigiTalent-slider-PAUSE')) {
                $multislider.removeClass('DigiTalent-slider-PAUSE');
                animation();
                $multislider.addClass('DigiTalent-slider-PAUSE');
            } else {
                animation();
            }
            resetInterval();
        }

        function minifyContent() {
            $msContent.contents().filter(function() {
                return (this.nodeType == 3 && !/\S/.test(this.nodeValue));
            }).remove();
        }

        function createSettings() {
            defaults = settings || {
                continuous: false,
                slideAll: false,
                interval: 2000,
                duration: 500,
                hoverPause: true,
                pauseAbove: null,
                pauseBelow: null
            };

            settings = $.extend({}, defaults, data);

            findItemWidth();
            animateDuration = settings.duration;

            if (settings.hoverPause) { pauseHover(); }
            if (settings.continuous !== true && settings.interval !== 0 && settings.interval !== false && settings.autoSlide !== false) { autoSlide(); }
            if (settings.pauseAbove !== null && typeof settings.pauseAbove === 'number') { pauseAbove(); }
            if (settings.pauseBelow !== null && typeof settings.pauseBelow === 'number') { pauseBelow(); }
        }

        function selectAnimations() {
            if (settings.continuous) {
                settings.autoSlide = false;
                continuousLeft();
            } else if (settings.slideAll) {
                animateSlideRight = $multislider.data('prevAll');
                animateSlideLeft = $multislider.data('nextAll');
            } else {
                animateSlideRight = $multislider.data('prev');
                animateSlideLeft = $multislider.data('next');
            }
        }

        function findItemWidth() {
            reTargetSlides();
            animateDistance = $imgFirst.width();
            var left = parseInt($msContent.find('.item:first').css('padding-left'));
            var right = parseInt($msContent.find('.item:first').css('padding-right'));
            if (left !== 0) { animateDistance += left; }
            if (right !== 0) { animateDistance += right; }
        }

        function autoSlide() {
            autoSlideInterval = setInterval(function() {
                if (!$multislider.hasClass('DigiTalent-slider-PAUSE')) {
                    animateSlideLeft;
                }
            }, settings.interval);
        }

        function resetInterval() {
            if (settings.interval !== 0 && settings.interval !== false && settings.continuous !== true) {
                clearInterval(autoSlideInterval);
                autoSlide();
            }
        }

        function reTargetSlides() {
            $imgFirst = $msContent.find('.item:first');
            $imgLast = $msContent.find('.item:last');
        }

        function isItAnimating(callback) {
            if (!$multislider.hasClass('DigiTalent-slider-animating') &&
                !$multislider.hasClass('DigiTalent-slider-HOVER') &&
                !$multislider.hasClass('DigiTalent-slider-PAUSE')) {
                $multislider.trigger('DigiTalent-slider.before.animate');
                $multislider.addClass('DigiTalent-slider-animating');
                callback();
            }
        }

        function doneAnimating() {
            if ($multislider.hasClass('DigiTalent-slider-animating')) {
                $multislider.removeClass('DigiTalent-slider-animating');
                $multislider.trigger('DigiTalent-slider.after.animate');
            }
        }

        function pauseHover() {
            if (settings.continuous) {
                $msContent.on('mouseover', function() {
                    doneAnimating();
                    $msContent.children('.item:first').stop();
                });
                $msContent.on('mouseout', function() {
                    continuousLeft();
                });
            } else {
                $msContent.on('mouseover', function() {
                    $multislider.addClass('DigiTalent-slider-HOVER');
                });
                $msContent.on('mouseout', function() {
                    $multislider.removeClass('DigiTalent-slider-HOVER');
                });
            }
        }

        function midAnimateResume() {
            animateDuration = settings.duration;
            var currentMargin = parseFloat($msContent.find('.item:first').css("margin-left"));
            var percentageRemaining = 1 - (currentMargin / -(animateDistance - 1));
            animateDuration = percentageRemaining * animateDuration;
        }

        function calcNumSlidesToMove() {
            totalWidth = $msContent.width();
            numberVisibleSlides = Math.floor(totalWidth / animateDistance);
        }

        function continuousLeft() {
            isItAnimating(function() {
                reTargetSlides();
                midAnimateResume();
                $imgFirst.animate({ marginLeft: -(animateDistance + 1) }, {
                    duration: animateDuration,
                    easing: "linear",
                    complete: function() {
                        $imgFirst.insertAfter($imgLast).removeAttr("style");
                        doneAnimating();
                        continuousLeft();
                    }
                });
            });
        }

        function allLeft() {
            isItAnimating(function() {
                reTargetSlides();
                calcNumSlidesToMove();

                var $clonedItemSet = $msContent.children('.item').clone();
                var filteredClones = $clonedItemSet.splice(0, numberVisibleSlides);

                $msContent.append(filteredClones);

                $imgFirst.animate({ marginLeft: -totalWidth }, {
                    duration: animateDuration,
                    easing: "swing",
                    complete: function() {
                        $($msContent.children('.item').splice(0, numberVisibleSlides)).remove();
                        doneAnimating();
                    }
                });
            });
        }

        function allRight() {
            isItAnimating(function() {
                reTargetSlides();
                calcNumSlidesToMove();

                var numberTotalSlides = $msContent.children('.item').length;
                var $clonedItemSet = $msContent.children('.item').clone();
                var filteredClones = $clonedItemSet.splice(numberTotalSlides - numberVisibleSlides, numberTotalSlides);

                $($(filteredClones)[0]).css('margin-left', -totalWidth);
                $msContent.prepend(filteredClones);

                reTargetSlides();

                $imgFirst.animate({
                    marginLeft: 0
                }, {
                    duration: animateDuration,
                    easing: "swing",
                    complete: function() {
                        numberTotalSlides = $msContent.find('.item').length;
                        $($msContent.find('.item').splice(numberTotalSlides - numberVisibleSlides, numberTotalSlides)).remove();
                        $imgFirst.removeAttr('style');
                        doneAnimating();
                    }
                });
            });
        }

        function singleLeft() {
            isItAnimating(function() {
                reTargetSlides();
                $imgFirst.animate({
                    marginLeft: -animateDistance
                }, {
                    duration: animateDuration,
                    easing: "swing",
                    complete: function() {
                        $imgFirst.detach().removeAttr('style').appendTo($msContent);
                        doneAnimating();
                    }
                });
            });
        }

        function singleRight() {
            isItAnimating(function() {
                reTargetSlides();
                $imgLast.css('margin-left', -animateDistance).prependTo($msContent);
                $imgLast.animate({
                    marginLeft: 0
                }, {
                    duration: animateDuration,
                    easing: "swing",
                    complete: function() {
                        $imgLast.removeAttr("style");
                        doneAnimating();
                    }
                });
            });
        }
        return $multislider;
    }
    $('#digiTalentSlider2').multislider({
        interval: 4000,
        slideAll: false,
        duration: 1500
    });

        $(".navbar-nav a").click(function () {
            $(this)
                .addClass("active")
                .siblings()
                .removeClass("active");
    
        });

});


<body class="no-scrollbar text-color-black bg-light">
<div class="page-wrapper">
    <div class="css w-embed">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .header-container {
                pointer-events: none;
            }
        </style>
    </div>
    <div class="_404container">
        <div class="header-container">
            <div class="header">
                <div class="header_text">4</div>
                <div class="header_text">0</div>
                <div class="header_text">4</div>
            </div>
        </div>
        <br><br>
        <div class="_404-footer">
            <div class="footer_text">
                <strong>
                    PAGE NOT FOUND<br/>LET &#x27;S GET YOU BACK TO THE FUN STUFF
                </strong>
            </div>
            <div class="footer_text">
                <a href="/" class="body-link">
                    <strong class="_404txt">Home</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<nav class="nav-bar hide-mobile">
    <div class="navigationwrapper">
        <div class="leftlinks">
            <div class="underline-animation__wrap">
                <a href="/" class="underline-animation w-inline-block">
                    <h2 class="h2-heading">Go Back Home</h2>
                </a>
            </div>
        </div>
        <a href="/" class="site-logo home w-inline-block">

        </a>
        <link rel="prefetch" href="/"/>
        <div class="rightlinks">
            <div class="nav-row">
                <div data-w-id="467fc34f-a54b-d0c3-948f-055b88769e89" class="underline-animation__wrap comingsoon">
                    <a href="javascript:history.go(-1)" class="underline-animation w-inline-block">
                        <h2 class="h2-heading allcaps">Back to Previous Page</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="global-elements">
    <div class="cursor-wrapper">
        <div class="cursor"></div>
    </div>
    <div class="div-block-32">
        <div class="no-scroll-code w-embed">
            <style>
                html {
                    min-height: 100vh;
                }

                .bold {
                    font-weight: 700;
                }

                .bar {
                    background-color: inherit;
                }

                .w-richtext>:first-child {
                    margin-top: 0;
                }

                .w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
                    margin-bottom: 0;
                }

                .underline-animation::after {
                    content: '';
                    position: absolute;
                    width: 100%;
                    transform: scaleX(0);
                    height: 1.3px;
                    bottom: 0;
                    left: 0;
                    background-color: CurrentColor;
                    transform-origin: bottom right;
                    transition: transform 0.25s ease-out;
                }

                .underline-animation:hover::after {
                    transform: scaleX(1);
                    transform-origin: bottom left;
                }

                .no-scrollbar {
                    ::-webkit-font-smoothing: antialiased; ::-webkit--moz-font-smoothing: antialiased; ::-webkit--o-font-smoothing: antialiased; }

                .cursor {
                    pointer-events: none;
                    ::-webkit-mix-blend-mode: difference;}

                /* These classes are never overwritten */
                .hide {
                    display: none !important;
                }

                @media screen and (max-width: 991px) {
                    .hide, .hide-tablet {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 767px) {
                    .hide-mobile-landscape {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 479px) {
                    .hide-mobile {
                        display: none !important;
                    }
                }

                /* Snippet makes all link elements listed below to inherit color from their parent */
                .site-logo, .ContactPara, .h1hero, .h1-mobile, .link-list_underline, .h1-landing, .h1-mono, .h1-sw, .logo_link {
                    color: inherit;
                }

                a {
                    color: currentColor;
                }

                .ContactUs {
                    background-color: CurrentColor;
                }

                /* width */
                ::-webkit-scrollbar {
                    width: 0px;
                }

                /* Track */
                ::-webkit-scrollbar-track {
                    background: #FFF;
                }

                /* Handle */
                ::-webkit-scrollbar-thumb {
                    background: #888;
                }

                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                    background: #555;
                }

                /* custom cursor animation */
                @keyframes blink {
                    0% {
                        opacity: 1;
                    }

                    50% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
                }

                bold {
                    font-weight: 600;
                }
            </style>
        </div>
    </div>
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=641dd1f786b4463bb5e41167" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.prod.website-files.com/641dd1f786b4463bb5e41167/js/dominony.01e6bd39f.js" type="text/javascript"></script>
<!-- Skew Up -->
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.23/bundled/lenis.min.js"></script>
<!--- Splide JS import --->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!--- Importer Splide JS Autoscroll--->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
<!--- Lenis --->
<script>
    // SMOOTH SCROLL
    let lenis;
    if (Webflow.env("editor") === undefined) {
        lenis = new Lenis({
            lerp: 0.1,
            wheelMultiplier: 0.7,
            gestureOrientation: "vertical",
            normalizeWheel: false,
            smoothTouch: false
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }
    $("[data-lenis-start]").on("click", function() {
        lenis.start();
    });
    $("[data-lenis-stop]").on("click", function() {
        lenis.stop();
    });
    $("[data-lenis-toggle]").on("click", function() {
        $(this).toggleClass("stop-scroll");
        if ($(this).hasClass("stop-scroll")) {
            lenis.stop();
        } else {
            lenis.start();
        }
    });
</script>
<script>
    /**
      * Skew up
      */
    let addAnimation = function() {
        $(".skew-up").each(function(index) {
            const text = new SplitType($(this),{
                types: "lines, words",
                lineClass: "word-line"
            });
            let textInstance = $(this);
            let line = textInstance.find(".word-line");
            let word = line.find(".word");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: textInstance,
                    start: "top 85%",
                    end: "top 85%",
                    onComplete: function() {
                        $(textInstance).removeClass("skew-up");
                    }
                }
            });
            tl.set(textInstance, {
                opacity: 1
            }).from(word, {
                y: "100%",
                skewX: "-6",
                duration: 2,
                stagger: 0.03,
                ease: "expo.out"
            });
        });
    };
    addAnimation();
    window.addEventListener("resize", function(event) {
        if ($(window).width() >= 992) {
            addAnimation();
        }
    });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
            const MENU_BUTTON_SELECTOR = '[fs-hacks-element="menu-button"]';
            const menuBtns = document.querySelectorAll(MENU_BUTTON_SELECTOR);

            menuBtns.forEach((menuBtn)=>{
                    menuBtn.addEventListener('click', ()=>{
                            // Allow hash to be set by adding small delay
                            setTimeout(removeHash);
                        }
                    );
                }
            );
        }
    );

    /**
      * Remove the hash from the URL.
      */
    function removeHash() {
        history.replaceState(null, document.title, `${window.location.origin}${window.location.pathname}${window.location.search}`);
    }
</script>
<script src="https://min30327.github.io/luxy.js/dist/js/luxy.js"></script>
<script charset="utf-8">
    var isMobile = /iPhone|iPad|Android/i.test(navigator.userAgent);
    if (!isMobile) {
        luxy.init({
            wrapper: '#smoothscroll',
            wrapperSpeed: 0.065,

        });
    }
</script>
<script>
    var $cursor = $('.cursor');
    function moveCursor(e) {
        $cursor.css({
            "top": e.pageY,
            "left": e.pageX
        });
    }
    $(window).on('mousemove', moveCursor);
</script>
<noscript>
    <style>
        html {
            opacity: 1;
        }
    </style>
</noscript>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script>

    gsap.from(".navbar", 1.6, {
        opacity: 0,
        y: 60,
        ease: Expo.easeInOut,
        delay: 2.4,
    });

    gsap.from(".header_text", 1.5, {
        top: "-100vh",
        ease: "bounce.out",
        delay: 1,
        stagger: 0.2,
    });

    gsap.to(".footer_text", 0.4, {
        y: -40,
        ease: Expo.easeInOut,
        delay: 2.4,
    });
</script>
</body>
</html>

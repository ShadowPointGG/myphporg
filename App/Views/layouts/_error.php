<!DOCTYPE html>
<!-- Last Published: Thu Jun 13 2024 14:37:45 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="%%PUBLISH_URL_REPLACEMENT%%" data-wf-page="646e55ad3cbb69eaa25ec1ac" data-wf-site="641dd1f786b4463bb5e41167">
<head>
    <meta charset="utf-8"/>
    <title><?= $config['app']['app_name'] . ' - ' . $this->title; ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="https://cdn.prod.website-files.com/641dd1f786b4463bb5e41167/css/dominony.0255227cf.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Changa One:400,400italic", "Work Sans:regular,500,600,700"]
            }
        });
    </script>
    <script type="text/javascript">
        !function(o, c) {
            var n = c.documentElement
                , t = " w-mod-";
            n.className += t + "js",
            ("ontouchstart"in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://cdn.prod.website-files.com/641dd1f786b4463bb5e41167/6421c71c5e00f72eb23c7e32_dominony-site-icon.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="https://cdn.prod.website-files.com/641dd1f786b4463bb5e41167/6421c6f258b97321a1d4cd06_domino-site-icon.png" rel="apple-touch-icon"/>
    <!--- Splide JS styles --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide-core.min.css" integrity="sha512-cSogJ0h5p3lhb//GYQRKsQAiwRku2tKOw/Rgvba47vg0+iOFrQ94iQbmAvRPF5+qkF8+gT7XBct233jFg1cBaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script async src="https://app.humblytics.com/hmbl.min.js?id=edbd07a"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- smoothscroll -->
    <style>
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }
    </style>
    <!-- endsmoothscroll -->
    <!-- Avoid FOUC -->
    <style>
        html {
            opacity: 0;
            transition: opacity 2s ease-out;
        }

        html.webflow-loaded {
            opacity: 1;
        }
    </style>
    <script>
        var Webflow = Webflow || [];
        Webflow.push(function() {
            $('html').addClass('webflow-loaded')
        });
    </script>
    <style>
        .word-line {
            overflow: hidden;
        }

        .skew-up {
            opacity: 0;
        }

        .cursor {
            mix-blend-mode: difference;
            pointer-events: none;
        }

        ::-moz-selection {
            /* Firefox */
            color: #ffffff;
            background: #1e1e1e;
        }

        ::selection {
            color: #ffffff;
            background: #1e1e1e;
        }
    </style>
</head>

<?php include $view_file?>
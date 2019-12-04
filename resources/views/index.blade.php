<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Yoichi Kaneko's Portfolio Page</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ '/favicon-16x16.png' }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="portfolio, developer, php, freelance"/>
    <meta name="description" content="金子陽一のポートフォリオページ"/>

    {{Html::style('css/nivo-slider.css')}}
    {{Html::style('css/jquery.qtip.css')}}
    {{Html::style('css/jquery.captify.css')}}
    {{Html::style('css/jquery.jScrollPane.css')}}
    {{Html::style('css/fancybox/jquery.fancybox.css')}}
    {{Html::style('css/fancybox/helpers/jquery.fancybox-buttons.css')}}
    {{Html::style('css/base.css')}}
    {{Html::style('css/page.css')}}

    {{Html::style('css/responsive/width-0-959.css', ['media' => 'screen and (min-width:0px) and (max-width:959px)'])}}
    {{Html::style('css/responsive/width-0-767.css', ['media' => 'screen and (min-width:0px) and (max-width:767px)'])}}
    {{Html::style('css/responsive/width-480-959.css', ['media' => 'screen and (min-width:480px) and (max-width:959px)'])}}

    {{Html::style('css/responsive/width-768-959.css', ['media' => 'screen and (min-width:768px) and (max-width:959px)'])}}
    {{Html::style('css/responsive/width-480-767.css', ['media' => 'screen and (min-width:480px) and (max-width:767px)'])}}
    {{Html::style('css/responsive/width-0-479.css', ['media' => 'screen and (min-width:0px) and (max-width:479px)'])}}

    {{Html::script('js/vendors.js')}}
    {{Html::script('js/jquery-migrate.min.js')}}
    {{Html::script('js/jquery.easing.js')}}
    {{Html::script('js/jquery.isotope.js')}}
    {{Html::script('js/jquery.captify.js')}}
    {{Html::script('js/jquery.blockUI.js')}}
    {{Html::script('js/jquery.qtip.min.js')}}
    {{Html::script('js/jquery.ba-bqq.min.js')}}
    {{Html::script('js/jquery.jScrollPane.js')}}
    {{Html::script('js/jquery.mousewheel.min.js')}}
    {{Html::script('js/jquery.nivo.slider.pack.js')}}
    {{Html::script('js/jquery.infieldlabel.min.js')}}
    {{Html::script('js/jquery.carouFredSel.packed.js')}}

    {{Html::script('js/jquery.fancybox.js')}}
    {{Html::script('js/jquery.fancybox-media.js')}}
    {{Html::script('js/jquery.fancybox-buttons.js')}}

    {{Html::script('js/script.js')}}
    {{Html::script('js/cascade.js')}}
@if ($is_production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143010188-1"></script>
        <script>
            const analytics_code = 'UA-143010188-1';
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', analytics_code);
        </script>
    @else
        <script>
            const analytics_code = null;
        </script>
    @endif
</head>

<body class="background-carbon">

<!-- Header -->
<div class="header-wrapper">

    <div class="header main box-center clear-fix">

        <div class="layout-4060 clear-fix">

            <div class="layout-4060-left">
                <h1><a href="#!main">Yoichi Kaneko</a></h1>
                <h5><a href="#!main">freelance web developer</a></h5>
            </div>

            <div class="layout-4060-right">
                <ul class="no-list header-menu clear-fix">
                    <li class="header-menu-mail"><a href="mailto:kaneko@webstudio-wanderlust.voyage">kaneko@webstudio-wanderlust.voyage</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>
<!-- /Header -->


<!-- Content -->
<div class="content main box-center">

    <!-- Cascade -->
    <div class="cascade preloader">

        <!-- Box menu -->
        <ul class="cascade-menu">
            <li id="tab-1" class="lime-info">
                <a href="#!about">
                    <span class="title">About</span>
                    <span class="subtitle">About Me</span>
                </a>
            </li>
            <li id="tab-2" class="green-lightbulb">
                <a href="#!portfolio">
                    <span class="title">Portfolio</span>
                    <span class="subtitle">My Works</span>
                </a>
            </li>
            <li id="tab-3" class="orange-document">
                <a href="#!resume">
                    <span class="title">Resume</span>
                    <span class="subtitle">Personal Profile</span>
                </a>
            </li>
            <li id="tab-4" class="turquoise-arrow">
                <a href="#!private">
                    <span class="title">My Private</span>
                    <span class="subtitle">Free time</span>
                </a>
            </li>
        </ul>
        <!-- /Box menu -->

        <!-- Window -->
        <div class="cascade-window">

            <!-- Close bar -->
            <div class="cascade-window-close-bar">
                <a href="#!main"></a>
            </div>
            <!-- /Close bar -->

            <!-- Page content -->
            <div class="cascade-window-content">
                <div class="cascade-page clear-fix"></div>
            </div>
            <!-- /Page content -->

            <!-- Footer -->
            <div class="cascade-window-footer"></div>
            <!-- /Footer -->

        </div>
        <!-- /Window -->

        <!-- Navigation -->
        <a href="#" class="cascade-navigation cascade-navigation-prev"></a>
        <a href="#" class="cascade-navigation cascade-navigation-next"></a>
        <a href="#" class="cascade-navigation cascade-navigation-slider-prev"></a>
        <a href="#" class="cascade-navigation cascade-navigation-slider-next"></a>
        <!-- /Navigation -->

    </div>
    <!-- /Cascade -->

</div>
<!-- /Content -->


<!-- Footer -->
<div class="footer">
    &nbsp;
</div>
<!-- /Footer -->
{{Html::script('js/page_config.js')}}
<script type="text/javascript">
    $(document).ready(function () {
        $('.cascade').cascade(page, options, request);
    });
</script>

</body>

</html>

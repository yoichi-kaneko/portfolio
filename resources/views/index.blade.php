<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title>Cascade - Personal vCard Template</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="keywords" content="black, clean, creative, curriculum, curriculum vitae, cv, dark, minimalist, personal, personal profile, personal vcard, portfolio, resume, vcard, virtual card"/>
        <meta name="description" content="Cascade is a minimalist personal vCard template based on four vertical menu tabs. The first tab is a typical descriptive about page with slider, the second is a gallery with build-in lightbox, next tab is a personal info page and the last tab is the contact page with working form."/>

        {{Html::style('css/nivo-slider.css')}}
        {{Html::style('css/jquery.qtip.css')}}
        {{Html::style('css/jquery.captify.css')}}
        {{Html::style('css/jquery.jScrollPane.css')}}
        {{Html::style('css/fancybox/jquery.fancybox.css')}}
        {{Html::style('css/fancybox/helpers/jquery.fancybox-buttons.css')}}
        {{Html::style('css/base.css')}}
        {{Html::style('css/page.css')}}

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Share" />

        {{Html::style('css/responsive/width-0-959.css', ['media' => 'screen and (min-width:0px) and (max-width:959px)'])}}
        {{Html::style('css/responsive/width-0-767.css', ['media' => 'screen and (min-width:0px) and (max-width:767px)'])}}
        {{Html::style('css/responsive/width-480-959.css', ['media' => 'screen and (min-width:480px) and (max-width:959px)'])}}

        {{Html::style('css/responsive/width-768-959.css', ['media' => 'screen and (min-width:768px) and (max-width:959px)'])}}
        {{Html::style('css/responsive/width-480-767.css', ['media' => 'screen and (min-width:480px) and (max-width:767px)'])}}
        {{Html::style('css/responsive/width-0-479.css', ['media' => 'screen and (min-width:0px) and (max-width:479px)'])}}

        <script type="text/javascript">
            var mainURL='';
        </script>

        {{Html::script('js/linkify.js')}}
        {{Html::script('js/jquery.min.js')}}
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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

        {{Html::script('js/jquery.fancybox.js')}}
        {{Html::script('js/jquery.fancybox-media.js')}}
        {{Html::script('js/jquery.fancybox-buttons.js')}}

        {{Html::script('js/script.js')}}
        {{Html::script('js/cascade.js')}}

    </head>

    <body class="background-carbon">

        <!-- Header -->
        <div class="header-wrapper">

            <div class="header main box-center clear-fix">

                <div class="layout-4060 clear-fix">

                    <div class="layout-4060-left">
                        <h1><a href="#!main">Anna Brown</a> </h1>
                        <h5><a href="#!main">professional photographer &amp; web developer</a></h5>
                    </div>

                    <div class="layout-4060-right">
                        <ul class="no-list header-menu clear-fix">
                            <li class="header-menu-download"><a href="#">Download my vCard</a></li>
                            <li class="header-menu-phone">1.800.353.252</li>
                            <li class="header-menu-mail"><a href="#">anna.brown@mail.com</a></li>
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
                    <li id="tab-1" class="blue-info">
                        <a href="#!about">
                            <span class="title">About</span>
                            <span class="subtitle">About Me</span>
                        </a>
                    </li>
                    <li id="tab-2" class="lime-camera">
                        <a href="#!portfolio">
                            <span class="title">Portfolio</span>
                            <span class="subtitle">My Works</span>
                        </a>
                    </li>
                    <li id="tab-3" class="yellow-document">
                        <a href="#!resume">
                            <span class="title">Resume</span>
                            <span class="subtitle">Personal Profile</span>
                        </a>
                    </li>
                    <li id="tab-4" class="green-people">
                        <a href="#!private">
                            <span class="title">My Interests</span>
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

            <hr class="footer-line" />

            <div class="main box-center layout-7030 clear-fix">

                <!-- Social icons -->
                <div class="layout-7030-right">

                    <ul class="no-list social-list-1">
                        <li>Connect</li>
                        <li><a href="#" class="social-rss"></a></li>
                        <li><a href="#" class="social-facebook"></a></li>
                        <li><a href="#" class="social-twitter"></a></li>
                        <li><a href="#" class="social-google"></a></li>
                        <li><a href="#" class="social-skype"></a></li>
                    </ul>

                </div>
                <!-- /Social icons -->

            </div>

        </div>
        <!-- /Footer -->
        {{Html::script('js/page_config.js')}}
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('.cascade').cascade(page,options,request);
            });
        </script>

    </body>

</html>
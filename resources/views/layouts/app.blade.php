<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T6S5S3D');</script>
    <!-- End Google Tag Manager -->

{{--    <title>О проекте - компания Новобудови Полтави / Новобудови Полтави</title>--}}
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="robots" content="index, follow">

    {{--<meta name="title" content="О проекте - компания Новобудови Полтави / Новобудови Полтави">
    <meta name="description"
          content="Компания Новобудови Полтави предлагает квартиры в новостройках Полтавы от застройщика без посредников. Новостройки Полтавы">
    <meta name="keywords"
          content="новостройки, новобудовы полтава, новобудови полтава, купить квартиру в Полтаве, квартира полтава">--}}
    {!! SEOMeta::generate() !!}

    <meta name="generator" content="2014г. Скайт. admin@site-poltava.com">


    {{--    <link rel="canonical" href="/o-proekte.html">--}}


    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
    <meta name="google-site-verification" content="Zl__NcL-k2WXP7sAZnib71Au8oylgK_BOIRYuDanQ00">
    <meta name="yandex-verification" content="5753308231dc2ba3">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

    <script src="https://connect.facebook.net/signals/config/281704405839432?v=2.9.28&amp;r=stable" async=""></script>

    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>

    <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap-grid.min.css">


    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/reset.css')}}">

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" id="thickbox-css" href="{{asset('css/thickbox/thickbox.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="colorbox-css" href="{{asset('css/colorbox.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-css"
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap"
          type="text/css" media="all">
    <link rel="stylesheet" id="responsive-css" href="{{asset('css/responsive.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="slide-detail-css" href="{{asset('css/portfolios/slide-detail/style.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="ahortcodes-css" href="{{asset('css/shortcodes.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="contact-form-css" href="{{asset('css/contact_form.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="custom-css" href="{{asset('css/custom.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="menu-top-css" href="{{asset('css/menu-top.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" media="all">
    <link rel="stylesheet" id="header-css" href="{{asset('css/header.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="main-page-portfolio" href="{{asset('css/main-page-portfolio.css')}}"
          type="text/css" media="all">

    <link rel="stylesheet" id="footer" href="{{asset('css/footer.css')}}" type="text/css" media="all">

    <link rel="stylesheet" id="oneproduct" href="{{asset('css/oneproduct.css')}}" type="text/css" media="all">

    <link rel="stylesheet" id="o-proekte" href="{{asset('css/o-proekte.css')}}?v=2" type="text/css" media="all">
    @stack('styles')

    <link rel="stylesheet" id="form-proekte" href="{{asset('css/form.css')}}" type="text/css" media="all">

    <link rel="stylesheet" id="modal-css" href="{{asset('css/modal.css')}}" type="text/css" media="all">

    <link rel="stylesheet" id="modal-css" href="{{asset('css/magnific-popup.css')}}" type="text/css" media="all">

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209042445-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-209042445-1');
    </script>

    <script>
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter34289885 = new Ya.Metrika({
                        id: 34289885,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    })
                } catch (e) {
                }
            })

            var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script'),
                f = function () {
                    n.parentNode.insertBefore(s, n)
                }
            s.type = 'text/javascript'
            s.async = true
            s.src = 'https://mc.yandex.ru/metrika/watch.js'

            if (w.opera == '[object Opera]') {
                d.addEventListener('DOMContentLoaded', f, false)
            } else {
                f()
            }
        })(document, window, 'yandex_metrika_callbacks')
    </script>


</head>

<body class="no_js">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6S5S3D"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
{{--{{dd(changeLang('ru'))}}--}}
<div class="page-wrapper">
    <div class="page-content">
        <div class="menu-top">
            <div class="container container--menu-top">
                <div class="menu-top-inner">
                    <div class="menu-top__logo">
                        <a href="{{localUrl('')}}">
                            <img
{{--                                @if(checkCurrentUrl('/') !== 'current')--}}
{{--                                style="filter: grayscale(1);"--}}
{{--                                @endif--}}
                                src="{{asset('img/menu/menu-top-logo.png')}}">
                        </a>
                    </div>
                    <ul class="menu-top-list">

                        <li class="{{checkCurrentUrl('o-proekte.html')}}">
                            <a class="{{checkCurrentUrl('o-proekte.html')}}" href="{{localUrl('o-proekte.html')}}">
                                <span>{{__('header.about_us')}}</span>
                            </a>
                        </li>
                        <li class="{{checkCurrentUrl('novostrojki-na-karte.html')}}">
                            <a class="{{checkCurrentUrl('novostrojki-na-karte.html')}}"
                               href="{{localUrl('novostrojki-na-karte.html')}}">
                                <span>{{__('header.maps')}}</span>
                            </a>
                        </li>
                        <li class="{{checkCurrentUrl('novostoroyki-poltava-kontakty.html')}}">
                            <a class="{{checkCurrentUrl('novostoroyki-poltava-kontakty.html')}}"
                               href="{{localUrl('novostoroyki-poltava-kontakty.html')}}">
                                <span>{{__('header.contacts')}}</span>
                            </a>
                        </li>
                    </ul>

                    <div class="top-menu__icons">
                        <div class="top-menu__mobile-phone" style="width: 30px;">
                            <a href="tel:(050) 500 - 70 - 31">
                                <img
                                    src="{{asset('img/mobile-menu/phone-call.svg')}}">
                            </a>
                        </div>
                        <div class="top-menu__mobile-hamburger" style="width: 50px;">
                            <img
                                src="{{asset('img/mobile-menu/mobile-menu.svg')}}">
                        </div>
                    </div>

                    <div class="mobile-menu">
                        <ul class="mobile-menu-list">
                            <li class="{{checkCurrentUrl('o-proekte.html')}}">
                                <a class="{{checkCurrentUrl('o-proekte.html')}}"
                                   href="{{localUrl('o-proekte.html')}}">
                                    <span>{{__('header.about_us')}}</span>
                                </a>
                            </li>
                            <li class="{{checkCurrentUrl('novostrojki-na-karte.html')}}">
                                <a class="{{checkCurrentUrl('novostrojki-na-karte.html')}}"
                                   href="{{localUrl('novostrojki-na-karte.html')}}">
                                    <span>{{__('header.maps')}}</span>
                                </a>
                            </li>
                            <li class="{{checkCurrentUrl('novostoroyki-poltava-kontakty.html')}}">
                                <a class="{{checkCurrentUrl('novostoroyki-poltava-kontakty.html')}}"
                                   href="{{localUrl('novostoroyki-poltava-kontakty.html')}}">
                                    <span>{{__('header.contacts')}}</span>
                                </a>
                            </li>
                        </ul>
                        <div class="menu-top__language">
                            <span>
                                @if(app()->getLocale() !== 'ru')
                                    <a href="{{changeLang('ru')}}">Рус</a>
                                @else
                                    Рус
                                @endif
                            </span>
                            <span>
                                  @if(app()->getLocale() !== 'ua')
                                    <a href="{{changeLang('ua')}}">Укр</a>
                                @else
                                    Укр
                                @endif
                            </span>
                        </div>
                        <div class="menu-top__number">
                            <a href="tel:(050) 500 - 70 - 31">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                (050) 500 - 70 - 31</a>
                        </div>
                        <div class="page-footer-links">
                            <a href="https://www.instagram.com/novobud_pl/?hl=ru" target="_blank">
                                <img
                                    src="{{asset('img/footer/instfoot.svg')}}"
                                    alt="instagram">
                            </a>
                            <a href="https://www.facebook.com/novobud.pl.ua/" target="_blank">
                                <img
                                    src="{{asset('img/footer/facebfoot.svg')}}"
                                    alt="facebook">
                            </a>
                        </div>
                    </div>

                    <div class="menu-top__number">
                        <a href="tel:(050) 500 - 70 - 31">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            (050) 500 - 70 - 31</a>
                    </div>

                    <script>
                        const buttonToggle = document.querySelector('.top-menu__mobile-hamburger')
                        const mobileMenu = document.querySelector('div.menu-top > div > div > div.mobile-menu')
                        const menuTop = document.querySelector('div.page-content > div.menu-top')

                        buttonToggle.addEventListener('click', function () {
                            mobileMenu.classList.toggle('opened')
                            if (mobileMenu.classList.contains('opened')) {
                                buttonToggle.innerHTML = '<img src="{{asset('img/mobile-menu/mobile-menu-close.svg')}}">'
                                document.body.style.overflow = 'hidden'
                                menuTop.style.bottom = 0
                            } else {
                                buttonToggle.innerHTML = '<img src="{{asset('img/mobile-menu/mobile-menu.svg')}}">'
                                document.body.style.overflow = 'unset'
                                menuTop.style.bottom = 'unset'
                            }
                        })
                    </script>

                    <div class="menu-top__language">
                        <span>
                            @if(app()->getLocale() !== 'ru')
                                <a href="{{changeLang('ru')}}">Рус</a>
                            @else
                                Рус
                            @endif
                        </span>
                        <span>
                            @if(app()->getLocale() !== 'ua')
                                <a href="{{changeLang('ua')}}">Укр</a>
                            @else
                                Укр
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')
    </div>

    <div class="page-footer">
        <div class="container container--page-footer">
            <div class="page-footer-header">
                <ul class="page-footer-contacts">
                    <li class="page-footer-contacts__item">
                        <i class="fa fa-map" aria-hidden="true"></i>
                        <a href="https://goo.gl/maps/BJa4F15A23wqUBzd6" target="_blank">
                            {{__('footer.address')}}</a>
                    </li>
                    <li class="page-footer-contacts__item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:+380505007031">(050) 500 - 70 -31</a>
                    </li>
                </ul>
                <div class="page-footer-links">
                    <a href="https://www.instagram.com/novobud_pl/?hl=ru" target="_blank">
                        <img src="{{asset('img/footer/instfoot.svg')}}"
                             alt="instagram">
                    </a>
                    <a href="https://www.facebook.com/novobud.pl.ua/" target="_blank">
                        <img src="{{asset('img/footer/facebfoot.svg')}}"
                             alt="facebook">
                    </a>
                </div>
            </div>
            <p class="page-footer__copyright">
                © {{__('footer.info')}} - 2014 - {{now()->format('Y')}}
            </p>
        </div>
    </div>

</div>


{{--Skripst--}}
@include('layouts.scripts')

@include('layouts.modals')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userForms = document.querySelectorAll('form.user-form')
        for (let form of userForms) {
            form.addEventListener('submit', function (e) {
                    e.preventDefault()
                    const action = form.action
                    const method = form.method.toUpperCase()
                    const formValues = jQuery(e.target).serialize()
                    jQuery.ajax({
                        type: method,
                        url: action,
                        data: formValues,
                        success: function () {
                            form.reset()
                            closeAllModals()
                            showModalById('feedback-success')
                            setTimeout(() => {
                                closeModalById('feedback-success')
                            }, 5000)
                        },
                        error: function (err) {
                            const {statusText} = err
                            if (statusText) {
                                alert(statusText)
                            } else {
                                alert('Error')
                            }
                        }
                    })
                }
            )
        }

        const modalCallsButtons = document.querySelectorAll('[data-open-modal]')
        const modalCloseButtons = document.querySelectorAll('[data-close-modal]')

        const showModalById = (id) => {
            const modal = document.querySelector('#' + id)
            if (modal)
                modal.classList.add('active')
        }

        const closeModalById = (id) => {
            const modal = document.querySelector('#' + id)
            if (modal)
                modal.classList.remove('active')
        }
        const closeAllModals = () => {
            const modals = document.querySelectorAll('.ui-modal')
            for (let modal of modals) {
                modal.classList.remove('active')
            }
        }

        for (let callBtn of modalCallsButtons) {
            callBtn.addEventListener('click', function (e) {
                e.preventDefault()
                const modalId = callBtn.dataset.openModal
                showModalById(modalId)
            })
        }

        for (let closeBtn of modalCloseButtons) {
            closeBtn.addEventListener('click', function (e) {
                const modalId = closeBtn.dataset.closeModal
                closeModalById(modalId)
            })
        }

    })
</script>

<div class="yButton bottom right" id="social-fixed-button" href="#" style="z-index: 10000;">

    <div class="absolute-social-links">
        <div class="round-links">
            <a class="round-link" href="#" data-open-modal="feedback-phone">
                <img src="{{asset('img/callButton/call1.svg')}}">
            </a>
            <a class="round-link" href="viber://pa?chatURI=novobudpoltava">
                <img src="{{asset('img/callButton/vibernew.svg')}}">
            </a>
        </div>
    </div>

    <div class="yButtonBackground"></div>
    <div class="yButton__content">
        <div class="yButton__contentIcons">
            <span class="yButton__animate-icon animated">
                    <img src="{{asset('img/callButton/mailround2.svg')}}">
            </span>
            <span class="yButton__animate-icon">
                    <img src="{{asset('img/callButton/callroud2.svg')}}">
            </span>
        </div>
        <span class="yButton__close-icon">
            <img src="{{asset('img/callButton/times2.svg')}}">
        </span>
    </div>
    <div class="yButtonIcon"></div>


</div>

<style>
    #social-fixed-button {
        cursor: pointer;
    }

    .absolute-social-links {

        width: 84px;
        bottom: 0;
        padding-bottom: 90px;
        padding-top: 20px;
        border-radius: 20px 20px 42px 42px;

        position: absolute;
        border: 1px solid #0ba101;
        background-color: rgb(255, 255, 255);
        visibility: hidden;
        opacity: 0;
        transition: all 100ms linear;
    }

    .round-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .round-link {
        cursor: pointer;
        width: 50px;
        height: 50px;
        /*background: #fff;*/
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .round-link:not(:last-child) {
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const duration = 3000
        const icons = document.querySelectorAll('.yButton__animate-icon')

        let firstActive = true
        setInterval(() => {
            const activeIcon = firstActive ? icons[0] : icons[1]
            const needAnimation = firstActive ? icons[1] : icons[0]

            setTimeout(() => {
                activeIcon.classList.remove('animated')
                firstActive = !firstActive

                setTimeout(() => {
                    needAnimation.classList.add('animated')
                }, 800)
            }, 1000)

        }, 3000)

        //
        // for (let i = 0; i < icons.length; i++) {
        //     const timeout = i === 0 ? 0 : duration
        //     if (i === 0) {
        //         setTimeout(() => {
        //             icons[i].classList.remove('animated')
        //         }, duration)
        //     }
        //     setTimeout(() => {
        //         setInterval(() => {
        //             icons[i].classList.toggle('animated')
        //         }, duration)
        //     }, timeout)
        // }

        const socialFixedButton = document.querySelector('#social-fixed-button')
        // const socialFixedLinks = document.querySelector('.absolute-social-links')
        socialFixedButton.addEventListener('click', function () {
            socialFixedButton.classList.toggle('visible')
        })
    })
</script>

<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxTitle" style="float: left;"></div>
                <div id="cboxCurrent" style="float: left;"></div>
                <button id="cboxPrevious"></button>
                <button id="cboxNext"></button>
                <button id="cboxSlideshow"></button>
                <div id="cboxLoadingOverlay" style="float: left;"></div>
                <div id="cboxLoadingGraphic" style="float: left;"></div>
                <button id="cboxClose"></button>
            </div>
            <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
@stack('scripts')
</body>
</html>

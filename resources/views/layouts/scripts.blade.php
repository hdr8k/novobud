<script async src="{{asset('js/jquery.colorbox-min.js')}}"></script>
<script async src="{{asset('js/responsive.js')}}"></script>
<script async src="{{asset('js/mobilemenu.js')}}"></script>
<script async src="{{asset('js/jquery.placeholder.js')}}"></script>
<script async src="{{asset('js/jquery.tipsy.js')}}"></script>
<script async src="{{asset('js/jquery.custom.js')}}"></script>
<script async src="{{asset('js/jquery.inputmask.min.js')}}"></script>
<script async src="{{asset('js/magnific-popup.min.js')}}"></script>
<script async src="{{asset('js/mfp.js')}}"></script>

<script async type="text/javascript" src="https://www.google-analytics.com/analytics.js"></script>
<script async src="https://connect.facebook.net/signals/config/281704405839432?v=2.9.28&amp;r=stable"></script>
<script async src="https://connect.facebook.net/en_US/fbevents.js"></script>
<script async type="text/javascript" src="https://mc.yandex.ru/metrika/watch.js"></script>
<script async src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput-jquery.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

<script>
    jQuery(function () {
        var inputPhone = jQuery('input[name=\'phone\']');
        inputPhone.intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
            nationalMode: false,
            autoHideDialCode: false,
            autoPlaceholder: "aggressive",
            initialCountry: "auto",
            geoIpLookup: function (success, failure) {
                @if(env('APP_ENV') !== 'local')
                jQuery.ajax({
                    url: 'https://ipinfo.io/json',
                    dataType: 'json',
                    data: {
                        token: '{{env('IPINFO_TOKEN')}}'
                    },
                    success: function (data) {
                        var countryCode = data.country || 'ua';
                        success(countryCode);
                    },
                    error: function () {
                        success('ua')
                    }
                });
                @else
                success('ua')
                @endif
            },
            customContainer: 'w-100',
            validation: true
        });

        inputPhone.on("input", function () {
            var phoneInput = jQuery(this);
            var isValid = phoneInput.intlTelInput("isValidNumber");
            var error = phoneInput.intlTelInput("getValidationError");
            if (isValid) {
                phoneInput.removeClass("error");
            } else {
                phoneInput.addClass("error");
            }
        });
    })
    jQuery(document).ready(function ($) {
        function getCookie(name) {
            var matches = document.cookie.match(new RegExp(
                '(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'
            ))
            return matches ? decodeURIComponent(matches[1]) : undefined
        }

        // $('input[name=\'phone\']').inputmask('+38 (099) 999-99-99', {
        //     'onincomplete': function () {
        //         $(this).val('')
        //     }
        // })
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.modal-wrap').length && !$(e.target).closest('.yButton').length) {
                if ($('.modal-window').hasClass('active')) {
                    $('.modal-window').removeClass('active')
                }
                if ($('.modal-window').has('form-send')) {
                    $('.modal-window').removeClass('form-send')
                }
                $('.yButton').fadeIn()
            }

        })
        $('.close-modal').on('click', function (e) {
            $(this).closest('.modal-window').removeClass('active')
            if ($(this).closest('.modal-window').has('form-send')) {
                $(this).closest('.modal-window').removeClass('form-send')
            }

            $('.yButton').fadeIn()
        })

    })


</script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-135975323-1"></script>

<script>
    window.dataLayer = window.dataLayer || []

    function gtag() {
        dataLayer.push(arguments)
    }

    gtag('js', new Date())

    gtag('config', 'UA-135975323-1')
</script>

<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        }
        if (!f._fbq) f._fbq = n
        n.push = n
        n.loaded = !0
        n.version = '2.0'
        n.queue = []
        t = b.createElement(e)
        t.async = !0
        t.src = v
        s = b.getElementsByTagName(e)[0]
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js')
    fbq('init', '281704405839432')
    fbq('track', 'PageView')
</script>

<script src="{{asset('js/feedback.js')}}"></script>


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

<script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/responsive.js')}}"></script>
<script src="{{asset('js/mobilemenu.js')}}"></script>
<script src="{{asset('js/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/jquery.tipsy.js')}}"></script>
<script src="{{asset('js/jquery.custom.js')}}"></script>
<script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/mfp.js')}}"></script>

<script>
    jQuery(document).ready(function ($) {
        function getCookie (name) {
            var matches = document.cookie.match(new RegExp(
                '(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'
            ))
            return matches ? decodeURIComponent(matches[1]) : undefined
        }

        $('input[name=\'phone\']').inputmask('+38 (099) 999-99-99', {
            'onincomplete': function () {
                $(this).val('')
            }
        })
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

    function gtag () {
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

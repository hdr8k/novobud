@extends("layouts.app")

@push('styles')
    <link rel="stylesheet" href="{{asset('css/contacts.css')}}">
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.swiper-container', {
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    init: function (sw) {
                        let offer = document.querySelector('#numberSlides')
                        offer.innerHTML = (sw.activeIndex + 1) + ' - ' + sw.slides.length
                    },
                    slideChangeTransitionEnd: function (sw) {
                        let offer = document.querySelector('#numberSlides')
                        offer.innerHTML = (sw.activeIndex + 1) + ' - ' + sw.slides.length
                    }
                }
            })
        })

    </script>
@endpush

@section("content")
    <div id="content-page" style="">
        <div class="contact-page">
            <section class="contact-header">
                <div class="container container--contact-header">
                    <div class="row">
                        @include('contacts.slider')
                        @include('contacts.info')
                    </div>
                </div>
            </section>
            <section class="footer-section">
                <div class="container container--footer-section">
                    <div class="row">
                        <div class="col-12 col-xl-6 footer-section-map">
                            @include('contacts.map')
                        </div>
                        <div class="col-12 col-xl-6 footer-section-feedback">
                            @include('contacts.form')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

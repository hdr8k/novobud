@php
    /* @var App\Models\House[]|Illuminate\Database\Eloquent\Collection $houses */
    /* @var App\Models\Page $page */
@endphp
<div id="content-page" style="">

    <script>
        jQuery(document).ready(function ($) {
            var qsRegex
            var selectFilters = {}
            var selectFilter
            var $grid = $('.main-page-portfolio-list').isotope({
                itemSelector: '.portfolio-card-wrapper',
                // itemPositionDataEnabled: false,
                layoutMode: 'fitRows',
                filter: function () {
                    var $this = $(this)
                    console.log(selectFilter)
                    var searchResult = qsRegex ? $this.text().match(qsRegex) : true
                    var buttonResult = selectFilter ? $this.is(selectFilter) : true

                    return searchResult && buttonResult
                },
            })

            var $quicksearch = $('.quicksearch').keyup(debounce(function () {
                qsRegex = new RegExp($quicksearch.val(), 'gi')
                loadMore(initShow)
                $grid.isotope()
            }, 200))

            var initShow = 16 //number of items loaded on init & onclick load more button
            var counter = initShow //counter for load more button
            var iso = $grid.data('isotope') // get Isotope instance

            loadMore(initShow) //execute function onload

            function loadMore(toShow) {
                $grid.find('.hidden').removeClass('hidden')

                var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function (item) {
                    return item.element
                })
                $(hiddenElems).addClass('hidden')
                $grid.isotope('layout')

                //when no more to load, hide show more button
                if (hiddenElems.length === 0) {
                    jQuery('#load-more').hide()
                } else {
                    jQuery('#load-more').show()
                }
            }

            //when load more button clicked
            $('#load-more').click(function () {
                if ($('.header-filter').data('clicked')) {
                    counter = initShow
                    $('.header-filter').data('clicked', false)
                } else {
                    counter = counter
                }

                counter = counter + initShow
                const y = window.pageYOffset
                loadMore(counter)
                window.scrollTo(0, y)
            })

            // debounce so filtering doesn't happen every millisecond
            function debounce(fn, threshold) {
                var timeout
                threshold = threshold || 100
                return function debounced() {
                    clearTimeout(timeout)
                    var args = arguments
                    var _this = this

                    function delayed() {
                        fn.apply(_this, args)
                    }

                    timeout = setTimeout(delayed, threshold)
                }
            }

            // flatten object by concatting values
            function concatValues(obj) {
                var value = ''
                for (var prop in obj) {
                    value += obj[prop]
                }
                return value
            }

            $('.header-filter select').change(function () {
                const value = $(this).attr('value')
                const name = $(this).attr('name')

                if (name === 'fncity') {
                    selectFilter = undefined
                    delete selectFilters.fnrayon
                    delete selectFilters.fnprice
                }
                if (!value)
                    delete selectFilters[name]
                else
                    selectFilters[name] = value

                selectFilter = concatValues(selectFilters)

                $grid.isotope()
                loadMore(initShow)
            })
        })
    </script>

    <div class="main-page-portfolio slide-detail detail thumbnails">
        <div class="container container--main-page-portfolio">
            <div class="row main-page-portfolio-list" style="position: relative; height: 1744px;">
                @foreach($houses as $house)
                    @include('buildings.parts.cart', ['house' => $house])
                @endforeach
            </div>
            <button id="load-more" class="show-more__button" style="display: flex;">
                <img src="{{asset('img/down-arrow.svg')}}" alt="">
                {{__('houses/content.title')}}
            </button>
        </div>
    </div>

    <div class="home-page-footer-info">
        <div class="container container--home-page-footer-info">
            <div class="home-page-footer-info__content">
                {!! $page->content !!}
            </div>
            <button class="home-page-footer-info__button">
                {{__('houses/building.read_all')}}
            </button>
        </div>
    </div>
    <script>
        const homePageFooterButton = document.querySelector('.home-page-footer-info__button')
        const homePageFooterInfoContent = document.querySelector('.home-page-footer-info__content')

        homePageFooterButton.addEventListener('click', function () {
            homePageFooterInfoContent.classList.toggle('opened')
            if (homePageFooterInfoContent.classList.contains('opened')) {
                homePageFooterButton.innerHTML = 'Скрыть'
            } else {
                homePageFooterButton.innerHTML = 'Читать полностью'
            }
        })
    </script>


</div>

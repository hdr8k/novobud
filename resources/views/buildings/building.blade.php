@php
    /* @var \App\Models\House $house */
@endphp

@extends('layouts.app')

@section('content')
    <div id="content-page" style="">
        <div class="container container--one-product">
            <div class="row one-product-header">
                <div class="col-12 col-xl-7 gallery-map">
                    <div>
                        <div class="one-product-slider">
                            <div class="one-product-header__status">
                                <div class="one-product-header__background"
                                     style="background-color: {{$house->status_color}}"></div>
                                <span>{{$house->status_text}}</span>
                            </div>

                            <div
                                    class="swiper-container zoom-gallery swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper" id="swiper-wrapper-7e6eba31691cc5c10" aria-live="polite">
                                    {{--                                    <div class="swiper-slide swiper-slide-active"--}}
                                    {{--                                         style="background-image: url({{$house->main_photo_url}}); width: 810px;"--}}
                                    {{--                                         role="group" aria-label="1 / 8">--}}
                                    {{--                                    </div>--}}
                                    <div class="swiper-slide">
                                        <a href="{{$house->main_photo_url}}">
                                            <div class="swiper-slide"
                                                 style="background-image: url({{$house->main_photo_url}});"
                                                 role="group" aria-label="1 / 8">
                                            </div>
                                        </a>
                                    </div>
                                    @foreach($house->photoSliders as $photoSlider)
                                        <div class="swiper-slide">
                                            <a href="{{$photoSlider->url}}">
                                                <div class="swiper-slide"
                                                     style="background-image: url({{$photoSlider->url}});"
                                                     role="group" aria-label="1 / 8">
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-counter" id="numberSlides">1 - 8</div>
                                <!-- navigation buttons -->
                                <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                     aria-label="Previous slide" aria-controls="swiper-wrapper-7e6eba31691cc5c10"
                                     aria-disabled="true"></div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                     aria-controls="swiper-wrapper-7e6eba31691cc5c10" aria-disabled="false">
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <script>
                            var mySwiper = new Swiper('.swiper-container', {
                                loop: false,

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
                        </script>
                    </div>
                    <div class="map one-product__map" id="map_canvas" style="position: relative; overflow: hidden;">

                    </div>
                    <a class="zoommaps" target="_blank"
                       href="https://maps.google.com.ua/maps?f=q&source=embed&hl=uk&geocode=&q={{$house->coordinate[0]}},{{$house->coordinate[1]}}&aq=&sll={{$house->coordinate[0]}},{{$house->coordinate[1]}}&sspn=0.001257,0.002384&ie=UTF8&t=m&z=14&ll={{$house->coordinate[0]}},{{$house->coordinate[1]}}">
                        {{__('houses/house.fullscreen')}}
                    </a>
                    <script
                            src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyAY4I_P_PjkK_sj6pzdgNBgCxVctEuRZw0"></script>
                    <script src="{{asset('js/jsmaps/jquery.ui.map.min.js')}}"></script>
                    <script src="{{asset('js/jsmaps/jquery.ui.map.microformat.js')}}"></script>
                    <script src="{{asset('js/jsmaps/jquery.prettyPhoto.js')}}"></script>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            var position = new google.maps.LatLng(
                                    {{$house->coordinate[0]}},
                                    {{$house->coordinate[1]}}
                            )
                            $('.map').gmap({
                                'center': position, 'zoom': 14, 'disableDefaultUI': true,
                                'callback': function () {
                                    var self = this
                                    self.addMarker({
                                        'position': this.get('map').getCenter(),
                                        'icon': "{{asset('img/marker2.png')}}"
                                    })
                                }
                            })
                        })
                    </script>
                </div>
                <div class="col-12 col-xl-5 product-info pt-4 pl-4">
                    <div>
                        <h3 class="one-product__street">
                            {{$house->address}}
                        </h3>
                        @if($house->category->name)
                            <div class="one-product__region">
                                <b>{{__('houses/house.info.district')}}: </b>
                                <span>{{$house->category->name}}</span>
                            </div>
                        @endif
                        @if($house->price)
                            <div class="one-product-price">
                            <span class="one-product-price__label">
                               {{__('houses/house.info.price')}}: &nbsp;
                            </span>
                                <span class="one-product-price__price">
                                <span class="price-count">{{$house->price}}</span> грн./м<sup>2</sup>
                            </span>
                            </div>
                        @endif
                        <hr>
                        @if($house->construction_end)
                            <div class="one-product-construction_end">
                                <span>{{__('houses/house.info.construction_end')}}: </span>
                                <span>{{$house->construction_end}}</span>
                            </div>
                        @endif
                        <hr>
                        @if($house->description)
                            <div class="one-product-description mb-2">
                                <b>{{__('houses/house.info.description')}}:</b>
                                <p>{!! $house->description !!}</p>
                            </div>
                        @endif
                        @if($house->apartment_areas)
                            <div class="one-product-description mb-2">
                                <b>{{__('houses/house.info.apartment_areas')}}:</b>
                                <p>{!! $house->apartment_areas !!}</p>
                            </div>
                        @endif
                        @if($house->heating_systems)
                            <div class="one-product-description mb-2">
                                <b>{{__('houses/house.info.heating_systems')}}:</b>
                                <p>{{$house->heating_systems}}</p>
                            </div>
                        @endif
                        @if($house->building_structures)
                            <div class="one-product-description mb-2">
                                <b>{{__('houses/house.info.building_structures')}}:</b>
                                <p>{{$house->building_structures}}</p>
                            </div>
                        @endif
                        <hr>
                        @if(!empty($house->additional_information))
                            <div class="one-product-description mb-2">
                                <b>{{__('houses/house.info.additional_information')}}:</b>
                                <ul>
                                    @foreach($house->additional_information as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            <hr>
        </div>

        @php
            /* @var \App\Models\House $house */

            /* @var \App\Models\Housing $housing */
            $housing = $house->housings->first();

            /* @var \App\Models\Layout $layout */
            if ($housing){
                $layout = $housing->layouts->first();
            }
        @endphp
        <script type="text/javascript" src="{{asset('js/jquery/jquery14.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery/jquery.MetaData.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery/jquery.maphilight.min.js')}}"></script>
        @isset($layout)
            <div class="container container--one-product one-product-layout">
                {{--                <h2 class="one-product-layout__title">{{__('houses/house.layout')}}</h2>--}}

                <div class="center wrapper-select">
                    <form action="#">
                        <select name="building-filter"
                                id="building-filter" {{$house->housings->count() < 2 ? 'hidden': ''}}>
                            @foreach($house->housings as $housing)
                                <option value="{{$housing->id}}">{{$housing->name}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="one-product-layout__inner">
                    @mobile
                    @foreach($house->housings as $housing)
                        @foreach($housing->layouts as $item)
                            <div class="one-product-layout__mobile wrapper-plans" data-housing="{{$housing->id}}">
                                <div
                                        style='display: block; background: url("{{$item->url}}"); position: relative; padding: 0;
                                                width: 1200px; height: 244px;'>
                                    <canvas
                                            style="width: 1200px; height: 244px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;"
                                            height="244" width="1200"></canvas>
                                    <img src="{{$item->url}}" alt="{{$item->name}}"
                                         style="max-width: unset; opacity: 0; position: absolute; left: 0; top: 0;
                                                                      padding: 0; border: 0;"
                                         usemap="#Map-{{$item->id}}" class="maphilighted">
                                </div>
                                <map name="Map-{{$item->id}}" id="Map-{{$item->id}}" class="wrapper-map">
                                    @foreach($item->layoutCoordinates as $layoutCoordinate)
                                        <area rel="lightbox5"
                                              class="lightbox_related_video3 {'strokeColor':'{{$layoutCoordinate->color_area}}','strokeWidth':2,'fillColor':'{{$layoutCoordinate->color_area}}','fillOpacity':0.6} cboxElement"
                                              alt="{{$layoutCoordinate->name}}" title="{{$layoutCoordinate->name}}"
                                              href="#rooms{{$layoutCoordinate->id}}" shape="poly"
                                              coords="{{$layoutCoordinate->coordinate}}">
                                    @endforeach
                                </map>
                            </div>
                        @endforeach
                    @endforeach
                    @endmobile

                    @notmobile
                    <div class="wrapper-items">
                        @foreach($house->housings as $housing)
                            @foreach($housing->layouts as $item)
                                <div class="one-product-layout__desktop wrapper-plans w-100"
                                     data-housing="{{$housing->id}}">
                                    <div
                                            style='display: block; background: url("{{$item->url}}"); position: relative; padding: 0;
                                                    width: 1200px; height: 244px;'>
                                        <canvas
                                                style="width: 1200px; height: 244px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;"
                                                height="244" width="1200"></canvas>
                                        <img src="{{$item->url}}" alt="{{$item->name}}"
                                             style="max-width: unset; opacity: 0; position: absolute; left: 0; top: 0;
                                                                      padding: 0; border: 0;"
                                             usemap="#Map-{{$item->id}}" class="maphilighted">
                                    </div>

                                    <map name="Map-{{$item->id}}" id="Map-{{$item->id}}" class="wrapper-map">
                                        @foreach($item->layoutCoordinates as $layoutCoordinate)
                                            <area rel="lightbox5"
                                                  class="lightbox_related_video3 {'strokeColor':'{{$layoutCoordinate->color_area}}','strokeWidth':2,'fillColor':'{{$layoutCoordinate->color_area}}','fillOpacity':0.6} cboxElement"
                                                  alt="{{$layoutCoordinate->name}}" title="{{$layoutCoordinate->name}}"
                                                  href="#rooms{{$layoutCoordinate->id}}" shape="poly"
                                                  coords="{{$layoutCoordinate->coordinate}}">
                                        @endforeach
                                    </map>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    @endnotmobile

                </div>
                <div style="display:none;">
                    @foreach($house->housings as $housing)
                        @foreach($housing->layouts as $item)
                            @foreach($item->layoutCoordinates as $layoutCoordinate)
                                <div rel="lightbox5" id="rooms{{$layoutCoordinate->id}}" class="layout-modal-content">
                                    <img src="{{$layoutCoordinate->url}}" title="{{$layoutCoordinate->name}}">
                                    <a class="one-product-layout__print-btn" href="#"
                                       onclick="window.open('{{localUrl("print/room/$layoutCoordinate->id")}}', 'myWindow',
                                               'status = 1,  width = 820' )">Печать</a>
                                </div>
                            @endforeach
                        @endforeach
                    @endforeach
                </div>
            </div>
    </div>
    @endisset


    <div class="container">
//            <button class="uibtn uibtn-primary one-product__selection-apartment-btn" data-open-modal="feedback-flat">
        <button class="uibtn uibtn-primary one-product__selection-apartment-btn">
        <script data-b24-form="click/48/5g0i89" data-skip-moving="true">
          (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
          })(window,document,'https://cdn.bitrix24.ua/b7708799/crm/form/loader_48.js');
        </script>
            {{__('houses/building.button')}}
        </button>
    </div>
    <script type="text/javascript">
        jq14 = jQuery.noConflict(true)
        jQuery(document).ready(function ($) {
            jq14('img[usemap]').maphilight()
        })
    </script>
    {{--<div style="display:none;">


        <div id="inlineflat">
            <h2 style="text-align:center;">Подбор квартиры</h2>
            <div class="formcall">

                <script>
                    jQuery(document).ready(function ($) {

                        $('.send_messs').click(function () {
                            //проверка полей
                            var name = $('.flatname').val()
                            var phone = $('.flatphone').val()

                            var adress = $('.flatadress').val()

                            var etag = $('.flatetag').val()
                            var rooms = $('.flatrooms').val()
                            var text = $('.flattext').val()

                            var capcha = $('.capcha').val()
                            if (name && phone && capcha) {
                                $('.messcall').load('sndflat.php', {
                                    name: name,
                                    phone: phone,
                                    adress: adress,
                                    etag: etag,
                                    rooms: rooms,
                                    text: text,
                                    capcha: capcha
                                })
                            } else {
                                alert('Не все обязательные поля заполнены')
                            }
                        })

                    })
                </script>

                <table style="width:80%;margin:20px auto;">
                    <tbody>
                    <tr>
                        <td width="45%"><b style="color: red;"> * </b>Ваше имя</td>
                        <td width="55%"><input type="text" maxlength="20" class="flatname" value="" name="uname">
                        </td>
                    </tr>

                    <tr>
                        <td><b style="color: red;"> * </b> Номер телефона</td>
                        <td><input type="text" maxlength="15" class="flatphone" value="" name="tel"></td>
                    </tr>

                    <tr>
                        <td> Объект</td>
                        <td>Никитченка, 3 (3-й корпус)<input type="hidden" maxlength="55" class="flatadress"
                                                             value="Никитченка, 3 (3-й корпус)" name="adres"></td>
                    </tr>

                    <tr>
                        <td> Этаж</td>
                        <td><input type="text" maxlength="2" class="flatetag" value="" name="etag"
                                   style="width:40px"></td>
                    </tr>

                    <tr>
                        <td> К-во комнат</td>
                        <td><input type="text" maxlength="15" class="flatrooms" value="" name="rooms"
                                   style="width:40px"></td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:left">
                            Ваши пожелания
                            <textarea name="text" class="flattext" style="width:99%;height:120px"></textarea>
                        </td>
                    </tr>


                    <tr>
                        <td valign="middle"><br>
                            <span style="float:left"><b style="color: red;"> * </b>Код</span>
                            <img src="./modules/captcha/image.php" style=" float: left;width:65px">
                            <input type="text" maxlength="6" name="capcha" class="capcha"
                                   style=" float: left; width: 45px;padding:0px">
                        </td>
                        <td valign="middle">
                            <input type="submit" class="send_messs cbutt" value="Отправить">
                        </td>
                    </tr>


                    <tr style="height:20px">
                        <td colspan="2" style="text-align:center">
                            <div class="messcall"></div>
                        </td>
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>


        <div id="inlineask">
            <h2 style="text-align:center;">Задать вопрос</h2>
            <div class="formcall">

                <script>
                    jQuery(document).ready(function ($) {

                        $('.send_messsask').click(function () {
                            //проверка полей
                            var name = $('.askname').val()
                            var email = $('.askemail').val()
                            var phone = $('.askphone').val()
                            var text = $('.asktext').val()

                            var capcha = $('.capchaask').val()
                            if (name && phone && capcha) {
                                $('.messcall').load('sndask.php', {
                                    name: name,
                                    email: email,
                                    phone: phone,
                                    text: text,
                                    capcha: capcha
                                })
                            } else {
                                alert('Не все обязательные поля заполнены')
                            }
                        })

                    })
                </script>

                <table style="width:80%;margin:20px auto;">
                    <tbody>
                    <tr>
                        <td width="45%"><b style="color: red;"> * </b>Ваше имя</td>
                        <td width="55%"><input type="text" maxlength="20" class="askname" value="" name="name"></td>
                    </tr>

                    <tr>
                        <td> E-mail</td>
                        <td><input type="text" maxlength="25" class="askemail" value="" name="email"></td>
                    </tr>

                    <tr>
                        <td><b style="color: red;"> * </b> Номер телефона</td>
                        <td><input type="text" maxlength="15" class="askphone" value="" name="tel"></td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:left">
                            Текст сообщения
                            <textarea name="asktext" class="asktext" style="width:99%;height:120px"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle"><br>
                            <span style="float:left"><b style="color: red;"> * </b>Код</span>
                            <img src="./modules/captcha/image.php" style=" float: left;width:65px">
                            <input type="text" maxlength="6" name="capcha" class="capchaask"
                                   style=" float: left; width: 45px;padding:0px">
                        </td>
                        <td valign="middle">
                            <input type="submit" class="send_messsask cbutt" value="Отправить">
                        </td>
                    </tr>
                    <tr style="height:20px">
                        <td colspan="2" style="text-align:center">
                            <div class="messcall"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>--}}
    </div>
@endsection

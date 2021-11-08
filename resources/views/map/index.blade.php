@php
    /* @var App\Services\House\DTOs\MapDto[]|Illuminate\Support\Collection $houses  */
@endphp

@extends("layouts.app")

@section("content")
    <div id="map" style="height: 581px; position: relative; overflow: hidden;">

    </div>

    <script
        src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyAY4I_P_PjkK_sj6pzdgNBgCxVctEuRZw0"></script>
    <script src="{{asset('js/jsmaps/jquery.ui.map.min.js')}}"></script>
    <script src="{{asset('js/jsmaps/jquery.ui.map.microformat.js')}}"></script>
    <script src="{{asset('js/jsmaps/jquery.prettyPhoto.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('#map').gmap({
                'callback': function () {
                    var self = this
                    self.microformat('#map', function (result, item, index) {
                        let latlng = null

                        @foreach($houses as $house)
                            latlng = new google.maps.LatLng(
                            {{$house->getCoordinate()->first()}},
                            {{$house->getCoordinate()->last()}}
                        )
                        self.addMarker({
                            'bounds': true,
                            'position': latlng,
                            'icon': '/img/pin-small.png'
                        }).click(function () {
                            self.openInfoWindow({
                                'content': '{!! preg_replace("/\s+|\n+|\r/", ' ', view('map.cart', ['house' => $house])->render()); !!}'
                            }, this)
                        })
                        @endforeach
                    })
                }
            })
            $('#map').css({ height: window.innerHeight })
        })
    </script>
@endsection

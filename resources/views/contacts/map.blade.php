<div class='mapkont' style="width: 100%; height: 270px; position: relative; overflow: hidden;"></div>
@push('scripts')
    <script src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyAY4I_P_PjkK_sj6pzdgNBgCxVctEuRZw0"></script>
    <script src="{{asset('js/jsmaps/jquery.ui.map.min.js')}}"></script>
    <script src="{{asset('js/jsmaps/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function () {
            var position = new google.maps.LatLng(49.589479, 34.554285)
            jQuery('.mapkont').gmap({
                'center': position, 'zoom': 17, 'disableDefaultUI': true, 'callback': function () {
                    var self = this
                    self.addMarker({
                        'position': this.get('map').getCenter(),
                        'icon': '{{asset('img/marker2.png')}}'
                    })
                }
            })
        })
    </script>
@endpush

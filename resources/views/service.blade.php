@extends('skeleton')
@section('title', 'Home')

@section('body')
        <div id="map"></div>
@endsection

@section('body-scripts')
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'));

            map.setOptions({draggable: false, zoomControl: false, scrollwheel: false, disableDoubleClickZoom: true, disableDefaultUI: true, center: new google.maps.LatLng(0,0), zoom: 2});
            var lastValid = map.getCenter();
            google.maps.event.addListener(map, 'center_changed', function() {
                if(map.getBounds().getNorthEast().lng() > map.getBounds().getSouthWest().lng()) {
                    lastValid = map.getCenter();
                }
                else
                    map.panTo(lastValid);
            });
        }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMxSnCLHHtxHEVNJ12HKAJWVqBQpSIxKQ&callback=initMap"
            async defer></script>
@endsection
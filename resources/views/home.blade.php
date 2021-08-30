@extends('layouts.app')

@section('content')

    <div class="content">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mapform" >
                <div class="row">
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
                    </div>
                </div>

                <div id="map" style="height:400px; width: 800px;" class="my-3"></div>

                <script>
                    let map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: { lat: -34.397, lng: 150.644 },
                            zoom: 8,
                            scrollwheel: true,
                        });

                        const uluru = { lat: -34.397, lng: 150.644 };
                        let marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            draggable: true
                        });

                        google.maps.event.addListener(marker,'position_changed',
                            function (){
                                let lat = marker.position.lat()
                                let lng = marker.position.lng()
                                $('#lat').val(lat)
                                $('#lng').val(lng)
                            })

                        google.maps.event.addListener(map,'click',
                        function (event){
                            pos = event.latLng
                            marker.setPosition(pos)
                        })
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
                        type="text/javascript"></script>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>


    </div>



@endsection

@extends('app')

@section('title', 'Mapbox Demo')
@section('content')
<div class="col-sm-8">
    <p style="font-size: 28px; font-weight: 900; color: #055699;text-align: left;">{{$map->title}}</p>
    <p style="font-size: 15px; font-weight: 900;">{{$map->address . ", " . $map->city}}</p>
    <p style="font-size: 15px; font-weight: 900;">{{$map->created_at}}</p>
    <!-- <img style="margin: auto;" width="100%" alt="" src="/images/36528386.jpg"> -->
    <hr>
    <div id='map' onclick="myFunction()" style='width: 800px; height: 500px; margin: auto; font-size: 15px; font-weight: 600;'>Bản đồ quy hoạch:</div>
    <br><br><br>
</div>
@endsection
@push('scripts')
<script>
    var style = <?php echo json_encode($style, JSON_HEX_TAG); ?>;
    var map = <?php echo json_encode($map, JSON_HEX_TAG); ?>;
    var username = "<?php echo $username; ?>";
    var style_id = "<?php echo $style_id; ?>";
    mapboxgl.accessToken = map.access_token;
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/' + username + '/' + style_id, // stylesheet location
        center: [style.center[0], style.center[1]], // starting position [lng, lat]
        zoom: style.zoom // starting zoom
    });
    map.addControl(new mapboxgl.NavigationControl());
</script>
@endpush
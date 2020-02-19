@extends('app')

@section('title', 'Mapbox Demo')
@section('content')
<div class="col-sm-8">
    <p style="font-size: 50px; font-weight: 900; color: #0584bd;text-align: center;">{{$style->name}}</p>
    <p style="font-size: 20px; font-weight: 900;">{{$style->created}}</p>
    <!-- <img style="margin: auto;" width="100%" alt="" src="/images/36528386.jpg"> -->
    <br>
    <br>
    <div id='map' style='width: 700px; height: 400px; margin: auto; font-size: 15px; font-weight: 600;'>Bản đồ quy hoạch:</div>
</div>
@endsection
@push('scripts')
<script>
    var style = <?php echo json_encode($style, JSON_HEX_TAG); ?>;
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g';

    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/leducan/{{$style->id}}', // stylesheet location
        center: [style.center[0], style.center[1]], // starting position [lng, lat]
        zoom: style.zoom // starting zoom
    });
    map.addControl(new mapboxgl.NavigationControl());
</script>
@endpush
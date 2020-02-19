@extends('app')

@section('title', 'Mapbox Demo')
@section('content')
<div class="col-sm-6">
    <div id='map' style='width: 500px; height: 400px;'></div>
</div>
@endsection
@push('scripts')
<script>
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
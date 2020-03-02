@extends('admin.app')
@section('title', 'Map | Mapbox Demo')

@section('content')
<div class="container">
    <div style="font-size: 30px; font-weight:bold; margin-bottom: 20px;">Create map</div>
    <form method="post" action="{{route('map.store')}}">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Please input title of your news">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Please input your address">
            </div>
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <select id="city" class="form-control" name="city">
                    <option selected>Ha Noi</option>
                    <option>Hue</option>
                    <option>Da Nang</option>
                    <option>Ho Chi Minh</option>
                    <option>Can Tho</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="map_style">Map Style</label>
            <input type="text" class="form-control" id="mapStyle" name="mapStyle" placeholder="Please input map style">
        </div>
        <div class="form-group">
            <label for="accessToken">Access Token</label>
            <input type="text" class="form-control" id="accessToken" name="accessToken" placeholder="Please input your access token">
        </div>
        <button type="button" onclick="myFunction()" class="btn btn-primary">Load map</button>
        <div id='map' style='width: 600px; height: 300px; margin: auto; font-size: 15px; font-weight: 600;'></div>
        <button type="submit" class="btn btn-primary">Create map</button>
    </form>
</div>
@endsection
@push('script')
<script>
    function myFunction() {
        $.ajax({
            url: '{{ route("map.create2ajax") }}',
            method: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('#save').html('Before');
                $('#save').attr('disabled', 'disabled');
            },
            success: function(data) {
                if (data.error) {
                    var error_html = '';
                    for (var count = 0; count < data.error.length; count++) {
                        error_html += '<p>' + data.error[count] + '</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                } else {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">' + data.success + '</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
    }

    function fetchMap
</script>
@endpush
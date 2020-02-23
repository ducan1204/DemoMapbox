@extends('admin.app')
@section('title', 'Map | Mapbox Demo')

@section('content')
<div class="container">
    <div style="font-size: 30px; font-weight:bold; margin-bottom: 20px;">Edit map</div>
    <form method="post" action="{{route('map.store', ['id' => $map->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{$map->title}}" placeholder="Please input title of your news">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$map->address}}" placeholder="Please input your address">
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
            <input type="text" class="form-control" id="mapStyle" name="mapStyle" value="{{$map->map_style}}" placeholder="Please input map style">
        </div>
        <div class="form-group">
            <label for="accessToken">Access Token</label>
            <input type="text" class="form-control" id="accessToken" name="accessToken" value="{{$map->access_token}}" placeholder="Please input your access token">
        </div>
        <button type="submit" class="btn btn-primary">Update map</button>
    </form>
</div>
@endsection
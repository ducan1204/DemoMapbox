@extends('admin.app')
@section('title', 'Map | Mapbox Demo')

@section('content')
<div class="container">
    <div class="table-responsive">
        <div class="row" style="font-size: 20; font-weight: bold; margin-left: 5px; margin-top: 5px; margin-bottom: 10px">
            <div class="col-lg-8">Maps</div>
            <div class="col-lg-2"><a href="{{route('map.create')}}" style="color: green;text-decoration: none;"><i class="fas fa-plus-circle"></i> Add new maps</a></div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($maps as $map)
                <tr>
                    <th scope="row">{{$map->title}}</th>
                    <td>{{$map->address}}</td>
                    <td>{{$map->city}}</td>
                    <td>
                        <a href="{{route('map.edit', $map->id)}}" class="fas fa-edit text-blue"> Edit</a>
                        <br>
                        <a href="{{route('map.destroy', $map->id)}}" class="fas fa-trash-alt text-red" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''"> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
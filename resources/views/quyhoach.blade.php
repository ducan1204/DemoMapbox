@extends('app')

@section('title', 'Mapbox Demo')
@section('content')
<div class="col-sm-8">
    <!-- <div id='map' style='width: 500px; height: 400px;'></div> -->
    @foreach($styles as $style)
    <div class="row">
        <div class="col-sm-3"><img width="100%" alt="" src="/images/36528386.jpg"></div>
        <div class="col-sm-9">
            <a href="/quy-hoach/{{$style->id}}">{{$style->title}}</a>
            <p>{{$style->address . ", " . $style->city}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
@push('script')
@endpush
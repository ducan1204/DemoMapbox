@extends('app')

@section('title', 'Mapbox Demo')
@push('css')
<link href="{{asset('/css/guest.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="col-sm-8">
    <!-- <div id='map' style='width: 500px; height: 400px;'></div> -->
    <!-- <img width="100%" alt="" src="/images/photo-1518655513281-e90740bd56b0.jpg"> -->
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading" style="background: #055698; color: white;padding: 5px 10px;"><i class="fa fa-search" aria-hidden="true"> Công cụ tìm kiếm</i></div>
            <div class="panel-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="col-sm-4 nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Nhà đất bán</a>
                    </li>
                    <li class="col-sm-4 nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Nhà đất cho thuê</a>
                    </li>
                    <li class="col-sm-4 nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Tìm nhà môi giới</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <form method="GET">
                            <select>
                                <option>Bán căn hộ chung cư</option>
                                <option>Bán nhà riêng</option>
                                <option>Bán đất nền</option>
                                <option>Bán nhà biệt thự, liền kề</option>
                                <option>Bán nhà mặt phố</option>
                                <option selected="selected">- Chọn loại nhà đất -</option>
                            </select>
                            <select>
                                <option>Hồ Chí Minh</option>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng</option>
                                <option>Bình Dương</option>
                                <option>Đồng Nai</option>
                                <option selected="selected">- Tỉnh / Thành phố -</option>
                            </select>
                            <select>
                                <option selected="selected">- Quận / Huyện -</option>
                            </select>
                            <select>
                                <option selected="selected">- Phường / Xã -</option>
                            </select>
                            <select>
                                <option selected="selected">- Đường / Phố -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn mức giá -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn diện tích -</option>
                            </select>
                            <a class="btn btn-primary" style="color: white;"><i class="fa fa-search">Tìm</i></a>
                            <a class="btn btn-success" style="color: white;"><i class="fa fa-search">Tìm theo bản đồ</i></a>
                        </form>
                        <!-- <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <form method="GET">
                            <select>
                                <option>Bán căn hộ chung cư</option>
                                <option>Bán nhà riêng</option>
                                <option>Bán đất nền</option>
                                <option>Bán nhà biệt thự, liền kề</option>
                                <option>Bán nhà mặt phố</option>
                                <option selected="selected">- Chọn loại nhà đất -</option>
                            </select>
                            <select>
                                <option>Hồ Chí Minh</option>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng</option>
                                <option>Bình Dương</option>
                                <option>Đồng Nai</option>
                                <option selected="selected">- Tỉnh / Thành phố -</option>
                            </select>
                            <select>
                                <option selected="selected">- Quận / Huyện -</option>
                            </select>
                            <select>
                                <option selected="selected">- Phường / Xã -</option>
                            </select>
                            <select>
                                <option selected="selected">- Đường / Phố -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn mức giá -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn diện tích -</option>
                            </select>
                            <a class="btn btn-primary" style="color: white;"><i class="fa fa-search">Tìm</i></a>
                            <a class="btn btn-success" style="color: white;"><i class="fa fa-search">Tìm theo bản đồ</i></a>
                        </form>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <form method="GET">
                            <select>
                                <option>Hồ Chí Minh</option>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng</option>
                                <option>Bình Dương</option>
                                <option>Đồng Nai</option>
                                <option selected="selected">- Chọn Tỉnh / Thành phố -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn Quận / Huyện -</option>
                            </select>
                            <select>
                                <option selected="selected">- Chọn Phường / Xã -</option>
                            </select>
                            <a class="btn btn-primary" style="color: white;"><i class="fa fa-search">Tìm kiếm</i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
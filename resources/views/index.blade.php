<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapbox Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css" rel="stylesheet" />
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 15vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .topnav {
            overflow: hidden;
            background-color: #3333cc;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">


                <div class="topnav" id="myTopnav">
                    <a href="/"><img src="/images/61935847.jpg
" width="174px" height="54px;" title="Thongtin.land"></a>
                    <a href="#home"><i style="font-size: 25px;" class="fa fa-home" title="home"></i></a>
                    <a href="#news">Cần bán - Cho thuê</a>
                    <a href="#news">Cần mua - Cho thuê</a>
                    <a href="#contact">Dự án</a>
                    <a href="quy-hoach">Quy hoạch</a>
                    <a href="#contact">Tin tức</a>
                    <a href="#about">Danh bạ</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 0px">
            <div class="col-sm-3">
                <a href="https://thongtin.land/register"><img width="100%" alt="" src="https://thongtin.land/api/uploads/baner quang cao2.jpg"></a>
                <a href="https://www.facebook.com/land.thongtin/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/quang-cao1.gif"></a>
                <a href="https://thongtin.land/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/Left 4- 500-300.jpg"></a>
            </div>
            <div class="col-sm-6">
                <!-- <div id='map' style='width: 500px; height: 400px;'></div> -->
                <img width="100%" alt="" src="/images/photo-1518655513281-e90740bd56b0.jpg">
            </div>
            <div class="col-sm-3"><a href="https://thongtin.land/register"><img width="100%" alt="" src="https://thongtin.land/api/uploads/baner quang cao2.jpg"></a>
                <a href="https://www.facebook.com/land.thongtin/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/quang-cao1.gif"></a>
                <a href="https://thongtin.land/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/Left 4- 500-300.jpg"></a></div>
        </div>
    </div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/leducan/ck6r8m0af0rl21iqkaf30jxyj', // stylesheet location
            center: [108.044493, 13.982936], // starting position [lng, lat]
            zoom: 17 // starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());
    </script>
</body>

</html>
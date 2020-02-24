<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/fontawesome/css/all.css" rel="stylesheet">
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
            /* margin-bottom: 30px; */
        }

        .topnav {
            overflow: hidden;
            background-color: #3333cc;
            padding: 0px 0px;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            font-weight: 900;
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

        #logo {
            padding: 0px 0px;
        }

        .link {
            padding: 14px 29px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">


                <div class="topnav" id="myTopnav">
                    <a href="/"><img src="/images/61935847.jpg
" width="200px" height="auto;" id="logo" title="Thongtin.land"></a>
                    <a href="/" class="link"><i style="font-size: 15px;" class="fa fa-home fa-xs" title="home"></i></a>
                    <a href="#" class="link">Cần bán - Cho thuê</a>
                    <a href="#" class="link">Cần mua - Cho thuê</a>
                    <a href="#" class="link">Dự án</a>
                    <a href="{{route('quyhoach')}} " class="link">Quy hoạch</a>
                    <a href="#" class="link">Tin tức</a>
                    <a href="#" class="link">Danh bạ</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 0px">
            <div class="col-sm-2">
                <!-- <a href="https://thongtin.land/register"><img width="100%" alt="" src="https://thongtin.land/api/uploads/baner quang cao2.jpg"></a>
                <a href="https://www.facebook.com/land.thongtin/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/quang-cao1.gif"></a>
                <a href="https://thongtin.land/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/Left 4- 500-300.jpg"></a> -->
            </div>
            @section('content')
            @show
            <div class="col-sm-2">
                <!-- <a href="https://thongtin.land/register"><img width="100%" alt="" src="https://thongtin.land/api/uploads/baner quang cao2.jpg"></a>
                <a href="https://www.facebook.com/land.thongtin/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/quang-cao1.gif"></a>
                <a href="https://thongtin.land/"><img width="100%" alt="" src="https://thongtin.land/api/uploads/Left 4- 500-300.jpg"></a></div> -->
            </div>
        </div>
        @stack('scripts')
</body>

</html>
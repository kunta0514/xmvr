<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
    <title></title>
    <!-- Bootstrap core CSS -->
    {{--<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('vendor/css/mui.css')}}" rel="stylesheet">

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    {{--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="{{asset('vendor/js/mui.js')}}"></script>
    <![endif]-->
    <style type="text/css">
        /*.container-flex{*/
            /*margin-left: 10px;*/
            /*margin-right: 10px;;*/
        /*}*/
        html body{
            font-family: Microsoft YaHei,Tahoma,Helvetica,Arial,"\5b8b\4f53",sans-serif;
        }
    </style>
</head>
<body>
{{--@include('templates.nav')--}}
@yield('content')
{{--    @include('templates.footer')--}}
</body>
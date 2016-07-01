@extends('mobiletemplates.default')
@section('content')
    <header class="mui-bar mui-bar-nav">
        <a class="mui-icon mui-icon-left-nav mui-pull-left"></a>
        <a class="mui-icon mui-icon-reply mui-pull-right"></a>
        <h1 class="mui-title">置业顾问</h1>
    </header>
    <style>
        .consultant-card .title{
            font-size: smaller;
            text-align: left;
        }

        .consultant-card .title {
            font-size: smaller;
            text-align: left;
        }
        .consultant-card .content {
            font-size:x-small;
            text-align: left;
        }
        .consultant-card .red{
            color: red;
        }
        .consultant-card-mark{
            width: 100%;
        }

        .consultant-card-mark table{
            width: 100%;
        }

        .consultant-card-mark table td{
            width: 33%;
        }

        .consultant-card-mark table td span{
            color: red;
            font-size: smaller;
            font-weight: 900;
        }

        .consultant-card-mark table td div{
            font-size:x-small;
        }

        .consultant-card-mark ul{
            list-style-type:none;
        }
        .consultant-card-mark ul li{
            display:block;
            float:left;
        }


        .mui-badge{
            border-radius:3px;
        }

    </style>
    <div class="mui-content">
        <div class="mui-content-padded" style="margin: 5px;text-align: center;">
            <div class="consultant-card" >
                <table>
                    <tr>
                        <td width="25%">
                            <img src="#">
                        </td>
                        <td>
                            <div class="title">
                                <span>朱文静</span> <span class="mui-badge mui-badge-danger">问答专家</span> <span>从业：3年</span>
                            </div>
                            <div class="content">
                                <span>销售楼盘：江南新天地 华天明珠紫阳府</span>
                            </div>
                            <div class="content">
                                <span>已为<span class="red">55</span>人回答房产等问题</span>
                            </div>
                            <div class="content">
                                <span>用心服务客户。</span>
                            </div>
                        </td>
                    </tr>
                </table>
                <span></span>
            </div>
            <div class="consultant-card-mark">
                <table>
                    <tr>
                        <td>
                            <span >26套</span>
                            <div>最近成交</div>
                        </td>
                        <td>
                            <span >201人</span>
                            <div >最近带看</div>
                        </td>
                        <td>
                            <span >40%</span>
                            <div >好评率</div>
                        </td>
                    </tr>

                </table>
            </div>

            {{--<div class="row" >--}}
                {{--<ul class="mui-table-view mui-grid-view mui-grid-9">--}}
                    {{--<li class="mui-table-view-cell mui-media mui-col-xs-4">--}}
                        {{--<a href="#">--}}
                            {{--<span class="mui-icon mui-icon-home">26套</span>--}}
                            {{--<div class="mui-media-body">最近成交</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="mui-table-view-cell mui-media mui-col-xs-4">--}}
                        {{--<a href="#">--}}
                            {{--<span class="mui-icon mui-icon-home">201人</span>--}}
                            {{--<div class="mui-media-body">最近带看</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="mui-table-view-cell mui-media mui-col-xs-4">--}}
                        {{--<a href="#">--}}
                            {{--<span class="mui-icon mui-icon-home">40%</span>--}}
                            {{--<div class="mui-media-body">好评率</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        </div>
    </div>
@stop
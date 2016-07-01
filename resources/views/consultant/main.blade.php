@extends('mobiletemplates.default')
@section('content')
    <header class="mui-bar mui-bar-nav">
        <a class="mui-icon mui-icon-left-nav mui-pull-left"></a>
        <a class="mui-icon mui-icon-reply mui-pull-right"></a>
        <h1 class="mui-title">置业顾问</h1>
    </header>
    <style>
        .mui-bar{
            background-color: white;
        }
        .consultant-card {
            background-color: white;
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
            background-color: white;
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
        .consultant-video {
            margin-top: 10px;
            background-color: white;
        }

        .consultant-video .head {
            text-align: left;
            padding-left: 15px;
            font-size: smaller;
        }

        .foot-btn{
            padding: 10px 0;
            background: #fff;
        }
        .foot-btn:after {
		    position: absolute;
		    right: 0;
		    bottom: 0;
		    left: 15px;
		    height: 1px;
		    content: '';
		    -webkit-transform: scaleY(.5);
		    transform: scaleY(.5);
		    background-color: #c8c7cc;
		}
        .mui-media-body{
            text-align: left;
            font-size: smaller;
        }
        .mui-media-body p{
            font-size: x-small;
        }

        .mui-badge{
            border-radius:3px;
        }

        .round {
	       border-radius: 50%;
        }
    </style>
    <div class="mui-content">
        <div class="mui-content-padded" style="margin: 5px;text-align: center;">
            <div class="consultant-card" >
                <table>
                    <tr>
                        <td width="25%">
                            <img class="round" src="{{asset('img/user/sunny.png')}}" alt="" />
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
                            <span>26套</span>
                            <div>最近成交</div>
                        </td>
                        <td>
                            <span>201人</span>
                            <div>最近带看</div>
                        </td>
                        <td>
                            <span>40%</span>
                            <div>好评率</div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="consultant-video">
                <div class="head">
                    我的作品
                </div>
                <div>
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell mui-hidden">cared
                            <div id="M_Toggle" class="mui-switch mui-active">
                                <div class="mui-switch-handle"></div>
                            </div>
                        </li>
                        <li class="mui-table-view-cell mui-media">
                            <a href="/project/vrglasses/">
                                <img class="mui-media-object mui-pull-left" src="{{asset('img/room/1.jpg')}}">
                                <div class="mui-media-body">
                                    1号楼-3室2厅
                                    <p class='mui-ellipsis'>132m-舒适三房-广阔空间</p>
                                </div>
                            </a>
                        </li>
                        <li class="mui-table-view-cell mui-media">
                            <a href="/project/vrglasses/">
                                <img class="mui-media-object mui-pull-left" src="{{asset('img/room/2.jpg')}}">
                                <div class="mui-media-body">
                                    1号楼-2室2厅
                                    <p class='mui-ellipsis'>102m-三口之家-舒适温馨</p>
                                </div>
                            </a>
                        </li>
                        <li class="mui-table-view-cell mui-media">
                            <a href="/project/vrglasses/">
                                <img class="mui-media-object mui-pull-left" src="{{asset('img/room/1.jpg')}}">
                                <div class="mui-media-body">
                                    1号楼-2室1厅
                                    <p class='mui-ellipsis'>96m-高性价比-投资首选</p>
                                </div>
                            </a>
                        </li>
                        <li class="mui-table-view-cell mui-media">
                            <a href="/project/vrglasses/">
                                <img class="mui-media-object mui-pull-left" src="{{asset('img/room/2.jpg')}}">
                                <div class="mui-media-body">
                                    1号楼-1室1厅
                                    <p class='mui-ellipsis'>56m-个人空间-精致奢华</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="foot-btn">
                <button class="mui-btn mui-btn-negative mui-btn-outlined" style="width: 70%">约 我</button>
            </div>

        </div>
    </div>
@stop
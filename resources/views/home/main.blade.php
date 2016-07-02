@extends('mobiletemplates.default')
@section('content')
	<style>
		.line {
		    box-sizing:border-box;
		    position:relative;
    		display: block;
			overflow: hidden;
			white-space: nowrap;
    		text-overflow: ellipsis;
		}
		.line .left {
			float: left;
		    margin-right: 10px;
		}
		.line .content {
			display: block;
		}
	</style>
    <script type="text/javascript" charset="utf-8">
        mui.init();
    </script>
    <body>
    <header class="mui-bar mui-bar-nav mui-bar-nav-top" >
        <div class="mui-row mui-bar-content line" >
            <div class="mui-bar-top-logo left title">
                小明VR
            </div>
            <div class="content">
            	<div class="mui-bar-top-search">
                	<!--input class="mui-input-search" /-->
                </div>
            </div>
        </div>

    </header>
    <section class="mui-content-middle">
        <section id="advertisement">
            <div class="mui-slider">
                <div class="mui-slider-group ">
                    <div class="mui-slider-item"><a href="#"><img src="{{asset('vendor/imgs/advertisement/lunbo_03.jpg')}}" /></a></div>
                    <div class="mui-slider-item"><a href="#"><img src="{{asset('vendor/imgs/advertisement/lunbo_04.jpg')}}" /></a></div>
                    <div class="mui-slider-item"><a href="#"><img src="{{asset('vendor/imgs/advertisement/lunbo_05.jpg')}}" /></a></div>
                    <div class="mui-slider-item"><a href="#"><img src="{{asset('vendor/imgs/advertisement/lunbo_06.jpg')}}" /></a></div>
                </div>
                <div class="mui-slider-indicator">
                    <div class="mui-indicator mui-active"></div>
                    <div class="mui-indicator"></div>
                    <div class="mui-indicator"></div>
                    <div class="mui-indicator"></div>
                </div>
            </div>
        </section>
        <section id="footprint" class="mui-footprint">
            <ul class="mui-table-view-buyhouseguide" >
                <li class="mui-selficon-footprint"></li>
                <li style="margin-left: 0;">足迹：</li>
                <li><a>新房楼盘</a></li>
                <li ><div>|</div></li>
                <li><a>查房价</a></li>
                <li>|</li>
                <li><a>房贷计算器</a></li>
            </ul>
        </section>
        <section>
            <div class="mui-card mui-card-cover">
                <ul class="mui-table-view mui-grid-view mui-grid-9">
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-buynewhouse"></span>
                            <div class="mui-media-body">买新房</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-secondhouse"></span>
                            <div class="mui-media-body">买二手房</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-findrenthouse"></span>
                            <div class="mui-media-body">找租房</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-renovation"></span>
                            <div class="mui-media-body">装修</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-zy"></span>
                            <div class="mui-media-body">自营</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-checkprice"></span>
                            <div class="mui-media-body">查房价</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-realhouse"></span>
                            <div class="mui-media-body">我要卖房</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-helprent"></span>
                            <div class="mui-media-body">帮你出租</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-schoolhouse"></span>
                            <div class="mui-media-body">优质学区</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-sm-p2">
                        <a href="#">
                            <span class="mui-icon mui-icon-function mui-icon-morefunc"></span>
                            <div class="mui-media-body">更多</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <ul class="mui-table-view-buyhouseguide" >
                <li class="mui-selficon-buyhouseguide"></li>
                <li class="mui-selficon-shoppingguide"></li>
                <li><a>宜居天堂</a></li>
            </ul>
        </section>
        <section class="section_news">
            <div class="mui-row" >
                <div class="mui-col-xs-4 mui-padding-top-left-10" >
                    <div class="mui-media-object">7.2买房团</div>
                    <div class="mui-media-body">一元抢房别错过</div>
                </div>
                <div class="mui-col-xs-6 mui-padding-top-left-10">
                    <div class="mui-row">
                        <div class="mui-col-xs-4 mui-icon-qiang"></div>
                        <div class="mui-col-xs-8 mui-news-left" style="padding-left: 15px;" >
                            <div class="mui-media-object">江汉刚需两房</div>
                            <div class="mui-media-body">满两年无税超省</div>
                        </div>
                    </div>
                </div>
                <div class="mui-col-xs-2">
                    <div class="mui-icon-shui"></div>
                </div>
                <div class="mui-col-xs-4 mui-padding-top-left-10" >
                    <div class="mui-media-object">租房降价来袭</div>
                    <div class="mui-media-body">还在公园旁</div>
                </div>
                <div class="mui-col-xs-6 mui-padding-top-left-10">
                    <div class="mui-row">
                        <div class="mui-col-xs-4 mui-icon-qiang2"></div>
                        <div class="mui-col-xs-8 mui-news-left" style="padding-left: 15px;" >
                            <div class="mui-media-object">武汉跳楼价</div>
                            <div class="mui-media-body">抢免费精准报价</div>
                        </div>
                    </div>
                </div>
                <div class="mui-col-xs-2">
                    <div class="mui-icon-wa"></div>
                </div>
            </div>


        </section>
        <section class="section_like">
            <div class="mui-row">
                <div class="mui-col-sm-2 mui-icon-guesslike">
                </div>
                <div class="mui-col-sm-10 mui-content-like">
                    猜你喜欢
                </div>
            </div>


            <ul class="mui-table-view">
                <li class="mui-table-view-cell mui-hidden">cared
                    <div id="M_Toggle" class="mui-switch mui-active">
                        <div class="mui-switch-handle"></div>
                    </div>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="#">
                        <div class="mui-row">
                            <div class="mui-col-xs-4">
                                <img width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/lunbo_03.jpg')}}">
                            </div>
                            <div class="mui-col-xs-8" style="padding-left: 10px;">
                                <div class="mui-selfcontent-title">远洋心汉口</div>
                                <div class="mui-row mui-selfcontent">
                                    <div class="mui-col-xs-2">3.9分</div>
                                    <div class="mui-col-xs-3">95条评论</div>
                                    <div class="mui-col-xs-7 mui-money">15000元/平</div>
                                </div>
                                <div class="mui-selfcontent">
                                    <span>东湖高新区-光谷南</span>
                                    <span>湖景地产</span>
                                </div>
                                <div class="mui-selfcontent mui-margin-top-3" >
								<span class="mui-keyword-discount">
									<span>小明VR红包</span>
									<span>￥200</span>
								</span>
                                    <span class="mui-keyword mui-margin-left-5">总价减4万</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="#">
                        <div class="mui-row">
                            <div class="mui-col-xs-4">
                                <img   width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/lunbo_04.jpg')}}">
                            </div>
                            <div class="mui-col-xs-8" style="padding-left: 10px;">
                                <div  class="mui-selfcontent-title">保利时代</div>
                                <div class="mui-row mui-selfcontent">
                                    <div class="mui-col-xs-2">3.9分</div>
                                    <div class="mui-col-xs-3">95条评论</div>
                                    <div class="mui-col-xs-7 mui-money">14000元/平</div>
                                </div>
                                <div class="mui-selfcontent">
                                    <span>板楼</span>
                                    <span>中环以外</span>
                                    <span>品牌地产</span>
                                </div>
                                <div class="mui-selfcontent mui-margin-top-3" >
                                    <span class="mui-keyword">报名可享优惠</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="#">
                        <div class="mui-row">
                            <div class="mui-col-xs-4">
                                <img width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/lunbo_05.jpg')}}">
                            </div>
                            <div class="mui-col-xs-8" style="padding-left: 10px;">
                                <div class="mui-selfcontent-title">万科红郡</div>
                                <div class="mui-row mui-selfcontent">
                                    <div class="mui-col-xs-2">3.9分</div>
                                    <div class="mui-col-xs-3">95条评论</div>
                                    <div class="mui-col-xs-7 mui-money">12000元/平</div>
                                </div>
                                <div class="mui-selfcontent">
                                    <span>东湖高新区-光谷南</span>
                                    <span>湖景地产</span>
                                </div>
                                <div class="mui-selfcontent mui-margin-top-3" >
								<span class="mui-keyword-discount">
									<span>小明VR红包</span>
									<span>￥5000</span>
								</span>
                                    <span class="mui-keyword mui-margin-left-5">5千抵三万</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </section>
    </section>
    <div style="height: 44px;">

    </div>
    <footer>
        <nav class="mui-bar mui-bar-tab">
            <a class="mui-tab-item mui-active">
                <span class="mui-icon mui-icon-home"></span>
                <span class="mui-tab-label">首页</span>
            </a>
            <a class="mui-tab-item" href="">
                <span class="mui-icon mui-icon-videocam"></span>
                <span class="mui-tab-label">看房</span>
            </a>
            <a class="mui-tab-item" href="">
                <span class="mui-icon mui-icon-person"></span>
                <span class="mui-tab-label">我的</span>
            </a>
        </nav>
    </footer>

    </body>
@stop
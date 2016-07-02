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

        <section class="section_like">
            <div class="mui-row">
                <div class="mui-col-sm-2 mui-icon-guesslike">
                </div>
                <div class="mui-col-sm-10 mui-content-like">
                    看房列表
                </div>
            </div>


            <ul class="mui-table-view">
                <li class="mui-table-view-cell mui-hidden">cared
                    <div id="M_Toggle" class="mui-switch mui-active">
                        <div class="mui-switch-handle"></div>
                    </div>
                </li>
                @foreach($projects as $project)
                    <li class="mui-table-view-cell mui-media">
                        <a href="/project/{{$project->id}}">
                            <div class="mui-row">
                                <div class="mui-col-xs-4">
                                    <img width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/')}}/{{$project->img}}">
                                </div>
                                <div class="mui-col-xs-8" style="padding-left: 10px;">
                                    <div class="mui-selfcontent-title">{{$project->name}}</div>
                                    <div class="mui-row mui-selfcontent">
                                        <div class="mui-col-xs-2">{{$project->score}}分</div>
                                        <div class="mui-col-xs-3">{{$project->comment_count}}条评论</div>
                                        <div class="mui-col-xs-7 mui-money">{{$project->price}}元/平</div>
                                    </div>
                                    <div class="mui-selfcontent">
                                        <span>{{$project->area}}</span>

                                    </div>
                                    <div class="mui-selfcontent mui-margin-top-3" >
								<span class="mui-keyword-discount">
									<span>小明VR红包</span>
									<span>￥{{$project->red_packets}}</span>
								</span>
                                        <span class="mui-keyword mui-margin-left-5">{{$project->discount_comment}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

                @foreach($projects as $project)
                    <li class="mui-table-view-cell mui-media">
                        <a href="/project/{{$project->id}}">
                            <div class="mui-row">
                                <div class="mui-col-xs-4">
                                    <img width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/')}}/{{$project->img}}">
                                </div>
                                <div class="mui-col-xs-8" style="padding-left: 10px;">
                                    <div class="mui-selfcontent-title">{{$project->name}}</div>
                                    <div class="mui-row mui-selfcontent">
                                        <div class="mui-col-xs-2">{{$project->score}}分</div>
                                        <div class="mui-col-xs-3">{{$project->comment_count}}条评论</div>
                                        <div class="mui-col-xs-7 mui-money">{{$project->price}}元/平</div>
                                    </div>
                                    <div class="mui-selfcontent">
                                        <span>{{$project->area}}</span>

                                    </div>
                                    <div class="mui-selfcontent mui-margin-top-3" >
								<span class="mui-keyword-discount">
									<span>小明VR红包</span>
									<span>￥{{$project->red_packets}}</span>
								</span>
                                        <span class="mui-keyword mui-margin-left-5">{{$project->discount_comment}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

                @foreach($projects as $project)
                    <li class="mui-table-view-cell mui-media">
                        <a href="/project/{{$project->id}}">
                            <div class="mui-row">
                                <div class="mui-col-xs-4">
                                    <img width="100%" height="86px"  src="{{asset('vendor/imgs/advertisement/')}}/{{$project->img}}">
                                </div>
                                <div class="mui-col-xs-8" style="padding-left: 10px;">
                                    <div class="mui-selfcontent-title">{{$project->name}}</div>
                                    <div class="mui-row mui-selfcontent">
                                        <div class="mui-col-xs-2">{{$project->score}}分</div>
                                        <div class="mui-col-xs-3">{{$project->comment_count}}条评论</div>
                                        <div class="mui-col-xs-7 mui-money">{{$project->price}}元/平</div>
                                    </div>
                                    <div class="mui-selfcontent">
                                        <span>{{$project->area}}</span>

                                    </div>
                                    <div class="mui-selfcontent mui-margin-top-3" >
                                    <span class="mui-keyword-discount">
                                        <span>小明VR红包</span>
                                        <span>￥{{$project->red_packets}}</span>
                                    </span>
                                        <span class="mui-keyword mui-margin-left-5">{{$project->discount_comment}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </section>



    </body>
@stop
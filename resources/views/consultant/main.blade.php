@extends('mobiletemplates.default')
@section('content')
    <header class="mui-bar mui-bar-nav">
        <a class="mui-icon mui-icon-left-nav mui-pull-left"></a>
        <a class="mui-icon mui-icon-reply mui-pull-right"></a>
        <h1 class="mui-title">置业顾问</h1>
    </header>
    <div class="mui-content">
        <div class="mui-content-padded" style="margin: 5px;text-align: center;">
            <div class="row" >
                <table>
                    <tr>
                        <td width="100px">
                            <img src="#">
                        </td>
                        <td>
                            <div class="row">
                                <span>朱文静</span><span>问答专家</span><span>从业：3年</span>
                            </div>
                            <div class="row">
                                <span>销售楼盘：江南新天地 华天明珠紫阳府</span>
                            </div>
                            <div class="row">
                                <span>已为55人回答房产等问题</span>
                            </div>
                            <div class="row">
                                <span>用心服务客户。</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row" >
                <ul class="mui-table-view mui-grid-view mui-grid-9">
                    <li class="mui-table-view-cell mui-media mui-col-xs-4">
                        <a href="#">
                            <span class="mui-icon mui-icon-home">26套</span>
                            <div class="mui-media-body">最近成交</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-xs-4">
                        <a href="#">
                            <span class="mui-icon mui-icon-home">201人</span>
                            <div class="mui-media-body">最近带看</div>
                        </a>
                    </li>
                    <li class="mui-table-view-cell mui-media mui-col-xs-4">
                        <a href="#">
                            <span class="mui-icon mui-icon-home">40%</span>
                            <div class="mui-media-body">好评率</div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@stop
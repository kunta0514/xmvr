@extends('templates.project')
@section('content')
    <style>

        .app-section {
            padding-bottom: 0px;
            padding-top:0px;
            font-size:12px;
            min-height: 20px;;
        }
        .project-hide{
            display:none;
        }
        .project-more{
            color:#7096bd;
        }
        .bottom-border{
            background:url(vendor/project/img/xian.png);
            background-position-y:bottom;
            background-repeat:repeat-x
        }
    </style>
<div class="app-page" data-page="project">
    <div class="app-topbar">
        <div class="left app-button" data-back data-autotitle></div>
        <div class="app-title"><span><img src ="{{asset('vendor/project/img/loupan_title.png')}}"></span> <span><img src ="{{asset('vendor/project/img/kanfang_title2.png')}}"></span></div>
        <div class="right app-button menu"><img src ="{{asset('vendor/project/img/right.png')}}"></div>
    </div>

    <div class="app-content" >
        <div class="app-section" style="text-align:center;">
            <img src ="{{asset('vendor/project/img/project01.jpg')}}" width="300">
        </div>
        <div class="app-section" style="font-size:14px;font-weight:600;color:#000;position:relative;">
            <div style="width:50%;">中建汤逊湖一号高层</div>
            <div style="position: absolute;float:right;right:10px;top:0px;z-index: 1000" class="kanfangtuan">
                <img src ="{{asset('vendor/project/img/kanfangtuan.png')}}">
            </div>
        </div>
        <div class="app-section bottom-border" style="color:#665;height:20px;  ">
            别名：水岸公馆
        </div>

        <div class="app-section"  style="font-size:16px;color:#dd2f30;font-weight: 600;">
          均价7500元/平 <img src ="{{asset('vendor/project/img/daikuan.png')}}">
        </div>

        <div class="app-section" >
            <img src ="{{asset('vendor/project/img/biaoqian01.png')}}">
        </div>

        <div class="app-section" >
           地址：青山区二七大桥与和平大道交汇处（二七大桥南岸）
        </div>

        <div class="app-section">
            开盘：2016年1月9日三期已第一次加推（在售）
        </div>
        <div class="app-section">
            交房：预计2017年10月30日三期2、5号楼交房
        </div>

        <div class="app-section can-hide project-hide">
            售楼处地址：武汉市江夏区汤逊湖红旗岛（文化大道与金樱街交汇处向东1000米）
        </div>

        <div class="app-section can-hide project-hide">
            物业类别：普通住宅
        </div>

        <div class="app-section can-hide project-hide">
            建筑类型：板楼，塔楼，超高层
        </div>

        <div class="app-section can-hide project-hide">
            装修状况：毛坯
        </div>

        <div class="app-section can-hide project-hide">
            住户数：3262户
        </div>

        <div class="app-section can-hide project-hide">
            容积率：2.41
        </div>

        <div class="app-section can-hide project-hide">
            绿化率：52%
        </div>

        <div class="app-section can-hide project-hide">
            停车位：2000
        </div>

        <div class="app-section can-hide project-hide">
            产权年限：70年
        </div>

        <div class="app-section can-hide project-hide">
            开发商：中建地产（武汉）有限公司
        </div>

        <div class="app-section can-hide project-hide">
            预售许可：武房开预售[2016]257号
        </div>

        <div class="app-section can-hide project-hide">
            物业公司：中建地产（武汉）有限公司
        </div>

        <div class="app-section can-hide project-hide">
            物业费：2.05元/平方米.月
        </div>

        <div class="app-section project-more  bottom-border"  style=" height:30px;">
            查看更多信息↑
        </div>

        <div class="app-section" style="position:relative;padding-bottom:10px;">
            <img class="jiangjiatongzhi-img" src ="{{asset('vendor/project/img/jiangjiatongzhiwo.png')}}" style="position:absolute;float:left;top:5px;left:30px;margin:0px;">
            <img class="kaipantongzhi-img" src ="{{asset('vendor/project/img/kaipantongzhiwo.png')}}"   style="position:absolute;float:right;top:5px;right:30px;margin:0px;">
        </div>

        <div  style="background-color:#f0f0f0; height:10px;"></div>

        <div class="app-section " style="color:#949494;font-size:14px;font-weight: 600;">
            预约看房可享以下优惠
        </div>
        <div class="app-section " style="line-height:25px;">
            房屋折扣：明源顾问带着5千享95折<br/>
            专属顾问服务：买房Q群：88888888
        </div>
        <div class="app-section">
            <div class="app-button red" style="width:60%;font-size:16px;">预约看房</div>
        </div>

        <div  style="background-color:#f0f0f0; height:10px;"></div>


        <div></div>
    </div>

    <div class="app-bottompbar">

    </div>
</div>

    <div id="jiangjiatongzhi" style="display:none;">
        <div style="font-size:10px;color:#000;margin-bottom:10px;">降价消息会通过短信及手机推送消息通知您</div>
        <div style="color:#000;"><span>手机号</span><input type="text" style="width:150px;"></div>
    </div>

    <div id="kaipantongzhi" style="display:none;">
        <div style="font-size:10px;color:#000;margin-bottom:10px;">开盘消息会通过短信及手机推送消息通知您</div>
        <div style="color:#000;"><span>手机号</span><input type="text" style="width:150px;"></div>
    </div>

<script src="{{asset('vendor/project/zepto.min.js')}}"></script>

<script src="{{asset('vendor/project/lib/swapper.js')}}"></script>
<script src="{{asset('vendor/project/lib/clickable.js')}}"></script>
<script src="{{asset('vendor/project/lib/scrollable.js')}}"></script>

<script src="{{asset('vendor/project/app.js')}}"></script>
<script src="{{asset('vendor/project/utils.js')}}"></script>
<script src="{{asset('vendor/project/events.js')}}"></script>
<script src="{{asset('vendor/project/metrics.js')}}"></script>
<script src="{{asset('vendor/project/dialog.js')}}"></script>
<script src="{{asset('vendor/project/form.js')}}"></script>
<script src="{{asset('vendor/project/scroll.js')}}"></script>
<script src="{{asset('vendor/project/scroll-fix.js')}}"></script>
<script src="{{asset('vendor/project/pages.js')}}"></script>
<script src="{{asset('vendor/project/stack.js')}}"></script>
<script src="{{asset('vendor/project/transitions.js')}}"></script>
<script src="{{asset('vendor/project/navigation.js')}}"></script>



<script>
    App.controller('project', function (page) {


        this.onShow = function () {
            //alert("回退");
        };

        this.onHide = function () {
            //alert("回退");
        };

        this.onBack = function () {

            //alert("回退");
        };

        this.onForward = function () {
            //alert("回退");
        };


        $(page).find('.menu')
                .on('click', function () {
                    App.dialog({
                        title        : '留下联系方式',
                        text         : '留下联系方式',
                        okButton     : '确认',
                        cancelButton : '取消'
                    }, function (choice) {
                        console.log(choice);
                    });
                });

        $(page).find('.kanfangtuan')
                .on('click', function () {
                    App.dialog({
                        title        : '去看房',
                        text         : '您可以直接留下联系方式，职业顾问将会联系您！',
                        okButton     : '确认',
                        cancelButton : '取消'
                    }, function (choice) {
                        console.log(choice);
                    });
                });



        $(page).find('.jiangjiatongzhi-img')
                .on('click', function () {
                    App.dialog({
                        title        : '降价通知',
                        rawText         :$("#jiangjiatongzhi").html(),
                        okButton     : '确认',
                        cancelButton : '取消'
                    }, function (choice) {
                        console.log(choice);
                    });
                });

        $(page).find('.kaipantongzhi-img')
                .on('click', function () {
                    App.dialog({
                        title        : '开盘通知',
                        rawText         :$("#kaipantongzhi").html(),
                        okButton     : '确认',
                        cancelButton : '取消'
                    }, function (choice) {
                        console.log(choice);
                    });
                });

        $(page).find('.project-more')
                .on('click', function () {
                   $(page).find(".can-hide").toggleClass("project-hide");
                    if($(this).text()=="收起↓"){
                        $(this).text("查看更多信息↑");
                    }else{
                        $(this).text("收起↓");
                    }
                });
    });

    try {
        App.restore();
    } catch (err) {
        App.load('project');
    }
</script>
@stop
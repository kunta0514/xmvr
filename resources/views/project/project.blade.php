@extends('templates.project')
@section('content')
    <style>
        body{
            font-family: Arial, "Microsoft Yahei" !important;
        }
        a{
            text-decoration:none;
        }
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
            background:url(/vendor/project/img/xian.png);
            background-position-y:bottom;
            background-repeat:repeat-x
        }

        .tel-i{
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 6px;
            background: url(/vendor/project/img/tel-icons.png) no-repeat;
            background-size: 60px auto;
            vertical-align: -5px;
        }

        .tel2-i{
            display: inline-block;
            width: 30px;
            height: 30px;
            margin-right: 6px;
            background: url(/vendor/project/img/tel-icons2.png) no-repeat;
            background-size: 60px auto;
            vertical-align: -5px;
        }
        .jiangjia-icon {
            display: inline-block;
            width: 22px;
            height: 22px;
            margin-right: 6px;
            background: url(/vendor/project/img/icon-jj.png) no-repeat;
            background-size: 22px auto;
            vertical-align: -5px;
        }

        .kaipan-icon {
            display: inline-block;
            width: 22px;
            height: 22px;
            margin-right: 6px;
            background: url(/vendor/project/img/icon-tz.png) no-repeat;
            background-size: 22px auto;
            vertical-align: -5px;
        }

        .app-bottompbar .app-button , .app-bottompbar .app-button-tel{
            height:44px;
            line-height:44px;
            font-size:14px;
            float:left;
            color:#fff;
        }

        .button-msg{
            margin-left: 15px;
            padding: 5px;
            line-height: 23px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            font-size: 14px;
            background-color: #fff;
            border: 0;
        }

    </style>
<div class="app-page" data-page="project">
    <div class="app-topbar">
        <div class="left app-button" data-back data-autotitle></div>
        <div class="app-title"><span><img src ="{{asset('vendor/project/img/loupan_title.png')}}"></span>
            <span id="title_kanfang"><img src ="{{asset('vendor/project/img/kanfang_title2.png')}}"></span>
        </div>
        <div class="right app-button menu send-message"><img src ="{{asset('vendor/project/img/right.png')}}"></div>
    </div>

    <div class="app-content" style="margin-bottom: 44px;">
        <div class="app-section" style="text-align:center;" >
            <img src ="{{asset('vendor/imgs/advertisement/')}}/{{$project->img}}" width="300">

        </div>
        <div class="app-section" style="font-size:14px;font-weight:600;color:#000;position:relative;">
            <div style="width:50%;">{{$project->name}}</div>
            <div style="position: absolute;float:right;right:10px;top:0px;z-index: 1000" class="kanfangtuan">
                <img src ="{{asset('vendor/project/img/kanfangtuan.png')}}">
            </div>
        </div>
        <div class="app-section bottom-border" style="color:#665;height:20px;  ">
            别名：{{$project->nick_name}}
        </div>

        <div class="app-section"  style="font-size:16px;color:#dd2f30;font-weight: 600;">
          均价{{$project->price}}元/平 <a href="http://m.fang.com/tools/" target="_self"><img src ="{{asset('vendor/project/img/icon-jsq2.png')}}" width="20px" border="0"></a>
        </div>

        <div class="app-section" style="color:#949494;font-size:10px;">
            {{--<img src ="{{asset('vendor/project/img/biaoqian01.png')}}">--}}

            @foreach(explode(',',$project->tag)  as $item)
            <span style="border:1px solid #ccc;padding:3px;border-radius: 2px;margin-right:5px;">{{$item}}</span>
            @endforeach


        </div>

        <div class="app-section" >
           地址：{{$project->address}}
        </div>

        <div class="app-section">
            开盘：{{$project->opening_comment}}
        </div>
        <div class="app-section">
            交房：{{$project->ending_comment}}
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
            查看更多信息↓
        </div>

        <div class="app-section" style="position:relative;padding-bottom:10px;color:#949494;font-size:14px;font-weight: 600;">
            {{--<img class="jiangjiatongzhi-img" src ="{{asset('vendor/project/img/jiangjiatongzhiwo.png')}}" style="position:absolute;float:left;top:5px;left:30px;margin:0px;">--}}
            <div class="jiangjiatongzhi-img" style="width:auto;float:left; padding:0px;margin:0px 30px;"><i class="jiangjia-icon"></i> &nbsp;降价通知</div>
            <div class="kaipantongzhi-img" style="width:auto;float:right;padding:0px;margin:0px  30px;;"><i class="kaipan-icon"></i> &nbsp;开盘通知</div>
            {{--<img class="kaipantongzhi-img" src ="{{asset('vendor/project/img/kaipantongzhiwo.png')}}"   style="position:absolute;float:right;top:5px;right:30px;margin:0px;">--}}
        </div>

        <div  style="background-color:#f0f0f0; height:10px;"></div>

        <div class="app-section " style="color:#949494;font-size:14px;font-weight: 600;">
            预约看房可享以下优惠
        </div>
        <div class="app-section " style="line-height:25px;">
            房屋折扣：{{$project->discount_comment}}<br/>
            专属顾问服务：买房Q群：88888888
        </div>
        <div class="app-section">
            <div class="app-button redborder qukanfang-btn" style="width:60%;font-size:16px;">预约看房</div>
        </div>

        <div  style="background-color:#f0f0f0; height:10px;"></div>

        <div class="app-section">
            置业顾问
        </div>
        @foreach($consultants as $consultant)
        <div class="app-section " style="position:relative;" >
                <div style="width:20%; float:left;position:relative;">
                    <img  src ="{{asset('/vendor/project/img/user_1.png')}}" width="50px" >
                </div>
                <div class="consultantList" style="width:50%; float:left;position:relative;line-height:25px; margin:0px;padding:0px;"  data-id="{{$consultant->id}}" data-name="{{$consultant->name}}" >
                    <span style="font-size:14px;">{{$consultant->name}}</span> <span style="color:orange;font-size:14px;">&nbsp;好评率 {{$consultant->good_rate}}%</span><br/>
                     <span style="color:#949494">带看{{$consultant->people_count}}人 &nbsp; 成交{{$consultant->deal_count}}套</span>
                </div>
                <div style="width:30%; float:left;position:relative;text-align:center;">
                    <a class="tel2-i" href="tel:{{$consultant->tel}}"></a>
                    <i class="tel2-i send-message"  style="background-position: -30px 0;" data-id="{{$consultant->id}}" data-name="{{$consultant->name}}"></i>
                </div>
            <div style="clear:both;"></div>
        </div>
        @endforeach



        <div  style="background-color:#f0f0f0; height:44px;">&nbsp;</div>

        <div class="app-bottompbar" >

            <div class="app-button-tel red" style="width:33%; margin-right:1px;background-color:#dd2f30">
                <i class="tel-i"></i><a href="tel:{{$consultants[0]->tel}}" style="color:#fff;">打电话</a>
            </div>

             <div class="app-button red send-message"  style="width:33%;margin-right:1px;">
                 <i class="tel-i" style="background-position: -20px 0;"></i>在线咨询
             </div>

             <div class="app-button red qukanfang-btn" style="min-width:33%;max-width:34%;">
                 <i class="tel-i"  style="background-position: -40px 0;"></i>预约看房
             </div>

        </div>
    </div>
</div>

    <div class="app-page" data-page="message" >
        <div class="app-topbar">
            <div class="left app-button" data-back data-autotitle></div>
            <div class="app-title">置业顾问：{{$consultants[0]->name}}</div>

        </div>
        <div class="messagebody">
        <p class="app-section" style="width:auto;float:left;border-radius: 10px; background-color:#fff; clear:both;">
           亲，有什么问题，请问哦
        </p>


        <p class="app-section"  style="width:auto;float:right;border-radius: 10px;background-color:#b2e966;text-align:right; clear:both;">
            什么时候可以看房
        </p>


        <p class="app-section" style="width:auto;float:left;border-radius: 10px; background-color:#fff; clear:both;">
            每周1-周6，上午9点到下午4点，可以随时看房哦
        </p><br/>

        <p class="app-section" style="width:auto;float:left;border-radius: 10px; background-color:#fff;clear:both">
            看房前，可电话与我联系
        </p><br/>

        <p class="app-section"  style="width:auto;float:right;border-radius: 10px;background-color:#b2e966;text-align:right;clear:both">
            好的，谢谢
        </p>
        </div>
        <div class="app-bottompbar" >

            <div class="app-button-tel red"  style="width:70%;">
               <input type="text" class="button-msg" style="width:80%">
            </div>

            <div class="app-button red sendmessage" style="width:30%;">
                <i class="tel-i"  style="background-position: -20px 0;"></i>发送
            </div>

        </div>
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




<script type="text/javascript">

    var this_consultant = {id:'{{$consultants[0]->id}}', name:'{{$consultants[0]->name}}'};

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


        //看房团点击
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

        //降价通知点击
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

        //看房通知点击
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

        //看房通
        $(page).find('.qukanfang-btn')
                .on('click', function () {

                    var txt = '<div id="qukanfang" style="display:none;"><div style="font-size:10px;color:#000;margin-bottom:10px;">'+this_consultant.name+'：看房请留下您的联系方式</div>    <div style="color:#000;"><span>手机号</span><input type="text" style="width:150px;"></div> </div>'
                    App.dialog({
                        title        : '预约看房',
                        rawText         :$(txt).html(),
                        okButton     : '确认',
                        cancelButton : '取消'
                    }, function (choice) {
                        console.log(choice);
                    });
                });

        //收缩 项目详情
        $(page).find('.project-more')
                .on('click', function () {
                   $(page).find(".can-hide").toggleClass("project-hide");
                    if($(this).text()=="收起↑"){
                        $(this).text("查看更多信息↓");
                    }else{
                        $(this).text("收起↑");
                    }
                });
        //留言
        $(page).find('.send-message')
                .on('click', function (c) {
                    if($(this).data('id')!= undefined) {
                        this_consultant.id = $(this).data('id');
                        this_consultant.name = $(this).data('name');
                    }
                    App.load('message')
                });

        $(page).find('#title_kanfang')
                .on('click', function () {
                    self.location="/project/vrglasses/1";
                });

        //打开置业顾问
        $(page).find('.consultantList')
                .on('click', function (c) {

                    var id= $(this).data("id");

                    this_consultant.id = $(this).data('id');
                    this_consultant.name = $(this).data('name');

                    self.location="/user/consultant/"+id;
                });

        //返回
        $(page).find('.left')
                .on('click', function () {
                    window.history.go(-1);
                });

    });

    App.controller('message', function (page) {

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

        $(page).find('.app-title').text('置业顾问：'+this_consultant.name)

        $(page).find('.sendmessage')
                .on('click', function (e) {
                   var txt = $(this).prev().find("input").val();
                    $(this).prev().find("input").val('');

                    var str = '<p class="app-section" style="width:auto;float:right;border-radius: 10px; background-color:#b2e966; clear:both;">' + txt + '</p>'
                    $(".messagebody").append(str);
                });



    });
    try {
        document.title = "<?=$project->name?>";
        App.restore();
    } catch (err) {
        App.load('project');
    }
</script>

    <div id="jiangjiatongzhi" style="display:none;">
        <div style="font-size:10px;color:#000;margin-bottom:10px;">降价消息会通过短信及手机推送消息通知您</div>
        <div style="color:#000;"><span>手机号</span><input type="text" style="width:150px;"></div>
    </div>

    <div id="kaipantongzhi" style="display:none;">
        <div style="font-size:10px;color:#000;margin-bottom:10px;">开盘消息会通过短信及手机推送消息通知您</div>
        <div style="color:#000;"><span>手机号</span><input type="text" style="width:150px;"></div>
    </div>


@stop
@extends('mobiletemplates.default') @section('content')
<style>
	#chart {
		padding: 10px;
	    height: 500px;
	}
	
	.consultant-video {
		margin-top: 520px;
	}
	
	.tel {
	    color: #8F8F94;
	    margin: 3px;
	    width: 50px;
	    height: 50px;
	    display: inline !important;
	    text-align: center;
	    background-color: #fff;
	    border: 1px solid #ddd;
	    border-radius: 25px;
	    background-clip: padding-box;
	    
	    position: inherit !important;
	    margin: 0 !important;
	    overflow: visible !important;
	}	
</style>
<script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('vendor/echarts/vintage.js')}}"></script>

<header class="mui-bar mui-bar-nav">
	<a class="mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.back();"></a> <a
	<h1 class="mui-title">置业顾问统计</h1>
</header>

<div class="mui-content">
	<div id="chart"></div>
	<div class="consultant-video">
        <div class="head">
        	我的访客
        </div>
        <div>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell mui-hidden">cared
                    <div id="M_Toggle" class="mui-switch mui-active">
                        <div class="mui-switch-handle"></div>
                    </div>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="/project/vrglasses/dahudi">
                        <img class="mui-media-object mui-pull-left" src="{{asset('img/room/1.jpg')}}">
                        <div class="mui-media-body">
                            18627176816
                            <p class='mui-ellipsis'>15 次</p>
                        </div>
                        <a class="tel"><span class="mui-icon mui-icon-phone"></span></a>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="/project/vrglasses/dahudi">
                        <img class="mui-media-object mui-pull-left" src="{{asset('img/room/2.jpg')}}">
                        <a class="mui-media-object mui-pull-right tel"><span class="mui-icon mui-icon-phone"></span></a>
                        <div class="mui-media-body">
                            13371353842
                            <p class='mui-ellipsis'>8 次</p>
                        </div>

                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="/project/vrglasses/dahudi">
                        <img class="mui-media-object mui-pull-left" src="{{asset('img/room/1.jpg')}}">
                        <div class="mui-media-body">
                            18951330204
                            <p class='mui-ellipsis'>3 次</p>
                        </div>
                        <a class="tel"><span class="mui-icon mui-icon-phone"></span></a>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="/project/vrglasses/dahudi">
                        <img class="mui-media-object mui-pull-left" src="{{asset('img/room/2.jpg')}}">
                        <div class="mui-media-body">
                            15012345678
                            <p class='mui-ellipsis'>3 次</p>
                        </div>
                        <a class="tel"><span class="mui-icon mui-icon-phone"></span></a>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
        // 第二个参数可以指定前面引入的主题
        var chart = echarts.init(document.getElementById('chart'), 'vintage');
        $.get('/js/aqi-beijing.json', function(data){
            
	        chart.setOption({
	        	title: {
	                text: '观看记录'
	            },
	            tooltip: {
	                trigger: 'axis'
	            },
	            xAxis: {
	                data: data.map(function (item) {
	                    return item[0];
	                })
	            },
	            yAxis: {
	                splitLine: {
	                    show: false
	                }
	            },
	            dataZoom: [{
	                startValue: '2014-06-01'
	            }, {
	                type: 'inside'
	            }],
	            visualMap: {
	                top: 10,
	                right: 10,
	                pieces: [{
	                    gt: 0,
	                    lte: 50,
	                    color: '#096'
	                }, {
	                    gt: 50,
	                    lte: 100,
	                    color: '#ffde33'
	                }, {
	                    gt: 100,
	                    lte: 150,
	                    color: '#ff9933'
	                }, {
	                    gt: 150,
	                    lte: 200,
	                    color: '#cc0033'
	                }, {
	                    gt: 200,
	                    lte: 300,
	                    color: '#660099'
	                }, {
	                    gt: 300,
	                    color: '#7e0023'
	                }],
	                outOfRange: {
	                    color: '#999'
	                }
	            },
	            series: {
	                name: '观看次数',
	                type: 'line',
	                data: data.map(function (item) {
	                    return item[1];
	                }),
	                markLine: {
	                    silent: true,
	                    data: [{
	                        yAxis: 50
	                    }, {
	                        yAxis: 100
	                    }, {
	                        yAxis: 150
	                    }, {
	                        yAxis: 200
	                    }, {
	                        yAxis: 300
	                    }]
	                }
	            }
	        });
        });
	</script>
@stop

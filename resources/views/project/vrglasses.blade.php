<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>VR眼镜 - 小明VR</title>
<style>
html, body {
	width: 100%;
	height: 100%;
	overflow: hidden;
	padding: 0;
	margin: 0;
}

.screen {
	position: absolute;
	width: calc(50% + 30px);
	height: 100%;
	border: 0;
	padding: 0;
	margin: 0;
	top: 0;
}

.left {
	left: -30px;
	z-index: 1;
}

.right {
	left: 50%;
	z-index: 2;
}

.full {
	box-sizing: border-box;
	position: absolute;
	width: 100%;
	height: 100%;
	display: none;
	z-index: 3;
	padding-top: 80%;
	text-align: center;
	line-height: 30px;
	background: #fff url("{{asset('img/rotating_screen.png')}}") no-repeat
		center 30%;
	background-size: 128px 128px;
}

@media all and (orientation : portrait) {
	.full {
		display: block;
	}
}

.console {
	position: absolute;
	width: 100%;
	height: 30px;
	line-height: 30px;
	bottom: 0;
	z-index: 4;
	background: #fff;
	bottom: 0;
	display: none;
}
</style>
</head>
<body>
	<div class="full">横屏以进入VR体验</div>
	<iframe name="left" class="screen left" src="/project/vr/dahudi"> </iframe>
	<iframe name="right" class="screen right" src="/project/vr/dahudi"> </iframe>
	<div class="console"></div>
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{asset('vendor/ino.sound/ion.sound.min.js')}}"></script>
	<script>
	(function(){
        var _lastSound = '';
        var _data = {
			"beer_can_opening": {"alpha": [90, 105], "beta": [-10, 5], "gamma": [-75, -60]}, //房门
			"bell_ring": {"alpha": [345, 10], "beta": [0, 10], "gamma": [-50, -60]}, //沙发
			"branch_break": {"alpha": [155, 165], "beta": [-5, 10], "gamma": [-85, -40]}, //床
        };
        function onWindowDeviceorientation(e) {
        	$('.console').text(JSON.stringify(e));

        	var sound = findSound(e);
        	//$('.console').text(sound);
        	if (!!sound && sound != _lastSound){
            	// play sound
            	_lastSound && ion.sound.stop(_lastSound);
        		ion.sound.play(sound);
        	}
        	_lastSound = sound;
        };

        function findSound(orientation){
            var result;
            function _match(orientation, o){
            	if (!orientation) return false;
            	if ((o.alpha[1] <= o.alpha[0] && (orientation.alpha >= o.alpha[0] || orientation.alpha <= o.alpha[1]))
            		|| (orientation.alpha >= o.alpha[0] && orientation.alpha <= o.alpha[1])) {
            		if ((o.beta[1] <= o.beta[0] && (orientation.beta >= o.beta[0] || orientation.beta <= o.beta[1]))
            			|| (orientation.beta >= o.beta[0] && orientation.beta <= o.beta[1])) {
            			if ((o.gamma[1] <= o.gamma[0] && (orientation.gamma >= o.gamma[0] || orientation.gamma <= o.gamma[1]))
	            			|| (orientation.gamma >= o.gamma[0] && orientation.gamma <= o.gamma[1])) {
	            			return true;
	        			}	
        			}	
        		}
            	return false;
            }
            $.each(_data, function(k, o){
            	if (_match(orientation, o)){
            		result = k;
    				return false;
            	}
            });
            return result;
        };

        function init(){
            var sounds = [];
            $.each(_data, function(k, o){
            	sounds.push({name: k});
            });

            ion.sound({
			    sounds: sounds,
			
			    // main config
			    path: "/vendor/ino.sound/sounds/",
			    preload: true,
			    multiplay: true,
			    volume: 0.9,
			    ready_callback: function() {
			    	window.addEventListener('deviceorientation', onWindowDeviceorientation, false);
			    }
			});
        };

        init();
	})();
	
    $(function(){
    	
    });

</script>
</body>
</html>

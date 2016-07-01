<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>vr - 小明VR</title>
<style type="text/css">
body {
	background-color: #000000;
	margin: 0;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
	<script src="{{asset('vendor/threeVR/lib/three.min.js')}}"
		type="text/javascript"></script>
	<script src="{{asset('vendor/threeVR/lib/CSS3DRenderer.js')}}"
		type="text/javascript"></script>

	<script src="{{asset('vendor/threeVR/js/DeviceOrientationController.js')}}" type="text/javascript"></script>

	<!-- DEVICEORIENTATION EMULATOR DETECTION + BOOTSTRAP -->
	<script src="//richtr.github.io/doe/doe.js"></script>

	<script type="text/javascript">

var camera, scene, renderer, controls;

// Setup
function init() {

    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1000 );

    // Render three.js world

    scene = new THREE.Scene();

    // Choose a random cuebmap ('2' or '3')
    var mapId = Math.floor( Math.random() * ( 3 - 2 + 1 ) ) + 2;

    var cube = generateCubeMap('{{$id}}', 512);
    scene.add( cube );

    renderer = new THREE.CSS3DRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    // Add DeviceOrientation Controls
    controls = new DeviceOrientationController( camera, renderer.domElement );
    controls.connect();

    window.addEventListener( 'resize', onWindowResize, false );
    window.addEventListener( 'orientationchange', onWindowResize, false );
}

// Render loop
function animate() {

    controls.update();

    renderer.render( scene, camera );

    requestAnimationFrame( animate );

}

function generateCubeMap( folderName, tileWidth ) {

    var flipAngle  = Math.PI;       // 180 degrees
    var rightAngle = flipAngle / 2; //  90 degrees

    tileWidth = tileWidth || 512;

    var sides = [
    {
        url: '/img/textures/cube/' + folderName + '/posx.jpg',
        position: [ - tileWidth, 0, 0 ],
        rotation: [ 0, rightAngle, 0 ]
    },
    {
        url: '/img/textures/cube/' + folderName + '/negx.jpg',
        position: [ tileWidth, 0, 0 ],
        rotation: [ 0, - rightAngle, 0 ]
    },
    {
        url: '/img/textures/cube/' + folderName + '/posy.jpg',
        position: [ 0, tileWidth, 0 ],
        rotation: [ rightAngle, 0, flipAngle ]
    },
    {
        url: '/img/textures/cube/' + folderName + '/negy.jpg',
        position: [ 0, - tileWidth, 0 ],
        rotation: [ - rightAngle, 0, flipAngle ]
    },
    {
        url: '/img/textures/cube/' + folderName + '/posz.jpg',
        position: [ 0, 0, tileWidth ],
        rotation: [ 0, flipAngle, 0 ]
    },
    {
        url: '/img/textures/cube/' + folderName + '/negz.jpg',
        position: [ 0, 0, - tileWidth ],
        rotation: [ 0, 0, 0 ]
    }
    ];

    var cube = new THREE.Object3D();

    for ( var i = 0; i < sides.length; i ++ ) {

        var side = sides[ i ];

        var element = document.createElement( 'img' );
        element.width = tileWidth * 2 + 2; // 2 pixels extra to close the gap.
        element.src = side.url;

        var object = new THREE.CSS3DObject( element );
        object.position.fromArray( side.position );
        object.rotation.fromArray( side.rotation );
        cube.add( object );

    }

    return cube;

}

function onWindowResize() {
	
    camera.aspect = window.innerWidth / window.innerHeight;

    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );
    
}

init();

animate();

</script>
</body>
</html>

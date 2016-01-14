
var layers = [],
	objects = [],

	world = document.getElementById( 'world');
	viewport = document.getElementById( 'viewport');

	d = 0,
	p = 400,
	worldXAngle = 0,
	worldYAngle = 0;

	viewport.style.webkitPerspective = p;
	viewport.style.MozPerspective = p;
	viewport.style.oPerspective = p;

	var width = 0, height = 0;

	var rand = function(min, max){
        return Math.floor( (Math.random() * (max - min + 1) ) + min);
    };


$(function(){

	generate();

	function getSize() {
		 width = window.innerWidth;
		// height
	}

	function createCloud() {

		// Create new div with random transform
		var div = document.createElement( 'div'  );
		div.className = 'cloudBase';
		var x = 256 - ( Math.random() * 512 );
		//var x = 0;
		var y = 256 - ( Math.random() * 512 );
		var z = 256 - ( Math.random() * 512 );
		var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px )';
		div.style.webkitTransform = t;
		div.style.MozTransform = t;
		div.style.oTransform = t;
		world.appendChild( div );

		// Creare random amount of clouds
		for( var j = 0; j < 5 + Math.round( Math.random() * 10 ); j++ ) {
			var cloud = document.createElement( 'img' );
			cloud.style.opacity = 0;
			var r = Math.random();
			var src = '../img/starmonsters/cloud.png';
			( function( img ) { img.addEventListener( 'load', function() {
				img.style.opacity = .8;
			} ) } )( cloud );
			cloud.setAttribute( 'src', src );
			cloud.className = 'cloudLayer';
			
			var x = 256 - ( Math.random() * 512 );
			//var x = 0;
			//var y = 256 - ( Math.random() * 512 );
			var y = 0;
			var z = 100 - ( Math.random() * 200 );
			//var z = 0;
			var a = Math.random() * 360;
			//var a = 0;
			var s = .25 + Math.random();
			x *= .2; y *= .2;
			cloud.data = { 
				x: x,
				y: y,
				z: z,
				a: a,
				s: s,
				speed: .1 * Math.random(),
				rotation_speed: 0.05* Math.random()
				//rotation_speed: 0.05* Math.random()
			};
			var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px ) rotateZ( ' + a + 'deg ) scale( ' + s + ' )';
			cloud.style.webkitTransform = t;
			cloud.style.MozTransform = t;
			cloud.style.oTransform = t;
		
			div.appendChild( cloud );
			layers.push( cloud );

		}
		
		return div;

	}

	// Generate clouds
	function generate() {
		objects = [];
		for( var j = 0; j < 5; j++ ) {
			objects.push( createCloud() );
		}
	}

	var page_y;
	//  Get mouse position
	window.addEventListener( 'mousemove', function( e ) {
		
		page_y = e.pageY;
		if (page_y >= 80 && page_y <= 680) {
			worldYAngle = -( .5 - ( e.clientX / window.innerWidth ) ) * 180;
			worldYAngle = worldYAngle/20;

			worldXAngle = ( .5 - ( e.clientY / window.innerHeight ) ) * 180;
			worldXAngle = worldXAngle/10;

			updateView();
		}


	} );

	// Update View
	function updateView() {
		var t = 'translateZ( ' + d + 'px ) rotateX( ' + worldXAngle + 'deg) rotateY( ' + worldYAngle + 'deg)';
		world.style.webkitTransform = t;
		world.style.MozTransform = t;
		world.style.oTransform = t;
	}


	update();
	// Update clouds rotation
	function update (){
		
		for( var j = 0; j < layers.length; j++ ) {
			var layer = layers[ j ];
			layer.data.a += layer.data.rotation_speed;
			var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
			layer.style.webkitTransform = t;
			layer.style.MozTransform = t;
			layer.style.oTransform = t;
		}
		
		requestAnimationFrame( update );
		
	}



})
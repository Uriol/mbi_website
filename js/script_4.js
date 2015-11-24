var star_layers = [],
	star_objects = [];

$(function(){

	generateStars();

	function createStar() {

		// Crete new div with random transform
		var div = document.createElement( 'div' );
		div.className = 'starBase';

		//var x = 256 - ( Math.random() * window.innerWidth );
		var random = Math.random();
		if (random >= 0.5) {
			random = 1;
		} else {
			random = -1;
		}
		var x = (Math.random() * window.innerWidth)*random;
		//console.log(x)
		//var x = 200;
		var y = rand(-400, -800);
		var z = 256 - ( Math.random() * 512 );
		var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px )';
		div.style.webkitTransform = t;
		div.style.MozTransform = t;
		div.style.oTransform = t;
		world.appendChild( div );

		// Create random amount of stars
		for( var i = 0; i < 3 ; i++ ) {
			
			var star = document.createElement( 'img' );
			star.style.opacity = 0;
			var r = Math.random();
			var src = 'img/star.png';
			( function( img ) { img.addEventListener( 'load', function() {
				img.style.opacity = .8;
			} ) } )( star );
			star.setAttribute( 'src', src );
			star.className = 'starLayer';

			//var x = 256 - ( Math.random() * 512 );
			var x = (Math.random() * window.innerWidth)*random;
			var y = rand(-400, -800);
			var z = 100 - ( Math.random() * 200 );
			var a = Math.random() * 360;
			//console.log(a);
			//var s = .25 + Math.random();
			//var s = .25;
			var s = rand(25, 50)/100;
			//console.log(s);
			x *= .2; y *= .2;
			star.data = { 
				x: x,
				y: y,
				z: z,
				a: a,
				s: s,
				//speed: .1 * Math.random()
				//speed: Math.random()
				speed: rand(5,30)/10,
				y_speed: rand(5,8),
				x_speed: rand(0, 4),
				random: Math.random()
			};
			//console.log(star.data.speed)
			var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px ) rotateZ( ' + a + 'deg ) scale( ' + s + ' )';
			star.style.webkitTransform = t;
			star.style.MozTransform = t;
			star.style.oTransform = t;
		
			div.appendChild( star );
			star_layers.push( star );
		}

		return div;
	}

	// Generate stars
	function generateStars() {

		star_objects = [];
		// if ( world.hasChildNodes() ) {
		// 	while ( world.childNodes.length >= 1 ) {
		// 		world.removeChild( world.firstChild );       
		// 	} 
		// }
		for( var j = 0; j < 5; j++ ) {
			star_objects.push( createStar() );
		}
	}

	update_stars();
	// Update stars position and rotation
	function update_stars() {

		for (var n = 0; n < star_layers.length; n++) {
			
			var star_layer = star_layers[ n ];

			var random = Math.random();
			if (random >= 0.5) {
				random = 1;
			} else {
				random = -1;
			}

			if (star_layer.data.random >= 0.5) {
				star_layer.data.random = 1;
			} else {
				star_layer.data.random = -1;
			}

			
			// Detect when y pos is under the viewport
			if (star_layer.data.y >= 1500) {
				star_layer.data.y = rand(-400, -800);
				star_layer.data.x = (Math.random() * window.innerWidth)*random;
			}
			star_layer.data.a += star_layer.data.speed;
			star_layer.data.y += star_layer.data.y_speed;
			star_layer.data.x += (star_layer.data.x_speed)*star_layer.data.random;
			var t = 'translateX( ' + star_layer.data.x + 'px ) translateY( ' + star_layer.data.y + 'px ) translateZ( ' + star_layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + star_layer.data.a + 'deg ) scale( ' + star_layer.data.s + ')';
			star_layer.style.webkitTransform = t;
			star_layer.style.MozTransform = t;
			star_layer.style.oTransform = t;
		}

		requestAnimationFrame( update_stars );
	}




});
var star_layers = [],
	star_objects = [];

var star_layer;
var final_trajectory_difference = 1000;

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
			var src = 'img/star_5.png';
			( function( img ) { img.addEventListener( 'load', function() {
				img.style.opacity = 0.8;
			} ) } )( star );
			star.setAttribute( 'src', src );
			star.className = 'starLayer';

			// X
			var x = (Math.random() * window.innerWidth)*random;
			var final_trajectory_overflow_left = x - final_trajectory_difference;
			var final_trajectory_overflow_right = x + final_trajectory_difference;
			var final_x = rand(final_trajectory_overflow_left, final_trajectory_overflow_right);
			//console.log('start x: ' + x + ', final x: ' + final_x);
			// Y
			var y = rand(-400, -800);
			var final_y = 1200;
			var trajectory_angle = Math.atan2( final_y - y, final_x - x );
			//console.log(trajectory_angle)
			var z = 100 - ( Math.random() * 200 );
			//var a = Math.random() * 360;
			var a = 0;
			var s = rand(30, 120)/100;
			
			x *= .2; y *= .2;
			star.data = { 
				x: x,
				y: y,
				z: z,
				a: (trajectory_angle * (180/Math.PI))-90,
				s: s,
				speed: rand(50,60)/10,
				acceleration : 0.009,
				acceleration: Math.random()/100,
				vx: 0,
				vy: 0,
				trajectory_angle: trajectory_angle,
				// y_speed: rand(7,10),
				// x_speed: rand(1, 5),
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
		for( var j = 0; j < 5; j++ ) {
			star_objects.push( createStar() );
		}
	}

	update_stars();
	// Update stars position and rotation
	function update_stars() {

		for (var n = 0; n < star_layers.length; n++) {
			
			star_layer = star_layers[ n ];

			var random = Math.random();
			if (random >= 0.5) {
				random = 1;
			} else {
				random = -1;
			}
			// Detect when y pos is under the viewport
			if (star_layer.data.y >= 1200) {

				resetStar(star_layer);

			}
			
			// star_layer.data.y += star_layer.data.y_speed;
			//star_layer.data.x += (star_layer.data.x_speed)*star_layer.data.random;
			star_layer.data.vx = Math.cos(star_layer.data.trajectory_angle) * star_layer.data.speed;
			star_layer.data.vy = Math.sin(star_layer.data.trajectory_angle) * star_layer.data.speed;

			//star_layer.data.speed *= 1 + star_layer.data.acceleration;

			star_layer.data.x += star_layer.data.vx;
			star_layer.data.y += star_layer.data.vy;
			//console.log(star_layer.data.y)


			var t = 'translateX( ' + star_layer.data.x + 'px ) translateY( ' + star_layer.data.y + 'px ) translateZ( ' + star_layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + star_layer.data.a + 'deg ) scale( ' + star_layer.data.s + ')';
			star_layer.style.webkitTransform = t;
			star_layer.style.MozTransform = t;
			star_layer.style.oTransform = t;
		}

		requestAnimationFrame( update_stars );
	}


	function resetStar(star_layer) {
		
		var random = Math.random();
		if (random >= 0.5) {
			random = 1;
		} else {
			random = -1;
		}

		var x = (Math.random() * window.innerWidth)*random;
		var final_trajectory_overflow_left = x - final_trajectory_difference;
		var final_trajectory_overflow_right = x + final_trajectory_difference;
		var final_x = rand(final_trajectory_overflow_left, final_trajectory_overflow_right);
		var y = rand(-400, -800);
		var final_y = 1200;
		var trajectory_angle = Math.atan2( final_y - y, final_x - x );
		var z = 100 - ( Math.random() * 200 );
		var a = 0;
		var s = rand(25, 50)/100;

		// data
		star_layer.data.x = x;
		star_layer.data.y = y;
		star_layer.data.trajectory_angle = Math.atan2( final_y - y, final_x - x );
		star_layer.data.a = (star_layer.data.trajectory_angle * (180/Math.PI))-90;
		//star_layer.data.speed = rand(25,30)/10;

	}




});
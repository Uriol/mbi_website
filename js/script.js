//  Example
// http://codepen.io/jackrugile/pen/Jbnpv



var canvas, context;
var $particles = [], totalParticles = 50;

var color;

$(function(){

	canvas = document.getElementById('canvas_sky');
	context = canvas.getContext('2d');

	reSize(); 
	function reSize(){
			
		$('#canvas_sky').attr('width', window.innerWidth);
		$('#canvas_sky').attr('height', 610);

	}

	createParticles();
	// Create particles
	function createParticles() {
		for(var i = 0; i < totalParticles; i++) {
			$particles[i] = new Particle();
			$particles[i].reset();
		}
	}

	// Define particle
	function Particle() {

		this.settings = { max_radius: 6, x_speed_max: 0.4, y_speed_max: 0.6 };

		// Set positions and size
		this.reset = function() {

			// this.x = canvas.width*Math.random();
			// this.y = -10;
			this.radius = Math.floor(Math.random() * 3) + 4;
			// this.x_speed = (Math.random()*this.settings.x_speed_max) * (Math.random() < .5 ? -1 : 1);
			// this.y_speed = (Math.random()*this.settings.y_speed_max) * (Math.random() < .5 ? -1 : 1);

			//  
			this.overflow = 100;
			this.left_overflow_max = 0 - this.overflow;
			this.right_overflow_max = canvas.width + this.overflow;
			// Start and final trajectory positions
			this.startX = Math.floor(Math.random() * (this.right_overflow_max + this.left_overflow_max)) + this.left_overflow_max;
			// console.log('start x: ' + this.startX);
			this.final_trajectory_difference = 600;
			this.final_trajectory_overflow_left = this.startX - this.final_trajectory_difference;
			this.final_trajectory_overflow_right = this.startX + this.final_trajectory_difference;
			this.finalX = Math.floor(Math.random() * (this.final_trajectory_overflow_left + this.final_trajectory_overflow_right)) + this.final_trajectory_overflow_left;
			// console.log('final x: ' + this.finalX);
			this.startY = -20;
			this.finalY = 610;
			this.trajectory_angle = Math.atan2(this.finalY - this.startY, this.finalX - this.startX);
			this.speed = 1.5;
			this.acceleration = 0.05;
			this.vx = 0;
			this.vy = 0;
			this.x = this.startX;
			this.y = this.startY;
			//console.log('this speed: ' + this.x_speed);

		}


		this.draw = function() {

			// Draw
			context.beginPath();
			context.arc(this.x, this.y, this.radius, 0, Math.PI*2, true);
			context.closePath();
			// Fill
			color = 'white';
			context.fillStyle = color;
			context.fill();

		}

		this.move = function() {

			// this.x += this.x_speed;
			// this.y += this.y_speed;
			this.vx = Math.cos(this.trajectory_angle) * this.speed;
			this.vy = Math.sin(this.trajectory_angle) * this.speed;
			// this.vx += this.speed;
			// this.vy *=  Math.sin(this.angle) * this.speed;
			
			this.speed *= 1 + this.acceleration;
			// this.x += this.speed;
			// this.y += this.speed;
			this.x += this.vx;
			this.y += this.vy;

			if (this.y >= 600) {
				this.y = 0;
				this.speed = 1.5;
			}

		}

	}


	// Draw particles
	function draw() {
		context.clearRect(0,0, canvas.width, canvas.height);

		// Draw all particles
		for(var i = 0; i < $particles.length; i++) {

			$particles[i].move();
			$particles[i].draw();

		}
	}

	render();
	function render(){
		requestAnimationFrame( render );
		draw();

		context.fillStyle = "blue";
		context.fillRect(10, 10, 100, 100);

	}

	
	window.addEventListener("resize", function() {
		
		reSize(); 

	}, false);


})
//  Example
// http://codepen.io/jackrugile/pen/Jbnpv



var canvas, ctx;
var $particles = [], totalParticles = 0;
var particlesCount = 100, 
	particlesFull = false,
	hueRange = 50,
	globalTick = 0;


var counter = -400;

var color;

var rand = function(min, max){
        return Math.floor( (Math.random() * (max - min + 1) ) + min);
    };

$(function(){

	canvas = document.getElementById('canvas_sky');
	ctx = canvas.getContext('2d');

	reSize(); 
	function reSize(){
			
		$('#canvas_sky').attr('width', window.innerWidth);
		$('#canvas_sky').attr('height', 600);

	}

	// createParticles();
	// //Create particles
	// function createParticles() {
	// 	for(var i = 0; i < totalParticles; i++) {
	// 		$particles[i] = new Particle();
	// 		$particles[i].reset();
	// 	}
	// }
	function createParticles() {
		if( !particlesFull ) {

			if($particles.length > particlesCount) {
				particlesFull = true;
			} else {
				$particles.push(new Particle());
			}

		}
	}

	// Define particle
	var Particle = function(){
		this.reset();
	}
	// function Particle() {
	// 	this.reset();
	// };


		// Set positions and size
		Particle.prototype.reset = function() {

			
			//this.radius = Math.floor(Math.random() * 5) + 5;
			this.startRadius = rand(15, 25);
			this.radius = this.startRadius;
 
			this.overflow = 50;
			this.left_overflow_max = 0 - this.overflow;
			this.right_overflow_max = canvas.width + this.overflow;
			// Start and final trajectory positions
			this.startX = Math.floor(Math.random() * (this.right_overflow_max + this.left_overflow_max)) + this.left_overflow_max;
			this.final_trajectory_difference = 600;
			this.final_trajectory_overflow_left = this.startX - this.final_trajectory_difference;
			this.final_trajectory_overflow_right = this.startX + this.final_trajectory_difference;
			this.finalX = Math.floor(Math.random() * (this.final_trajectory_overflow_right + this.final_trajectory_overflow_left)) + this.final_trajectory_overflow_left;
			//this.startY = Math.floor(Math.random() * (820)) + (-800);
			this.finalY = 610;
			this.trajectory_angle = Math.atan2(this.finalY - this.startY, this.finalX - this.startX);
			//this.speed = (Math.floor(Math.random() * (25)) + (40)) / 100;
			
			this.speed = 0.5;
			// this.acceleration = 0.001;
			// this.vx = 0;
			// this.vy = 0;
			// this.x = this.startX;
			// this.y = this.startY;
			

			this.hue = 0;
  			this.saturation = 100;
  			this.lightness = 100;
  			this.startAlpha = 0.04;
			this.alpha = this.startAlpha;
			this.decayRate = .1;  
			this.startLife = 7;
			this.life = this.startLife;
			this.lineWidth = rand(1, 3);

			this.x = canvas.width/2 + (rand(0, 6) - 3);
			//this.y = 250;
			this.vx = 0;
			this.vy = 0;
			
			this.startY = 0;
			this.y = this.startY + counter;
			//this.y = 250;
			console.log(counter)

		}


		Particle.prototype.draw = function() {

			// Draw
			// context.beginPath();
			// context.arc(this.x, this.y, this.radius, 0, Math.PI*2, true);
			// context.closePath();
			// Fill
			// color = 'white';
			// context.fillStyle = color;
			// context.fill();

			ctx.beginPath();
			ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
			ctx.fillStyle = ctx.strokeStyle = 'hsla('+this.hue+', '+this.saturation+'%, '+this.lightness+'%, '+this.alpha+')';
			ctx.fill();
			ctx.stroke();

		}

		Particle.prototype.update = function() {



			this.vx += (rand(0, 200) - 100) / 150;
			this.vy -= (this.life/40);
			//this.vy = this.speed;
			this.x += this.vx;
			this.y += this.vy;  
			this.alpha = this.startAlpha * (this.life / this.startLife);
			//this.alpha = 100;
			this.radius = this.startRadius * (this.life / this.startLife);
			this.life -= this.decayRate; 
			
			// this.vx = Math.cos(this.trajectory_angle) * this.speed;
			// this.vy = Math.sin(this.trajectory_angle) * this.speed;
			
			// this.speed *= 1 + this.acceleration;
			
			// this.x += this.vx;
			// this.y += this.vy;

			

			// if (this.y >= 620) {
			// 	this.reset();
			// }

			if(
				//this.x > canvas.width + this.radius || 
				//this.x < -this.radius ||
				//this.y > canvas.height + this.radius ||
				//this.y < -this.radius ||
				this.life <= this.decayRate
			){
				//this.reset(); 

				this.startRadius = rand(15, 25);
				this.radius = this.startRadius;
				//console.log('reset')
				this.hue = 0;
	  			this.saturation = 100;
	  			this.lightness = 100;
	  			this.startAlpha = 0.04;
				this.alpha = this.startAlpha;
				this.decayRate = .1;  
				this.startLife = 7;
				this.life = this.startLife;
				this.lineWidth = rand(1, 3);

				this.x = canvas.width/2 + (rand(0, 6) - 3);
				//this.y = 250;
				this.y = this.startY + counter;    
				this.vx = 0;
				this.vy = 0;
			} 

		}
	

	var updateCounter = function(){
		counter += 4;
		if (counter >= 800) {
			counter = -400;
		}
		console.log(counter)
	}



	var updateParticles = function() {
		for(var i = 0; i < $particles.length; i++) {
			$particles[i].update();
		}
	}

	var drawParticles = function() {
		for(var i = 0; i < $particles.length; i++) {
			$particles[i].draw();
		}
	}

	var clear = function() {
		ctx.globalCompositeOperation = 'destination-out';
		ctx.fillStyle = 'hsla(0, 0%, 0%, .3)';
		ctx.fillRect(0, 0, canvas.width, canvas.height);
		ctx.globalCompositeOperation = 'lighter';
	}

	render();
	function render(){
		requestAnimationFrame( render );
		//ctx.clearRect(0,0, canvas.width, canvas.height);
		clear();
		createParticles(); 
		//draw();
		updateParticles();
		drawParticles();
		//console.log($particles.length)
		updateCounter();
	}

	
	window.addEventListener("resize", function() {
		
		reSize(); 

	}, false);


})
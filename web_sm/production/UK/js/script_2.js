//  Example
// http://codepen.io/jackrugile/pen/Jbnpv



var canvas, ctx;
var $particles = [], totalParticles = 3, total_sub_particles = 1;
var particlesCount = 200, 
	particlesFull = false,
	hueRange = 50,
	globalTick = 0;

var star_img = new Image();;


var color;

var rand = function(min, max){
        return Math.floor( (Math.random() * (max - min + 1) ) + min);
    };

$(function(){

	star_img.src = 'img/star_circle.png';

	canvas = document.getElementById('canvas_sky');
	ctx = canvas.getContext('2d');

	reSize(); 
	function reSize(){
			
		$('#canvas_sky').attr('width', window.innerWidth);
		$('#canvas_sky').attr('height', 600);

	}

	createParticles();
	//Create particles
	function createParticles() {
		for(var i = 0; i < totalParticles; i++) {
			$particles[i] = new Particle();
			$particles[i].reset();
		}
	}





		// Set positions and size
		function Particle() {

			this.reset = function() {
				//this.radius = Math.floor(Math.random() * 5) + 5;
				this.startRadius = rand(40, 60);
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
				this.startY = rand(-800, -20);
				this.finalY = 610;
				this.trajectory_angle = Math.atan2(this.finalY - this.startY, this.finalX - this.startX);
				//this.speed = (Math.floor(Math.random() * (25)) + (60)) / 100;
				this.speed = rand(3,4);
				
				
				this.acceleration = 0.01;
				this.vx = 0;
				this.vy = 0;
				this.x = this.startX;
				this.y = this.startY;

				this.degrees = 0;
				this.degrees_increment = rand(50,100)/100;

				this.subParticles = [];
				this.subParticle = []

				this.reset_subParticles();

				this.hue = 0;
	  			this.saturation = 100;
	  			this.lightness = 100;
	  			this.startAlpha = 0.04;
				this.alpha = this.startAlpha;
				this.decayRate = .1;  
				this.startLife = 7;
				this.life = this.startLife;

				this.stroke = rand(3,4);

		}

		this.reset_subParticles = function(){

				for (var i = 0; i < total_sub_particles; i++) {
					
					// vx
					//this.subParticle[0] = 0;
					// vy
					// this.subParticle[1] = 0;
					// x position
					this.subParticle[0] = 0;
					// y position
					this.subParticle[1] = 0;
					// this start radius
					this.subParticle[2] = 0;
					// this radius
					this.subParticle[3] = rand(15, 25);
					// this x speed
					this.subParticle[4] = 0;
					// this y speed
					this.subParticle[5] = rand(0.5, 10);
					


					this.subParticles.push(this.subParticle);
				}

				//console.log(this.subParticles)
		}


		this.draw = function() {

			var sub_particle_vx = 0,
				sub_particle_vy = 0;
				sub_radius = 0,
				sub_particle_xpos = 0,
				sub_particle_ypos = 0;
 			// Draw subparticles
			for (var i = 0; i < this.subParticles.length; i++) {

				// Update subparticle
				sub_particle_vx += (rand(0, 200) - 100) / 150;

				//sub_particle_vy -= (this.life/40);
				//sub_radius = this.startRadius * (this.life / this.startLife);
				sub_radius = 50;

				// This x
				// this.subParticles[i][4] += (rand(0, 200) - 100) / 1500;
				// sub_particle_xpos = this.x - this.subParticles[i][4];
				this.subParticles[i][4] += (rand(0, 200) - 100) / 150;
				sub_particle_xpos = this.x;
				sub_particle_xpos = this.x + this.subParticles[i][4];

				sub_particle_ypos = this.y - this.subParticles[i][5]; 

				//console.log(sub_particle_xpos)
				// This y
				// this.subParticles[i][1] -= sub_particle_vy;
				//this.subParticles[i][5] -= sub_particle_vy;

				// ctx.beginPath();
				// ctx.arc(sub_particle_xpos, sub_particle_ypos, sub_radius, 0, Math.PI * 2, false);
				// ctx.closePath();
				// ctx.fillStyle = "rgba(255,0,0, 0.5)";
				// ctx.fill();	
				
				//console.log(this.subParticles[i]);
				
			}




			ctx.beginPath();
			ctx.arc(this.x, this.y, this.radius/2+this.stroke, 0, Math.PI * 2, false);
			ctx.closePath();
			ctx.fillStyle = "rgba(255,255,255, 0.2)";
			ctx.fill();

			ctx.save();
			ctx.translate(this.x, this.y); 

			ctx.rotate(Math.PI / 180 * this.degrees);
			ctx.drawImage(star_img, 0-this.radius/2,0-this.radius/2, this.radius, this.radius);

			ctx.restore();


		}

		this.update = function() {


			// Update subparticles
			if (this.life <= this.decayRate) {
				this.startLife = 7;
				this.life = this.startLife;
			} else {
				this.life -= this.decayRate; 
			}
			


			this.degrees += this.degrees_increment;
			//console.log(this.degrees)
			
			this.vx = Math.cos(this.trajectory_angle) * this.speed;
			this.vy = Math.sin(this.trajectory_angle) * this.speed;
			
			this.speed *= 1 + this.acceleration;
			
			this.x += this.vx;
			this.y += this.vy;

			

			if (this.y >= 620) {
				this.reset();
			}


		}
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
		// ctx.globalCompositeOperation = 'destination-out';
		// ctx.fillStyle = 'hsla(0, 0%, 0%, .3)';
		// ctx.fillRect(0, 0, canvas.width, canvas.height);
		// ctx.globalCompositeOperation = 'lighter';
		ctx.clearRect(0, 0, canvas.width, canvas.height);
	}

	render();
	function render(){
		requestAnimationFrame( render );
		//ctx.clearRect(0,0, canvas.width, canvas.height);
		clear();
		
		//draw();
		updateParticles();
		drawParticles();
		//console.log($particles.length)
		
	}

	
	window.addEventListener("resize", function() {
		
		reSize(); 

	}, false);


})
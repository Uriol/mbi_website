function onLoad(){
	$('.loading').fadeOut(800);
}

var $company_images = [	'url("../../img/company/company_2.jpg")',
						'url("../../img/company/company_3.jpg")',
						'url("../../img/company/company_4.jpg")',
						'url("../../img/company/company_5.jpg")']

var $company_images_src = ['../../img/company/company_2.jpg',
							'../../img/company/company_3.jpg',
							'../../img/company/company_4.jpg',
							'../../img/company/company_5.jpg']

var index = 0;

var image_timeout = 6000;

$(function() {


	onLoad();

	loadImages()
	function loadImages(){
		img_1 = new Image();
		img_1.src = $company_images_src[0];
		img_2 = new Image();
		img_2.src = $company_images_src[1];
		img_3 = new Image();
		img_3.src = $company_images_src[2];
		img_4 = new Image();
		img_4.src = $company_images_src[3];
	}

	// Handle company images switch
	// Index on click
	$(document).on('click', '.company_index_item_off', function(){
		// Remove on class from gallery index item
		$('.company_index_item_on').removeClass().addClass('company_index_item_off');
		// Add class to clicked index gallery item
		$(this).removeClass().addClass('company_index_item_on');
		// Get index
		index = $(this).data('index');
		// Show new pic
		$('#company_image').css('background-image', $company_images[index]);
		// Reset timeout
		window.clearTimeout(next_image_timeOut);
		next_image_timeOut = setTimeout(function(){
			next_image();
		},image_timeout);

	})

	var next_image_timeOut = setTimeout(function(){
		next_image();
	}, image_timeout);

	// TimeOut image change
	function next_image(){
		index += 1;
		if (index >= $company_images.length){
			index = 0;
		}
		// Remove on class from gallery index item
		$('.company_index_item_on').removeClass().addClass('company_index_item_off');
		// Remove of class for new index
		$('.company_pictures_index_container').find("[data-index='" + index + "']").removeClass().addClass('company_index_item_on');
		// Show new pic
		$('#company_image').css('background-image', $company_images[index]);
		next_image_timeOut = setTimeout(function(){
			next_image();
		},image_timeout);

	}
});
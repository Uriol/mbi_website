
var index = 0;
var $series = ['series_one', 'special'];

function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
}

$(function(){

	onLoad();

	// Handle checklist switch from menu
	$(document).on('click', '.checklist_menu ul li.off', function(){
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		// Hide actual serie checklist
		$('#' + $series[index] + '_checklist').hide();
		// Update index
		index = $(this).data('index');
		// Show actual serie
		$('#' + $series[index] + '_checklist').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');

	})

});
$(function() {

	$(document).on('click', '.love', function() {
		//$(this).text('5');
		var self = this;
		var image_id = $(this).parents('.dog-image').data('image-id');
		console.log(image_id);	


		$.ajax({ url: 'test/' + image_id,
	        type: 'get',
	        success: function(data) {
	         	$(self).html(data.count);
	         	//console.log(output);
	     	}
		});
	});
});
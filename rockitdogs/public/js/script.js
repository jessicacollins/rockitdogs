$(function() {

	$(document).on('click', '.love', function() {
		//$(this).text('5');
		var self = this;
		var image_id = $(this).parents('.dog-image').data('image-id');
		//console.log(image_id);	

		// var love_count = $('.love').val();
		//  parseInt(love_count);
		// $(self).html(love_count);

		$.ajax({ url: 'community/addlove/' + image_id,
	        type: 'get',
	        success: function(data) {
	         	$(self).html(data.count);
	         	//console.log(output);
	     	}
		});

	});
});
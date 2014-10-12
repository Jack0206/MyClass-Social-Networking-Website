function processCard() {
	$('.card').hover(
		function() {
			if ($(this).is('.board')) { 
                //obselate - this is for no img board
				color = $(this).find('.board-name-wrapper').css('background-color');
				$(this).css('border-color', color).find('.board-name-wrapper').css('border-color', color);
			} else {
                //change color and border style
				//$(this).css({'background-color': '#F4F4F4', 'border-color': '#C1C1C1'}).find('.card-image').css('border-color', '#C1C1C1');
                
                //shadow style
                //$(this).css('box-shadow', '0 0 4px rgba(0, 0, 0, 0.2), 0 0 40px rgba(0, 0, 0, 0.1) inset'); //in and out
                $(this).css('box-shadow', '0 0 40px rgba(0, 0, 0, 0.1) inset'); //in only
                
                //$(this).find('.status').css({'background-color': '#CC0000', 'padding': '2px 4px 2px 4px'});
                $(this).find('.status').css('background-color', '#CC0000');
			}
		},
		function() {
			if ($(this).is('.board')) {
                //obselate - this is for no img board
				$(this).css('border-color', '#E1E1E1').find('.board-name-wrapper').css('border-color', '#E1E1E1');
			} else {
                //change color and border style
				//$(this).css({'background-color': '#FFFFFF', 'border-color': '#C1C1C1'}).find('.card-image').css('border-color', '#C1C1C1');
                
                //shadow style
                $(this).css('box-shadow', '');
                
                //$(this).find('.status').css({'background-color': '#666666', 'padding': '1px 2px 1px 2px'});
                $(this).find('.status').css('background-color', '#666666');
			}
		}
	); //end hover

	//$('.board_with_article').hover(
	//	function() {
	//		color = $(this).find('.recommend_board_title').css('background-color');
	//		$(this).css('border-color', color);
	//	},
	//	function() {
	//		$(this).css('border-color', '#D8D5D0');
	//	}
	//); //end hover
}

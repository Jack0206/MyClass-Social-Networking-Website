function processBlockEditButton()
{
	// 處理event_block右下角的灰色"編輯/互動"按鍵: 也許會被"群組""朋友""討論版"版面共用, 到時就要搬到公共的js file
	$('.gray_button').hide();
	$('#event_panel .event_block, #board_panel .board_block').hover(
		function() {
			$(this).find('.gray_button').fadeIn(50);
		},
		function() {
			$(this).find('.gray_button').fadeOut(100);
		}
	); // hover
}

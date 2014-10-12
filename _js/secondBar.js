function processSecondBar() 
{
	$('#second_bar a').click(function() {
        // remember current scroll position
        var tempScrollTop = $(window).scrollTop();
        
		// hide all panels first
		$('.panel').hide();
		
		// 改變被選到的tab的顏色
		$('#second_bar a.active').removeClass('active');
        $(this).removeClass('hovered');
		$(this).addClass('active').blur();

		// retrieve href from link (is id of panel to display)
		var selectedPanel = $(this).attr('href');
		// show panel
		$(selectedPanel).show();

		// 把本來打開的隱私選單關起來
		$(selectedPanel).siblings().find('.private_list').hide();

        // restore scroll position
        $(window).scrollTop(tempScrollTop);
        
		return false;
	}); // end click

	$('#second_bar a').hover(
        function() {
            if (!$(this).hasClass('active')){
		        $(this).addClass('hovered').blur();
            }
        },
        function() {
            if (!$(this).hasClass('active')){
		        $(this).removeClass('hovered').blur();
            }
        }
    );

	// 點動態牆tab, 讓一進個人首頁就看到動態牆
	$('#second_bar a').eq(1).click();
}

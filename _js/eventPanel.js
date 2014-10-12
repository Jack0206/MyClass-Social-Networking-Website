function processEventPanel()
{
    //filter button
    $('#event_panel .filter_botton').toggle(
        function() {
            $('#event_panel .filter_dropdown_list_div').show();
        },
        function() {
            $('#event_panel .filter_dropdown_list_div').hide();
        }
    );
    
    //filter dropdown list
    $('#event_panel .filter_selection').hover(
        function() {
            $(this).css('color', '#2CB4DA');
        },
        function() {
            $(this).css('color', '#333333');
        }
    ).click(function() {
		var new_text = $(this).text();
		$(this).parent().parent().find('.filter_selected').html(new_text);
    });

	// when clicked: 
	// show all monthly_event_wrapper and br => hide all event_block => filtering => show some event_block => hide some monthly_event_wrapper and br

	// 之後也許會改成每個filter button有對應的block, 當filter button 被按, 就把其他的block都整個hide. 
	// 優點: 易於用ajax更新各個頁面
	// 缺點: 1. 會有重複的event_block(ex.某個event_block屬於兩個filter block, 就會有兩份copy) 2. 如果有"所有event"按鍵, 則還是要把event按照時間插入"所有event"block
	$('#all_event_filter, #joined_event_filter, #created_event_filter, #invited_event_filter, #cared_event_filter').click(function() {

        // 把load more button 顯示出來
        $('.load_more').show();
		// 把所有之前插入的no_event_title
		$('.no_event_title').remove();
		// 先把所有event_wrapper都show出來, 因為之後要把達成某些條件的hide起來
		$('.monthly_event_wrapper').show();
		// 先把所有event_block都hide起來, 因為之後要把達成某些條件的show出來
		$('.event_block').hide();

		// 查看是哪個按鍵, 並show出對應的
        if ($(this).is('#all_event_filter')) {
            $('.event_block').show();
        } else if ($(this).is('#joined_event_filter')) {
			$('.event_block.joined, .event_block.requested, .event_block.created').show();
		} else if ($(this).is('#created_event_filter')) {
			$('.event_block.created').show();
		} else if ($(this).is('#invited_event_filter')) {
			$('.event_block.invited').show();
		} else if ($(this).is('#cared_event_filter')) {
			$('.event_block.cared').show();
		}

		// hide空掉的monthly_event_wrapper和hr
		$('.monthly_event_wrapper').each(function() {
			if ($(this).find('.event_block:visible').length == 0) {
				$(this).hide();
			}
		}); // each
		
		// 印出"尚未有XXX event"的文字
		if ($('.monthly_event_wrapper:visible').length == 0) {
            // 隱藏load more button
            $('.load_more').hide();
            
			if ($(this).is('#joined_event_filter')) {
				$('#event_panel .control_panel').after('<div class="no_event_title">您尚未加入任何活動</div>');
			} else if ($(this).is('#created_event_filter')) {
				$('#event_panel .control_panel').after('<div class="no_event_title">您尚未建立任何活動</div>');
			} else if ($(this).is('#invited_event_filter')) {
				$('#event_panel .control_panel').after('<div class="no_event_title">您沒有受邀於任何活動</div>');
			} else if ($(this).is('#cared_event_filter')) {
				$('#event_panel .control_panel').after('<div class="no_event_title">您尚未關注任何活動</div>');
			}
		}
	}); // click
}

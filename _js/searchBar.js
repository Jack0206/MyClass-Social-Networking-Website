function processSearchBar() 
{
	// dropdown list 的按鍵. 被click後, 其下的'.search_bar_dropdown_list_div'若是隱藏狀態, 則改成顯示; 若是顯示狀態, 則改成隱藏.
	// 另外如果'.search_bar_dropdown_list_wrapper'已經被底下的code標成'.disabled', 就不做任何事.
	$('.search_bar_dropdown_list_wrapper').click(
		function() {
			if (!$(this).is('.disabled')) {
				var child_dropdown_list_div = $(this).find('.search_bar_dropdown_list_div');
				var isHidden = child_dropdown_list_div.is(':hidden');

				// 先把所有'.search_bar_dropdown_list_div'都Hide起來
				$('.search_bar_dropdown_list_div').hide();
				// 再看看是否要把被點到的'.search_bar_dropdown_list_div'打開
				if (isHidden == true) {
					child_dropdown_list_div.fadeIn(100);
				} else {
					child_dropdown_list_div.fadeOut(50);
				}
			}
			return false;
		}
	).hover( // end click
		function() { 
			if (!$(this).is('.disabled')) {
				$(this).css('background-color', '#FAF9F7');
			}
		},
		function() {
			if (!$(this).is('.disabled')) {
				$(this).css('background-color', '#f5f5f5');
			}
		}
	); // end hover

	// dropdown list 按鍵裡的選項 li
	$('.search_bar_dropdown_list_wrapper li').hover(
		function() {
			$(this).css('color', '#2CB4DA');
		},
		function() {
			$(this).css('color', '#333333');
		}
	).click( // end hover
		function() {
			// 把顯示的字換成被選到的li
			var new_text = $(this).text();
			$(this).parent().parent().parent().find('h8').html(new_text);
			
			// 對個別的按鍵進行處理: group class, group type, event type, board type等等
			var clickedList = $(this).parent();
			if (clickedList.is('#group_class_list')) {
				processGroupClass(new_text);
			} else if (clickedList.is('#board_type_list')) {
				processBoardType(new_text);
			}
		}
	); // end click

	$('#keyword_input').bind({
		'focus' : function() {
			if ($(this).val() == "請輸入關鍵字") {
				$(this).val("").css('color', '#333333');
			}
		}, // end focus 
		'blur' : function() {
			if (!$(this).val()) {
				$(this).val("請輸入關鍵字").css('color', '#b6b6ae');
			}
		} // end blur
	}); // end bind
}

function processGroupClass(selectedClass)
{
	// 檢查是否選到"班版", 如果是的話, 要把"群組性質的"的按鍵'.search_bar_dropdown_list_wrapper'標成'.disable'.
	var regex = /班版$/;
	var group_type_dropdown_list_wrapper = $('#group_type_list').parent().parent();
	if (regex.test(selectedClass)) {
		group_type_dropdown_list_wrapper.addClass("disabled").css({'color':'#b6b6ae' , 'cursor':'default'}).
		find('h8').text("不拘").next().hide();
	} else {
		group_type_dropdown_list_wrapper.removeClass("disabled").css({'color':'#333333' , 'cursor':'pointer'}).
		find('img').show();
	}
}

function processBoardType(selectedType) 
{
	// 把沒被選到的類別的討論版都隱藏起來
	$('.board_type_title').each(function() {
		if ($(this).text() == selectedType || selectedType == "不拘") {
			$(this).parent().show();
		} else {
			$(this).parent().hide();
		}
	}); // end each
}


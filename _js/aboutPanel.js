function processAboutPanel()
{
	// 為了支援no js用戶, "編輯"按鈕剛開始要是顯示狀態!
	$('#about_panel .hidden-button').hide();

	$('.about_block').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').fadeIn(100);
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover

	$('#about_panel .hidden-button').click(function() {
		var selectedBlock = $(this).parent().parent();

		switch (selectedBlock.attr('id')) {
			case "description_block":
			case "hobbit_block":
				processTextAreaEdit(selectedBlock);
				break;
			case "info_block":
			case "education_block":
			case "work_block":
				processEntryEdit(selectedBlock);
				break;
		}
	}); // end click

	$('#about_panel .cancel-button').click(function() {
		var selectedBlock = $(this).parent().parent();

		switch (selectedBlock.attr('id')) {
			case "description_block":
			case "hobbit_block":
				processTextAreaCancel(selectedBlock);
				break;
			case "info_block":
			case "education_block":
			case "work_block":
				processEntryCancel(selectedBlock);
				break;
		}
	}); // end click
}

/* 處理textarea類的表單修改: 關於我, 興趣 */
function processTextAreaEdit(selectedBlock)
{
	var pElement = selectedBlock.find('p');
	var pText = pElement.text();

	pElement.hide().before('<textarea rows="5"></textarea>');
	pElement.siblings('textarea').val(pText).fadeIn(200).focus();
	selectedBlock.find('.hidden-button').addClass('is_clicked').hide();
	selectedBlock.find('input:not(.hidden-button)').show();
}

function processTextAreaCancel(selectedBlock)
{
	var pText = selectedBlock.find('p').text();

	selectedBlock.find('textarea').remove();
	selectedBlock.find('p').show();
	selectedBlock.find('.hidden-button').removeClass('is_clicked');
	selectedBlock.find('input').hide();
}

/* 處理input entry類的表單修改: 基本資料, 學校經歷, 工作 */
function processEntryEdit(selectedBlock)
{
	// input entry類的表單裡, 一個td裡面有一個input後面連接著其相對的span, ex. <td><input class="hidden"><span>02/06/1984</span></td>
	selectedBlock.find('span').each(function() {
		var spanText = $(this).text();
		$(this).hide();
		$(this).prev().val(spanText).show();
	}); // each

	selectedBlock.find('.hidden-button').addClass('is_clicked').hide();
	selectedBlock.find('input:not(.hidden-button)').show();
}

function processEntryCancel(selectedBlock)
{
	// input entry類的表單裡, 一個td裡面有一個input後面連接著其相對的span, ex. <td><input class="hidden"><span>02/06/1984</span></td>
	selectedBlock.find('span').each(function() {
		var spanText = $(this).text();
		$(this).prev().val("").hide();
		$(this).show();
	}); // each

	selectedBlock.find('.hidden-button').removeClass('is_clicked');
	selectedBlock.find('input').hide();
}








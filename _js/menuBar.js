function processMenuBar() {        
    var url = window.location.toString();
    var selectedTab;

    // 把相關的tab(群組, 活動...)標成'.selected'
    if (url.indexOf("findGroup.php") != -1 || url.indexOf("createGroup.php") != -1) {
        selectedTab = $('#group_tab');
    } else if (url.indexOf("findEvent.php") != -1 || url.indexOf("createEvent.php") != -1) {
        selectedTab = $('#event_tab');
    } else if (url.indexOf("findUser.php") != -1) {
        selectedTab = $('#user_tab');
    } else if (url.indexOf("findBoard.php") != -1) {
        selectedTab = $('#board_tab');
    }

    if (typeof(selectedTab) != 'undefined') {
        selectedTab.addClass("selected").find('.menu_big_chi').addClass("selected").next().addClass("selected");
    }

    // 先把所有dropdown menutabs藏起來
    //$('.menu_tabs_dropdown_link').hide();

    $('.menu_tabs li').hover(
            function() {
                if (!$(this).is('.selected')) {
            	    //$(this).css('background-color', '#e51937').find('.menu_big_chi').css('color', '#FFFFFF');
                    //$(this).css('background-color', '#F6F6F6');
                    $(this).css('background-image', 'linear-gradient(#FFFFFF, #E1E1E1)');
                    //$(this).find('.menu_big_chi').css('color', '#444444');
            	    //$(this).find('.menu_small_chi').css('color', '#888888');
                    //$(this).find('.menu_tabs_dropdown_link').fadeIn(30);
                }
            }, // mouseover
            function() {
		        if (!$(this).is('.selected')) {
                    $(this).css('background-image', '').find('.menu_big_chi').css('color', '#e51937');
		            //$(this).find('.menu_small_chi').css('color', '#999999');
		        }
        	    //$(this).find('.menu_tabs_dropdown_link').hide();
            } // mouseout
    ); // hover

    /*
    $('.menu_tabs_dropdown_link').hover(
            function() {
            	$(this).css({'background-color':'#FFFFF2', 'color':'#e51937'});
            }, // mouseover
            function() {
            	$(this).css({'background-color':'#e51937', 'color':'#FFFFFF'});
            } // mouseout
    ); // hover
    */
}

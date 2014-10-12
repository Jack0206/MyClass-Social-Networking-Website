<?php
// 建立 session
if (!isset($_SESSION)) {
  	session_start();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="../css/form.css" type="text/css" rel="stylesheet">
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/user.css" type="text/css" rel="stylesheet">
        <link href="../css/about.css" type="text/css" rel="stylesheet">
        <link href="../css/album.css" type="text/css" rel="stylesheet">
        <link href="../css/group.css" type="text/css" rel="stylesheet">
        <link href="../css/event.css" type="text/css" rel="stylesheet">
        <link href="../css/wall.css" type="text/css" rel="stylesheet">
        <link href="../css/settin.css" type="text/css" rel="stylesheet">
        <!--<link href="../css/article.css" type="text/css" rel="stylesheet">-->
	<link href="../fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
        <script src="/MyClass/_js/jquery-1.7.2.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
	<script src="../_js/secondBar.js"></script>
	<script src="../_js/aboutPanel.js"></script>
	<script src="../_js/wallPanel.js"></script>
	<script src="../_js/eventPanel.js"></script>
	<script src="../_js/card.js"></script>
	<script src="../_js/blockEditButton.js"></script>

	<!--<script src="../_js/jquery.easing.1.3.js"></script> 先disable, 省去不必須的下載-->
	<script src="../fancybox/jquery.fancybox-1.3.4.min.js"></script>
        <script>

            $(document).ready(function() {
               			// Process Menu Bar
				processMenuBar();
        		
				// Process User Background Area. Disable 小圖片
				preocessUserBackground();
        		
				// Process Card 
				processCard();
				
				// Process Setting Panel
				//processSettingPanel();
        		
				// Process About Panel
				processAboutPanel();
        		
				// Process Wall Panel
				processWallPanel();
				
				// Process Event Panel
				processEventPanel();
        		
				// Process Second Bar: 需放在processEventPanel()後, 否則會把event都hide起來
				processSecondBar();

				// Process Block Edit Button (group_block, user_block, board_block, event_block 右下角gray_button)
				processBlockEditButton();

				// Process Fancybox
				$('#gallery a').fancybox({
					overlayColor: '#666',
					overlayOpacity: .05,
					transitionIn: 'elastic',
					transitionOut: 'elastic',
					//easingIn: 'easeInSine', 省去不必須的下載(easing.js)
					//easingOut: 'easeOutSine',
					titlePosition: 'inside' ,		
					cyclic: true
				});
            }); // ready

        </script>
    </head>
    <body>
	<div style="margin:auto;box-shadow: 0px 0px 2px 1px #D8D5D0">
	    <?php 
	    /* include top menu bar */ 
	    require_once('../menubar.php'); 
	    ?>
        <div id="user_background" class="boy_user_background">
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/tall_pic.jpg" width="180px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/wide_pic_4.jpg" width="280px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/girl3.jpg" width="250px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/wide_pic.jpg" width="290px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/wide_pic_2.jpg" width="280px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/nature.jpg" width="250px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/wide_pic_3.jpg" width="290px" height="200px">
                </a>
            </div>
            <div class="user_back_img_block">
                <a href="">
                    <img src="../Pics/girl4.jpg" width="180px" height="200px">
                </a>
            </div>
	    	<div id="user_profile_block">
                <a href="">
	    	        <img class="user_profile_img" src="../Pics/girl5.jpg">
                </a>
        		<div class="user_profile_text">
                    <div>
                        Puff001
                    </div>
                    <div>
                        郭雪芙
                    </div>
                </div>
	    	</div>
        
	    	<!--<span id="hide_background_button" style="position:absolute;left:46%;bottom:1px;color:#333333;background-color:#edebe2;padding:5px 10px;border-radius:10px 10px 0 0;box-shadow:0px 0px 2px 1px #acacac;cursor:pointer">最小化背景圖片</span>-->
	    </div>
	    <div id="second_bar">
	    	<ul>
	    		<li><a href="#about_panel"><img src="../Pics/Paper.png" width=30px>個人資料</a></li>
	    		<li><a href="#wall_panel"><img src="../Pics/profile.png" width=30px>動態</a></li>
	    		<li><a href="#album_panel"><img src="../Pics/ticket-icon.png" width=30px>相簿</a></li>
	    		<li><a href="#friend_panel"><img src="../Pics/notes-edit.png" width=30px>朋友</a></li>
	    		<li><a href="#group_panel"><img src="../Pics/pen-2.png" width=30px>群組</a></li>
	    		<li><a href="#event_panel"><img src="../Pics/calendar-icon.png" width=30px>活動</a></li>
	    		<li><a href="#article_panel"><img src="../Pics/checklist-2.png" width=30px>文章</a></li>
	    		<!-- 
                    <li><a href="#board_panel"><img src="../Pics/list-plus.png" width=30px>討論版</a></li> 
                -->
                <li><a href="#setting_panel"><img src="../Pics/setting.png" width=30px>設定</a></li>
	    	</ul>
	    </div>
        <div id="panel_continer">
	    <?php 
	        require_once('aboutPanel.php'); 
	        require_once('wallPanel.php'); 
	        require_once('albumPanel.php'); 
	        require_once('friendPanel.php'); 
	        require_once('groupPanel.php'); 
	        require_once('eventPanel.php'); 
	        require_once('articlePanel.php'); 
	        require_once('settingPanel.php'); 
	        //require_once('boardPanel.php');
	    ?> 
	    </div>
    </div>
    </body>
</html>

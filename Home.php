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
        <link href="./css/main.css" type="text/css" rel="stylesheet">
        <link href="./css/board.css" type="text/css" rel="stylesheet">
        <link href="./css/user.css" type="text/css" rel="stylesheet">
        <link href="./css/event.css" type="text/css" rel="stylesheet">
        <link href="./css/group.css" type="text/css" rel="stylesheet">
        <script src="/MyClass/_js/jquery-1.7.2.min.js"></script> 
	<script src="./_js/menuBar.js"></script>
    <script src="./_js/card.js"></script>
        <script>
            $(document).ready(function() {
                /* ------------------------------------ Process Menu Bar ----------------------------------- */
		        processMenuBar();
                processCard();
            }); // ready
        </script> 
    </head>
<body>
	<?php 
	    /* include top menu bar */ 
	    require_once('./menubar.php'); 
	?>
    <div id="HomeAd">
        <img id="HomeAd_pic" src="./Pics/Ad.png">
    </div>
    <div id="home_content_wrapper">
        <div id="home_content_left">
        	<?php 
        	    /* include recommend block 1 */ 
        	    require_once('./recommend_wrapper_1.php'); 
        	?>
        	<?php 
        	    /* include recommend block 4 */ 
        	    require_once('./recommend_wrapper_4.php'); 
        	?>
        </div>
        <div id="home_content_right">
        	<?php 
        	    /* include recommend block 2 */ 
        	    require_once('./recommend_wrapper_5.php'); 
        	?>
        	<?php 
        	    /* include recommend block 3 */ 
        	    require_once('./recommend_wrapper_6.php'); 
        	?>
        	<?php 
        	    /* include recommend block 5 */ 
        	    require_once('./recommend_wrapper_2.php'); 
        	?>
        	<?php 
        	    /* include recommend block 5 */ 
        	    require_once('./recommend_wrapper_3.php'); 
        	?>
        </div>
    </div>
</body>
</html>

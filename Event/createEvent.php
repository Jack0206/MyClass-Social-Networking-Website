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
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <link href="../css/form.css" type="text/css" rel="stylesheet">
    <script src="/MyClass/_js/jquery-1.7.2.min.js"></script> 
	<script src="../_js/jquery.validate.min.js"></script>
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/form.js"></script>
    <script>
        $(document).ready(function() {
            // Process Menu Bar
			processMenuBar();
			// Process Form
			processCreateEventForm();
        }); // ready
    </script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div id="create-event-form-wrapper" class="form-wrapper">
		<h1>登入</h1><br/>
		<form action="/MyClass/Event/createEvent.php" method="post" name="create-event-form" id="create-event-form">
			<div class="row">
				<label for="account" class="describe-label">帳號</label>
				<input name="account" type="text" id="account" maxlength="32" size="24">
			</div>
			<div class="row">
				<label for="password" class="describe-label">密碼</label>
				<input name="password" type="password" id="password" maxlength="32" size="24">
			</div>
			<div class="row">
				<input type="checkbox" name="stay-sign-in" id="stay-sign-in">
				<label for="stay-sign-in" class="checkbox-label">
					保持登入
				</label>
			</div>
			<div>
				<input type="submit" class="submit-button" name="submitLogInForm" id="submitLogInForm" value="送出">
			</div>
		</form>
		<div><a href="" style="float: right; margin-top: 15px; font-size: 90%;">無法登入</a></div>
	</div>
</body>
</html>

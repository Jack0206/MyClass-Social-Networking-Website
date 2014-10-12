<?php require_once('../connection.php'); ?>
<?php require_once('../function.php'); ?>
<?php
// 建立 session
if (!isset($_SESSION)) {
  session_start();
}

if ((isset($_POST["register_submitted"])) && ($_POST["register_submitted"] == "register_submitted")) 
{
	// 選擇 MySQL 資料庫users
	mysql_select_db('MyClass', $connection) or die('資料庫MyClass不存在');

  	// 查詢user資料表是否已有同名的username
  	$query = sprintf("SELECT username FROM user WHERE username=%s",
        GetSQLValue($_POST['account'], "text")); 
    	$result = mysql_query($query, $connection) or die(mysql_error());

	if ($result) {
    		if (mysql_num_rows($result)) {
			$_SESSION['username_exit'] = $_POST['account'];
    			header("Location: http://localhost/MyClass/User/registerUser.php");
			return;
		} 
	} else {
		die (mysql_error());
	}

	// 把年月日拼成birthday
	$birthday = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

	// 在member資料表內插入一筆新的紀錄
	$query = sprintf("INSERT INTO user (username, password, fullname, sex, birthday, email, country, area) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)", 
		GetSQLValue($_POST['account'], "text"), 
		GetSQLValue($_POST['password'], "text"), 
		GetSQLValue($_POST['name'], "text"), 
		GetSQLValue($_POST['gender'], "text"), 
		GetSQLValue($birthday, "date"), 
		GetSQLValue($_POST['email'], "text"), 
		GetSQLValue($_POST['country'], "text"), 
		GetSQLValue($_POST['region'], "text")
		/*GetSQLValue($_POST['favoriate'], "text")*/
		/*GetSQLValue($_POST['userlevel'], "int")*/);
	
	// 傳回結果集
	$result = mysql_query($query, $connection);
	if ($result) {
		if (isset($_SESSION['username_exit'])) {
			$_SESSION['username_exit'] = NULL;
			unset($_SESSION['username_exit']);
		}

		// 回到前一個網頁 
		header(sprintf("Location: %s", $_SESSION['prevpage'])); 
	} else {
		die (mysql_error());
	}
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
			processRegisterForm();
        }); // ready
    </script>
<?php
    	if (isset($_SESSION['username_exit'])) {
		// 告訴使用者用戶名已存在
        	phpAlert("非常抱歉, 用戶名 '" . $_SESSION['username_exit'] . "' 已存在, 請您輸入不同的用戶名稱");
		// 只說一次下次再進registerUser.php頁面就不再alert了
		$_SESSION['username_exit'] = NULL;
		unset($_SESSION['username_exit']);
    	}
?>
</head>
<body>

	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div id="register-form-wrapper" class="form-wrapper">
		<br/><h1>建立您的帳號 只需要兩分鐘</h1><br/>
		<form action="/MyClass/User/registerUser.php" method="post" name="register-form" id="register-form">
			<div class="row">
				<label for="account" class="describe-label">設定MyClass帳號</label>
				<input name="account" class="has-info" type="text" id="account" maxlength="32" size="24">
				<span class="info-msg">您可以使用大小寫字母和數字</span>
			</div>
			<div class="row">
				<label for="password" class="describe-label">設定密碼</label>
				<input name="password" class="has-info" type="password" id="password" maxlength="16" size="24">
				<span class="info-msg">請用3到16字元,您可以使用大小寫字母,數字,及特殊字元</span>
			</div>
			<div class="row">
				<label for="passwordconfirm" class="describe-label">再次輸入密碼</label>
				<input name="passwordconfirm" type="password" id="passwordconfirm" maxlength="16" size="24">
			</div>
			<div class="row">
				<label for="name" class="describe-label">我的姓名</label>
				<input name="name" class="need-clean has-info" type="text" id="name" maxlength="32" value="ex. 張君雅" size="24">
				<span class="info-msg">請輸入您的真實姓名,以方便您的朋友順利找到您</span>
			</div>
			<div class="row">
				<label for="email" class="describe-label">電子郵件信箱</label>
				<input name="email" class="has-info" type="text" id="email"  maxlength="64" size="24">
				<span class="info-msg">系統將寄送確認信到您的信箱以完成註冊</span>
			</div>
			<div class="row">
				<label for="male" class="describe-label">性別</label>
				<input name="gender" type="radio" id="male" value="男">
				<label for="male" class="radio-label">男生</label>
				<input name="gender" type="radio" id="female" value="女">
				<label for="female" class="radio-label">女生</label>
			</div>
			<div class="row">
				<label for="month" class="describe-label">生日</label>
				<input name="month" class="need-clean has-info number-only" type="text" id="month" maxlength="2" value="月" size="2">
				<input name="day" class="need-clean has-info number-only" type="text" id="day" maxlength="2" value="日" size="2">
				<input name="year" class="need-clean has-info number-only" type="text" id="year" maxlength="4" value="年" size="8">
				<span class="info-msg">ex. 03 27 1994</span>
			</div>
			<div class="row">
				<label for="country" class="describe-label">所在地區</label>
				<select name="country" style="width: 80px;" class="has-info" id="country">
					<option value="台灣">台灣 </option>
				</select>
				<select name="region" style="width: 100px;" class="has-info" id="region">
					<option value="0">選擇縣市</option>
					<option value="台北市">台北市</option>
					<option value="基隆市">基隆市</option>
					<option value="新北市">新北市</option>
					<option value="宜蘭縣">宜蘭縣</option>
					<option value="新竹市">新竹市</option>
					<option value="新竹縣">新竹縣</option>
					<option value="桃園縣">桃園縣</option>
					<option value="苗栗縣">苗栗縣</option>
					<option value="台中市">台中市</option>
					<option value="彰化縣">彰化縣</option>
					<option value="南投縣">南投縣</option>
					<option value="嘉義市">嘉義市</option>
					<option value="嘉義縣">嘉義縣</option>
					<option value="雲林縣">雲林縣</option>
					<option value="台南市">台南市</option>
					<option value="高雄市">高雄市</option>
					<option value="澎湖縣">澎湖縣</option>
					<option value="屏東縣">屏東縣</option>
					<option value="臺東縣">臺東縣</option>
					<option value="花蓮縣">花蓮縣</option>
					<option value="金門縣">金門縣</option>
					<option value="連江縣">連江縣</option>
					<option value="南海諸島">南海諸島</option>
				</select>
				<span class="info-msg">為了讓MyClass的服務更完善,請提供您的所在地區</span>
			</div>
			<br/><br/>
			<div class="row">
				<input type="checkbox" name="termOfUse" id="termOfUse">
				<label for="termOfUse" class="checkbox-label">
					我已閱讀並同意遵守<a href="" target="">MyClass使用服務條款</a>
				</label>
			</div>
			<br/>
			<div>
				<input type="submit" class="submit-button" name="submitUserForm" id="submitUserForm" value="送出">
			</div>

			<!-- 為了分辨是否submit的隱藏欄位 -->
	    	        <input name="register_submitted" id="register_submitted" type="hidden" value="register_submitted" >
		</form>
	</div>
</body>
</html>

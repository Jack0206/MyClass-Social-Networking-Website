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
			processCreateGroupForm();
        }); // ready
    </script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div id="create-group-form-wrapper" class="form-wrapper">
		<h1>建立您的新群組,只要短短三分鐘</h1>
		<form action="/MyClass/Group/createGroup.php" method="post" name="create-group-form" id="create-group-form">
				<div class="row" id="group-1st-row">
					<label for="is-class-group" class="describe-label">此群組是否為班級群組?
						<span class="label-explan">(ex. 景美女中一年三班, 中山大學電機系一年級)</span>
					</label>
					<input name="class-group" type="radio" id="is-class-group" value="是">
					<label for="is-class-group" class="radio-label">是</label>
					<input name="class-group" type="radio" id="not-class-group" value="否">
					<label for="not-class-group" class="radio-label">否</label>
				</div>
				<div class="row" id="group-2nd-row">
					<label for="school-country-0" class="describe-label" id="class-group-label">此班級的學校:</label>
					<select name="school-country-0" id="school-country-0">
						<option value="0">--國家-- </option>
						<option value="1">台灣 </option>
						<option value="2">其他 </option>
					</select>
					<select name="school-region-0" id="school-region-0">
						<option value="0">--縣市--</option>
						<option value="1">台北市</option>
						<option value="2">基隆市</option>
						<option value="3">新北市</option>
						<option value="4">宜蘭縣</option>
						<option value="5">新竹市</option>
						<option value="6">新竹縣</option>
						<option value="7">桃園縣</option>
						<option value="8">苗栗縣</option>
						<option value="9">台中市</option>
						<option value="10">彰化縣</option>
						<option value="11">南投縣</option>
						<option value="12">嘉義市</option>
						<option value="13">嘉義縣</option>
						<option value="14">雲林縣</option>
						<option value="15">台南市</option>
						<option value="16">高雄市</option>
						<option value="17">澎湖縣</option>
						<option value="18">屏東縣</option>
						<option value="19">臺東縣</option>
						<option value="20">花蓮縣</option>
						<option value="21">金門縣</option>
						<option value="22">連江縣</option>
						<option value="23">南海諸島</option>
					</select>
					<select name="school-type-0" id="school-type-0">
						<option value="0">--類別--</option>
						<option value="1">博碩士</option>
						<option value="2">大學</option>
						<option value="3">四技</option>
						<option value="4">二技</option>
						<option value="5">二專</option>
						<option value="6">五專</option>
						<option value="7">高中職</option>
						<option value="8">國中</option>
						<option value="9">國小</option>
					</select>
					<select name="school-name-0" id="school-name-0">
						<option value="0">--學校--</option>
						<option value="1">台灣大學</option>
						<option value="2">台科大</option>
						<option value="3">師範學院</option>
						<option value="4">政治大學</option>
						<option value="5">世新大學</option>
						<option value="6">輔仁大學</option>
						<option value="7">北一女中</option>
						<option value="8">建國高中</option>
						<option value="9">景美女中</option>
						<option value="10">師大附中</option>
						<option value="11">成功高中</option>
						<option value="12">中山女中</option>
						<option value="13">其他學校</option>
					</select>
				</div>
				<div class="row" id="group-3rd-row">

				</div>
				<div class="row" id="group-4th-row">
					<label for="graduate-year" class="describe-label">本班級(預計)畢業年份:</label>
					<select name="graduate-year" id="graduate-year">
						<option value="0">--畢業年份--</option>
						<option value="1">1997</option>
						<option value="2">1998</option>
						<option value="3">1999</option>
						<option value="4">2000</option>
						<option value="5">2001</option>
						<option value="6">2002</option>
						<option value="7">2003</option>
						<option value="8">2004</option>
						<option value="9">2005</option>
						<option value="10">2006</option>
						<option value="11">2007</option>
						<option value="12">2008</option>
						<option value="13">2009</option>
						<option value="14">2010</option>
						<option value="15">2011</option>
						<option value="16">2012</option>
						<option value="17">2013</option>
						<option value="18">2014</option>
						<option value="19">2015</option>
						<option value="20">2016</option>
						<option value="21">2017</option>
						<option value="22">2018</option>
					</select>
				</div>
				<div class="row" id="group-5th-row">
					<label for="is-shcool-group" class="describe-label">此群組是否為學校社團?
						<span class="label-explan">(ex. 東海大學熱舞社, 師大附中吉他社)</span>
					</label>
					<input name="school-group" type="radio" id="is-school-group" value="是">
					<label for="is-school-group" class="radio-label">是</label>
					<input name="school-group" type="radio" id="not-school-group" value="否">
					<label for="not-school-group" class="radio-label">否</label>
				</div>
				<div class="row" id="group-6th-row">
					<label for="school-country-1" class="describe-label" id="school-group-label">學校:</label>
					<select name="school-country-1" id="school-country-1">
						<option value="0">--國家-- </option>
						<option value="1">台灣 </option>
						<option value="2">其他 </option>
					</select>
					<select name="school-region-1" id="school-region-1">
						<option value="0">--縣市--</option>
						<option value="1">台北市</option>
						<option value="2">基隆市</option>
						<option value="3">新北市</option>
						<option value="4">宜蘭縣</option>
						<option value="5">新竹市</option>
						<option value="6">新竹縣</option>
						<option value="7">桃園縣</option>
						<option value="8">苗栗縣</option>
						<option value="9">台中市</option>
						<option value="10">彰化縣</option>
						<option value="11">南投縣</option>
						<option value="12">嘉義市</option>
						<option value="13">嘉義縣</option>
						<option value="14">雲林縣</option>
						<option value="15">台南市</option>
						<option value="16">高雄市</option>
						<option value="17">澎湖縣</option>
						<option value="18">屏東縣</option>
						<option value="19">臺東縣</option>
						<option value="20">花蓮縣</option>
						<option value="21">金門縣</option>
						<option value="22">連江縣</option>
						<option value="23">南海諸島</option>
					</select>
					<select name="school-type-1" id="school-type-1">
						<option value="0">--學校類別--</option>
						<option value="1">博碩士</option>
						<option value="2">大學</option>
						<option value="3">四技</option>
						<option value="4">二技</option>
						<option value="5">二專</option>
						<option value="6">五專</option>
						<option value="7">高中職</option>
						<option value="8">國中</option>
						<option value="9">國小</option>
					</select>
					<select name="school-name-1" id="school-name-1">
						<option value="0">--學校--</option>
						<option value="1">台灣大學</option>
						<option value="2">台科大</option>
						<option value="3">師範學院</option>
						<option value="4">政治大學</option>
						<option value="5">世新大學</option>
						<option value="6">輔仁大學</option>
						<option value="7">北一女中</option>
						<option value="8">建國高中</option>
						<option value="9">景美女中</option>
						<option value="10">師大附中</option>
						<option value="11">成功高中</option>
						<option value="12">中山女中</option>
						<option value="13">其他學校</option>
					</select>
				</div>
				<div class="row" id="group-7th-row">
					<label for="school-group-name" class="describe-label" >社團名稱:
						<span class="label-explan">(ex. 熱舞社, 排球社, 長青吉他社)</span>
					</label>
					<input name="school-group-name" type="text" id="school-group-name" size="20">
				</div>
				<div class="row" id="group-8th-row">
					<label for="group-name" class="describe-label">群組名稱:
						<span class="label-explan">(ex. 華航空姐團, 台中吃喝玩樂團)</span>
					</label>
					<input name="group-name" type="text" id="group-name" size="20">
				</div>
				<div class="flexible" id="group-9th-row">
					<label for="group-describe" class="describe-label">群組介紹:</label>
					<textarea name="group-describe" id="group-describe" rows="15" cols="45">這個群組在做什麼, 有什麼有趣地方呢?</textarea>
				</div>
				<div class="row" id="group-10th-row">
					<label class="describe-label">群組地點:</label>
					<select name="group-country" id="group-country">
						<option value="0">--國家-- </option>
						<option value="1">台灣 </option>
						<option value="2">其他 </option>
					</select>
					<select name="group-region" id="group-region">
						<option value="0">--縣市--</option>
						<option value="1">不拘縣市</option>
						<option value="2">基隆市</option>
						<option value="3">新北市</option>
						<option value="4">宜蘭縣</option>
						<option value="5">新竹市</option>
						<option value="6">新竹縣</option>
						<option value="7">桃園縣</option>
						<option value="8">苗栗縣</option>
						<option value="9">台中市</option>
						<option value="10">彰化縣</option>
						<option value="11">南投縣</option>
						<option value="12">嘉義市</option>
						<option value="13">嘉義縣</option>
						<option value="14">雲林縣</option>
						<option value="15">台南市</option>
						<option value="16">高雄市</option>
						<option value="17">澎湖縣</option>
						<option value="18">屏東縣</option>
						<option value="19">臺東縣</option>
						<option value="20">花蓮縣</option>
						<option value="21">金門縣</option>
						<option value="22">連江縣</option>
						<option value="23">南海諸島</option>
					</select>
					<input name="none-area" type="checkbox" id="none-area">
					<label for="none-area" class="checkbox-label">不限於特定地區</label>
				</div>
				<div class="block" id="group-11th-row">
					<label class="describe-label">性質:</label>
					<input name="group-type-0" type="checkbox" id="group-type-0" class="check-type">
					<label for="group-type-0" class="checkbox-label">攝影</label>
					<input name="group-type-1" type="checkbox" id="group-type-1" class="check-type">
					<label for="group-type-1" class="checkbox-label">創業</label>
					<input name="group-type-2" type="checkbox" id="group-type-2" class="check-type">
					<label for="group-type-2" class="checkbox-label">旅遊</label>
					<input name="group-type-3" type="checkbox" id="group-type-3" class="check-type">
					<label for="group-type-3" class="checkbox-label">美食</label>
					<input name="group-type-4" type="checkbox" id="group-type-4" class="check-type">
					<label for="group-type-4" class="checkbox-label">唱歌</label>
					<input name="group-type-5" type="checkbox" id="group-type-5" class="check-type">
					<label for="group-type-5" class="checkbox-label">音樂</label>
					<input name="group-type-6" type="checkbox" id="group-type-6" class="check-type">
					<label for="group-type-6" class="checkbox-label">玩樂</label>
					<input name="group-type-7" type="checkbox" id="group-type-7" class="check-type">
					<label for="group-type-7" class="checkbox-label">交友</label>
					<input name="group-type-8" type="checkbox" id="group-type-8" class="check-type">
					<label for="group-type-8" class="checkbox-label">運動</label>
					<input name="group-type-9" type="checkbox" id="group-type-9" class="check-type">
					<label for="group-type-9" class="checkbox-label">藝術</label>
					<input name="group-type-10" type="checkbox" id="group-type-10" class="check-type">
					<label for="group-type-10" class="checkbox-label">電影</label>
					<input name="group-type-11" type="checkbox" id="group-type-11" class="check-type">
					<label for="group-type-11" class="checkbox-label">電玩遊戲</label>
					<input name="group-type-12" type="checkbox" id="group-type-12" class="check-type">
					<label for="group-type-12" class="checkbox-label">科技</label>
					<input name="group-type-13" type="checkbox" id="group-type-13" class="check-type">
					<label for="group-type-13" class="checkbox-label">家庭</label>
					<input name="group-type-14" type="checkbox" id="group-type-14" class="check-type">
					<label for="group-type-14" class="checkbox-label">購物</label>
					<input name="group-type-15" type="checkbox" id="group-type-15" class="check-type">
					<label for="group-type-15" class="checkbox-label">健康&醫學</label>
					<input name="group-type-16" type="checkbox" id="group-type-16" class="check-type">
					<label for="group-type-16" class="checkbox-label">工作</label>
					<input name="group-type-17" type="checkbox" id="group-type-17" class="check-type">
					<label for="group-type-17" class="checkbox-label">公司&商務</label>
					<input name="group-type-18" type="checkbox" id="group-type-18" class="check-type">
					<label for="group-type-18" class="checkbox-label">寵物</label>
					<input name="group-type-19" type="checkbox" id="group-type-19" class="check-type">
					<label for="group-type-19" class="checkbox-label">美容&時尚</label>	
					<input name="group-type-20" type="checkbox" id="group-type-20" class="check-type">
					<label for="group-type-20" class="checkbox-label">研究&學習</label>	
				</div>
				<div id="group-12th-row">
					<input type="submit" class="submit-button" name="submit-create-group" id="submit-create-group" value="送出">
				</div>
		</form>
	</div>
</body>
</html>

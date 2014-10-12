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
        <link href="../css/main.css" type="text/css" rel="stylesheet"/>
        <link href="../css/event.css" type="text/css" rel="stylesheet"/>
        <script src="/MyClass/_js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="../_js/menuBar.js"></script> 
	<script src="../_js/collapsableList.js"></script> 
	<script src="../_js/searchBar.js"></script> 
	<script src="../_js/card.js"></script> 
        <script>
            $(document).ready(function() {
                //Process Menu Bar
                processMenuBar();
                
                // Process Collapsable List
                processCollapsableList();
                
                // Process Search Bar
                processSearchBar();
                
                processCard();
            }); // ready
        </script>
    </head>
    <body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
        <!-- <div id="container_frame"> -->
            <div class="search_side_area">
                <!-- Collapse List -->
                <div id="title_text"> 搜尋活動 - 結果列表 </div>
                <ul id="collapse_list">
                    <li>
                    台北市
                    <ul>
                        <li>淡江大學</li>
                        <li>輔仁大學</li>
                        <li>
                        台灣大學
                        <ul>
                            <li>電機系1年級</li>
                            <li>電機系2年級</li>
                            <li>資工系1年級</li>
                            <li>法律系1年級</li>
                            <li>法律系2年級</li>
                            <li>法律系3年級</li>
                            <li>法律系4年級</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    台北縣
                    <ul>
                        <li>政治大學</li>
                        <li>
                        台北師範大學
                        <ul>
                            <li>幼教系2年級</li>
                            <li>特教系3年級</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    桃園縣
                    <ul>
                        <li>中央大學</li>
                        <li>青雲科技大學</li>
                        <li>
                        中壢高中
                        <ul>
                            <li>中壢高中3年16班-2002畢業年級</li>
                            <li>中壢高中3年7班</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    新竹縣
                    <ul>
                        <li>交通大學</li>
                        <li>
                        新竹女中
                        <ul>
                            <li>新竹女中3年2班</li>
                            <li>新竹女中3年5班</li>
                        </ul>
                        </li>	
                    </ul>
                    </li>
                    <li>
                    苗栗縣
                    <ul>
                        <li>苗栗高中</li>
                    </ul>
                    </li>
                    <li>
                    台中市
                    <ul>
                        <li>台中第一女子高中</li>
                    </ul>
                    </li>
                    <li>
                    台中縣
                    <ul>
                        <li>台中第一男子高中</li>
                    </ul>
                    </li>
                    <li>
                    彰化縣
                    <ul>
                        <li>彰化第一高中</li>
                    </ul>
                    </li>
                    <li>
                    雲林縣
                    <ul>
                        <li>雲林台客天團</li>
                    </ul>
                    </li>
                    <li>
                    嘉義縣
                    <ul>
                        <li>中正大學</li>
                    </ul>
                    </li>
                    <li>
                    高雄市
                    <ul>
                        <li>中山大學</li>
                    </ul>
                    </li>
                    <li>
                    高雄縣
                    <ul>
                        <li>高雄第一男子中學</li>
                    </ul>
                    </li>
                    <li>
                    屏東縣
                    <ul>
                        <li>屏東可愛女孩群組</li>
                    </ul>
                    </li>
                    <li>
                    台東縣
                    <ul>
                        <li>台東白皙女孩團</li>
                    </ul>
                    </li>
                    <li>
                    花蓮縣
                    <ul>
                        <li>阿美族部落群組</li>
                    </ul>
                    </li>
                    <li>
                    宜蘭縣
                    <ul>
                        <li>宜蘭第一女子中學</li>
                    </ul>
                    </li>
                    <li>
                    南投縣
                    <ul>
                        <li>南投師範大學</li>
                    </ul>
                    </li>
                    <li>
                    不分地區群組
                    <ul>
                        <li>Sosomen創業群組</li>
                        <li>華航空姐團</li>
                        <li>乳夫海賊團</li>
                    </ul>
                    </li>
                </ul>

                <!-- End Collapse List -->
            </div>
            <div class="search_center_area">
                <!-- 紅色搜尋bar -->
                <div id="search_list_wrapper">
                    <ul id="search_list">
                        <li class="search_bar_title">活動性質:</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:116px">
				<div class="search_bar_dropdown_list_div">
					<ul id="event_type_list" style="width:116px;height:203px;padding:5px">
						<li>不拘</li>
						<li>聯誼</li>
						<li>社團活動</li>
						<li>運動</li>
						<li>比賽</li>
						<li>喝咖啡</li>
						<li>吃飯</li>
						<li>看電影</li>
						<li>逛街</li>
						<li>旅遊</li>
						<li>戶外活動</li>
						<li>學習＆研究</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="8" style="float:right;margin-top:4px;margin-right:1px;z-index:1200">
			    </div>
			</li>
                        <li class="search_bar_title">活動發起人:</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:150px">
				<div class="search_bar_dropdown_list_div">
					<ul id="event_creater_list" style="width:150px;height:153px;padding:5px">
						<li>不拘</li>
						<li>男生用戶</li>
						<li>女生用戶</li>
						<li>所有群組</li>
						<li>大學班級＆社團</li>
						<li>高中班級＆社團</li>
						<li>國中班級＆社團</li>
						<li>國小班級＆社團</li>
						<li>非學校群組</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="8" style="float:right;margin-top:4px;margin-right:1px">
			    </div>
			</li>
                        <li class="search_bar_title">地區:</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:80px">
				<div class="search_bar_dropdown_list_div">
					<ul id="event_area_list" style="width:80px;height:322px;padding:5px">
						<li>不拘</li>
						<li>台北市</li>
						<li>台北縣</li>
						<li>桃園縣</li>
						<li>新竹縣</li>
						<li>苗栗縣</li>
						<li>台中市</li>
						<li>台中縣</li>
						<li>彰化縣</li>
						<li>雲林縣</li>
						<li>嘉義縣</li>
						<li>台南縣</li>
						<li>高雄市</li>
						<li>高雄縣</li>
						<li>屏東縣</li>
						<li>台東縣</li>
						<li>花蓮縣</li>
						<li>宜蘭縣</li>
						<li>南投縣</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="8" style="float:right;margin-top:4px;margin-right:1px">
			    </div>
			</li>
                        <div id="keyword_submit_button">收尋</div>
                        <input type="text" name="fname" id="keyword_input" value="請輸入關鍵字">
                        <li class="search_bar_title" id="keyword_title">關鍵字:</li>
                    </ul>
                </div>
                <!-- End of 紅色搜尋bar -->
                <div id="search_result_wrapper">
                    <div id="search_result_event">
                        <div class="sort_by_wrapper">
                            <div id="sort_by_botton" style="margin-left: 38px">
                                <span id="sort_by_label">排序:</span>
                                <span id="sort_by_selected">地區</span>
                                <img src="../Pics/triangle.png" height="8" style="margin-top:15px;z-index:1200">
                            </div>
                        </div>

                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl3.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #CC0000">
											比賽
										</span>
                                        <span class="event-headline"> 
											三對三鬥牛大賽
										</span>
                                    </h1>
                                    <p>
                               	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                	時間: 6月16日(日)<br/>
                                	地點: 景美橋下球場<br/>
									已參加: <span class="red-text">42</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<a href="">
									<img class="bookmark" src="../Pics/pin.png">
								</a>
								<a href="">
									<img class="facebook-like" src="../Pics/facebook-like.png">
								</a>
							</div>
                        </div>
                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl1.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #336699">
											社團活動
										</span>
                                        <span class="event-headline"> 
											東海大學吉他社成果發表會
										</span>
                                    </h1>
                                    <p>
                                    	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                                	時間: 6月15日(六) 16:30pm<br/>
                               	 	地點: 東海大學大禮堂<br/>
									已參加: <span class="red-text">42</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<span class="status">已受邀</span>
                                <img class="action" src="../Pics/list-plus.png">   
								<img class="bookmark" src="../Pics/pin.png">
								<img class="facebook-like" src="../Pics/facebook-like.png">
							</div>
                        </div>
                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl2.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #99CC00">
											聯誼
										</span>
                                        <span class="event-headline"> 
											成大土木系一年級徵聯誼
										</span>
                                    </h1>
                                    <p>
                                    	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                	時間: 6月19(三)<br/>
                                	地點: 待定<br/>
                                	已參加: <span class="red-text">4223</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<span class="status">已報名,等待回應</span>
                                <img class="action" src="../Pics/list-plus.png">
								<img class="bookmark" src="../Pics/pin.png">
								<img class="facebook-like" src="../Pics/facebook-like.png">
							</div>
                        </div>
                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl3.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #CC0000">
											比賽
										</span>
                                        <span class="event-headline"> 
											三對三鬥牛大賽
										</span>
                                    </h1>
                                    <p>
                               	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                	時間: 6月16日(日)<br/>
                                	地點: 景美橋下球場<br/>
									已參加: <span class="red-text">42</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<a href="">
									<img class="bookmark" src="../Pics/pin.png">
								</a>
								<a href="">
									<img class="facebook-like" src="../Pics/facebook-like.png">
								</a>
							</div>
                        </div>
                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl1.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #336699">
											社團活動
										</span>
                                        <span class="event-headline"> 
											東海大學吉他社成果發表會
										</span>
                                    </h1>
                                    <p>
                                    	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                                	時間: 6月15日(六) 16:30pm<br/>
                               	 	地點: 東海大學大禮堂<br/>
									已參加: <span class="red-text">42</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<span class="status">已受邀</span>
                                <img class="action" src="../Pics/list-plus.png">
								<img class="bookmark" src="../Pics/pin.png">
								<img class="facebook-like" src="../Pics/facebook-like.png">
							</div>
                        </div>
                        <div class="event_block card">
                            <a target="" href="hotUser.html">
                                <img class="event-pic" src="../Pics/girl2.jpg">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
										<span class="event-type" style="background-color: #99CC00">
											聯誼
										</span>
                                        <span class="event-headline"> 
											成大土木系一年級徵聯誼
										</span>
                                    </h1>
                                    <p>
                                    	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                                    </p>
                                </div>
                            </a>
                            <div class="event_info">
                                <p>
									發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                	時間: 6月19(三)<br/>
                                	地點: 待定<br/>
                                	已參加: <span class="red-text">4223</span>人
								</p>
                            </div>    
							<div class="event-action-bar">
								<span class="status">已報名,等待回應</span>
                                <img class="action" src="../Pics/list-plus.png">
								<img class="bookmark" src="../Pics/pin.png">
								<img class="facebook-like" src="../Pics/facebook-like.png">
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
    </body>
</html>

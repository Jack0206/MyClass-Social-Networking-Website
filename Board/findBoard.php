<?php
require_once('../function.php');

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
	<link href="../css/board.css" type="text/css" rel="stylesheet"/>
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
		
		// Process Card
		processCard();
	}); // ready
	</script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
    <div class="search_side_area">
        <!-- Collapse List -->
        <div id="title_text"> 搜尋活動 - 結果列表 </div>
        <ul id="collapse_list">
            <li>
                聊天類
                <ul>
                    <li>八卦版</li>
                    <li>Hate版</li>
                    <li>Joke版</li>
                </ul>
            </li>
            <li>
                運動類
                <ul>
                    <li>NBA</li>
                    <li>棒球版</li>
                    <li>網球版</li>
                </ul>
            </li>
            <li>
                男女關係類
                <ul>
                    <li>美女版</li>
                    <li>Sex版</li>
                    <li>Boy & Girl版</li>
                </ul>
            </li>
            <li>
                美容類
                <ul>
                    <li>美妝版</li>
                    <li>衣著版</li>
                </ul>
            </li>
            <li>
                遊戲類
                <ul>
                    <li>網路遊戲版</li>
                    <li>Diablo版</li>
                    <li>WOW版</li>
                </ul>
            </li>
            <li>
                地區類
                <ul>
                    <li>台北版</li>
                    <li>台中版</li>
                    <li>高雄版</li>
                </ul>
            </li>
            <li>
                旅遊類
                <ul>
                    <li>北美旅遊</li>
                    <li>Visa版</li>
                    <li>遊學版</li>
                </ul>
            </li>
            <li>
                科技類
                <ul>
                    <li>手機版</li>
                    <li>iphone版</li>
                    <li>Mac版</li>
                </ul>
            </li>
        </ul>

        <!-- End Collapse List -->
    </div>
	<div class="search_center_area">
		<!-- 紅色搜尋bar -->
		<div id="search_list_wrapper">
			<ul id="search_list">
				<li class="search_bar_title">類別:</li>
				<li>
                    <div class="search_bar_dropdown_list_wrapper" style="width:116px">
					    <div class="search_bar_dropdown_list_div">
					    	<ul id="board_type_list" style="width:116px;height:119px;padding:5px">
					    		<li>不拘</li>
					    		<li>聊天類</li>
					    		<li>運動類</li>
					    		<li>男女關係類</li>
					    		<li>美容類</li>
					    		<li>遊戲類</li>
					    		<li>地區類</li>
					    	</ul>
					    </div>
					    <h8>不拘</h8><img src="../Pics/triangle.png" height="8" style="float:right;margin-top:4px;margin-right:1px;z-index:1200">
				    </div>
			    </li>
			    <div id="keyword_submit_button">收尋</div>
			    <input type="text" name="fname" id="keyword_input" value="請輸入關鍵字">
			    <li class="search_bar_title" id="keyword_title">關鍵字:</li>
		    </ul>
	    </div>
	<!-- End of 紅色搜尋bar -->
	    <div id="search_result_wrapper">
	    	<div id="search_result_board">
                <div class="sort_by_wrapper">
                    <div id="sort_by_botton" style="margin-left: 40px">
                        <span id="sort_by_label">排序:</span>
                        <span id="sort_by_selected">即時人氣</span>
                        <img src="../Pics/triangle.png" height="8" style="margin-top:15px;z-index:1200">
                    </div>
                </div>
	    		<a target="" href="group1.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="../Pics/talk.jpg">
	    				<div class="board_title">
	    					<h1 style="color:#819351">
	    						八卦版
	    					</h1>
	    					<p>
	    						你知道馬英九是gay嗎? 那你知道凱泰和力宏是gay嗎? 快到八卦版來發表和蒐集八卦吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="bomb">10923</span></span>    
	    			</div>
	    		</a>
	    		<a target="" href="Group1.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="../Pics/angry-bird-2.png">
	    				<div class="board_title">
	    					<h1 style="color:#632f34">
	    						Hate版
	    					</h1>
	    					<p>
	    						妳最近諸事不順, 被老闆壓榨, 或是跟男朋友吵架所以快氣炸了嗎? 快來Hate發洩, 讓所有版友們一起幫妳罵髒話吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">5032</span></span>
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="../Pics/girl3.jpg">
	    				<div class="board_title">
	    					<h1 style="color:#e28035">
	    						Joke版
	    					</h1>
	    					<p>
	    						想看笑話或是分享你今天新想到的爛笑話就來Joke版吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">2189</span></span>               
	    			</div>
	    		</a>

	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/4.png">
	    				<div class="board_title">
	    					<h1 style="color:#e51937">
	    						NBA版
	    					</h1>
	    					<p>
	    						總冠軍賽 熱火 vs 馬刺 開始了!!!</br>『LBJ和Kobe誰切入比較強』投票活動開始~
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">3986</span></span>
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/5.png">
	    				<div class="board_title">
	    					<h1 style="color:#978e60">
	    						棒球版
	    					</h1>
	    					<p>
	    						楊岱剛連續72場兩安打, 即將打破日本職棒紀錄!!!&nbsp快來跟版友們一起為台灣之光加油吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="hot">1356</span></span>                
	    			</div>
	    		</a>

	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/6.png">
	    				<div class="board_title">
	    					<h1 style="color:#e28035">
	    						帥哥美女版
	    					</h1>
	    					<p>
	    						想要看帥哥美女, 或是詢問今天在捷運上看到的美腿美女, 或是分享新發現的正妹? 來帥哥美女版就對了!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">8163</span></span>               
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="../Pics/sex.jpg">
	    				<div class="board_title">
	    					<h1 style="color:#e5737d">
	    						Sex版
	    					</h1>
	    					<p>
	    						你可以在這裡討論一切有關『性』的話題~
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">6231</span></span>               
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/8.png">
	    				<div class="board_title">
	    					<h1 style="color:#b1a5c3">
	    						Boy-Girl版
	    					</h1>
	    					<p>
	    						想要了解男生或女生都在想什麼嗎?來Boy-Girl版和版友們討論吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">3659</span></span>               
	    			</div>
	    		</a>

	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/9.png">
	    				<div class="board_title">
	    					<h1 style="color:#e5737d">
	    						彩妝版
	    					</h1>
	    					<p>
	    						想要畫出最適合自己的完美彩妝嗎?來和各位美女版友討論學習吧!
	    					</p>
	    				</div>	
	    				<span class="board_popular_level">人氣: <span class="hot">1826</span></span>                
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/10.png">
	    				<div class="board_title">
	    					<h1 style="color:#819351">
	    						美容版
	    					</h1>
	    					<p>
	    						想要讓自己越來越美嗎?來和各位美女版友一起討論學習吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="hot">1377</span></span>                
	    			</div>
	    		</a>

	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/11.png">
	    				<div class="board_title">
	    					<h1 style="color:#CC0000">
	    						Diablo版
	    					</h1>
	    					<p>
	    						來玩Diablo吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">3377</span></span>               
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    			<img class="hot-board-pic card-image" src="./BoardPics/1.png">
	    				<div class="board_title">
	    					<h1 style="color:#2a405c">
	    						WOW版
	    					</h1>
	    					<p>
	    						來玩WOW吧!
	    					</p>
	    				</div>
	    			<span class="board_popular_level">人氣: <span class="explode">2974</span></span>                
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/2.png">
	    				<div class="board_title">
	    					<h1 style="color:#7e52c1">
	    						LOL版
	    					</h1>
	    					<p>
	    						來玩LOL吧!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="hot">1125</span></span>                
	    			</div>
	    		</a>

	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/3.png">
	    				<div class="board_title">
	    					<h1 style="color:#819351">
	    						台北版
	    					</h1>
	    					<p>
	    						討論所有台北裡好吃好玩的地方!『台北哪個夜市最棒』投票開始囉~
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="bomb">10923</span></span>                
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/4.png">
	    				<div class="board_title">
	    					<h1 style="color:#cc0000">
	    						美國版
	    					</h1>
	    					<p>
	    						來討論所有有關美國的旅遊, 留學, 遊學資訊吧!『哪一種美式食物最好吃』投票開始!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">7324</span></span>               
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/5.png">
	    				<div class="board_title">
	    					<h1 style="color:#632f34">
	    						台中版
	    					</h1>
	    					<p>
	    						台中人都來吧!『台中哪所高中制服最好看』投票開始囉~
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="explode">2973</span></span>               
	    			</div>
	    		</a>
	    		<a target="" href="hotUser.html">
	    			<div class="board_block card">
	    				<img class="hot-board-pic card-image" src="./BoardPics/6.png">
	    				<div class="board_title">
	    					<h1 style="color:#e28035">
	    						高雄版
	    					</h1>
	    					<p>
	    						一人一票支持成立高雄國!
	    					</p>
	    				</div>
	    				<span class="board_popular_level">人氣: <span class="hot">1377</span></span>                
	    			</div>
	    		</a>
	    	</div>
	    </div>
	</div>
	<!-- </div> -->
</body>
</html>

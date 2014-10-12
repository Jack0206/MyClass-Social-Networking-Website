	<div id="wall_panel" class="panel">
		<div class="control_panel">
            <div class="filter_botton" style="margin-top: 20px; width: 142px;">
                <span class="filter_label">類別:</span>
                <span class="filter_selected">所有動態</span>
                <img height="8" style="margin-top:15px; z-index:10; float: right;" src="../Pics/triangle.png">
			    <div class="filter_dropdown_list_div" style="width: 150px;">
			        <div id="select_all_post" class="filter_selection">
                        所有動態
                    </div>
			        <div id="select_friend_post" class="filter_selection">
                        朋友的動態
                    </div>
			        <div id="select_my_post" class="filter_selection">
                        我的動態
                    </div>
			    </div>
		    </div>
			<span id="add_new_moment_button" class="small_red_button unselectable" style="margin: 18px 0px 8px 0px;">
                發表動態
            </span>
		</div>

        <div class="moment_wrapper">
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/NamiChang1987/head.jpg"></a>
			</div>
            <div class="moment_content_wrapper">
                <div class="moment_author">
                    <a href="Home.php" class="wall_poster_username girl-user-link">NamiChang1987</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
			    <div class="moment_content">
			    	<div class="moment_post">
			    	    <p>剛剛在捷運上被人摸屁股了 QQ~</p>
			    	    <div id="gallery">
			    	    	<a href="./NamiChang1987/Album/Moment/1_b.jpg" rel="gallery" title="我今天撿到的怪東西^^"><img src="./NamiChang1987/Album/Moment/1_s.jpg" alt="golf balls"></a>
			    	    </div>
					    <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
					    </div>
			    	</div>
			    </div>
            </div>
        </div>

        <div class="moment_wrapper user_own">
		    <div class="wall_poster_pic">
		    	<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
		    </div>  
		    <div class="moment_content_wrapper">
                <div class="moment_author">
		    	    <a href="hotUser.html" class="wall_poster_username boy-user-link">Sosoman</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
		    	<div class="moment_content"> <!--  Sosoman自己的moment: user_own class -->
		    		<div class="moment_post" style="position:relative"> <!-- Case#1 : 是user_own且有gallery的case --> <!--  發的文是moment_post, 回文是moment_response -->
		    		    <p>我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~
		    		    </p>
		    		    <div id="gallery">
		    		    	<a href="./Sosoman/Album/Moment/7_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./Sosoman/Album/Moment/7_s.jpg" alt="golf balls"></a>
		    		    	<a href="./Sosoman/Album/Moment/8_b.jpg" rel="gallery" title="古老城牆"><img src="./Sosoman/Album/Moment/8_s.jpg" alt="rock wall"></a>
		    		    	<form> <!--  只有自己的moment有這些button -->
		    		    	<input type="button" class="hidden-button silver_button" value="編輯">
		    		    	<input type="button" class="hidden-button delete-button red_button" value="刪除">
		    		    	<input type="button" class="cancel-button hidden red_button" value="取消">
		    		    	<input type="submit" class="submit-button hidden silver_button" value="提交">
		    		    	</form>
		    		    </div>
					    <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
					    </div>

		    		</div>
		    	</div>
                
	    		<div class="moment_response user_own"> <!--  Sosoman自己的moment: user_own class -->
	    			<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
	    			<div>
	    			<a href="hotUser.html" class="boy-user-link">Sosoman</a>
	    			<p>智障
	    			</p>	
                        <span class="date">6月18日 6:48m</span>
	    				<form> <!--  只有自己的moment有這些button -->
	    				<input type="button" class="hidden-button silver_button" value="編輯">
	    				<input type="button" class="hidden-button delete-button red_button" value="刪除">
	    				<input type="button" class="cancel-button hidden red_button" value="取消">
	    				<input type="submit" class="submit-button hidden silver_button" value="提交">
	    				</form>
	    			</div>
	    		</div>

	    		<div class="moment_response last user_own"> <!-- 最後一個留言必須是"last" class -->
	    			<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
	    			<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
	    			<p>白癡
	    			</p><span class="date">6月19日 11:38m</span>
	    				<form> <!--  只有自己的moment有這些button -->
	    				<input type="button" class="hidden-button silver_button" value="編輯">
	    				<input type="button" class="hidden-button delete-button red_button" value="刪除">
	    				<input type="button" class="cancel-button hidden red_button" value="取消">
	    				<input type="submit" class="submit-button hidden silver_button" value="提交">
	    				</form>
	    			</div>
	    		</div>
		    </div>
        </div>

        <div class="moment_wrapper">
    	    <div class="wall_poster_pic">
    	    	<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
    	    </div>
		    <div class="moment_content_wrapper">
                <div class="moment_author">
    		        <a href="Home.php" class="wall_poster_username girl-user-link">NancyLin</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
		    	<div class="moment_content">
		    		<div class="moment_post"> <!-- Case#2 : 不是user_own且沒有gallery的case -->
		    		    <p>熱火贏了 我愛君子劍 ! Ray Gun~~~</p>
				        <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
				        </div>
		    		</div>
		    	</div>
	    		<div class="moment_response">
	    			<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
	    			<div><a href="hotUser.html" class="boy-user-link">KobeIsGod</a>
	    			<p>不懂偽君子有什麼好...
	    			</p><span class="date">6月18日 3:20pm</span></div>
	    		</div>
	    		<div class="moment_response last">
	    			<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
	    			<div><a href="hotUser.html" class="girl-user-link">NancyLin</a>
	    			<p>靠邀! 我就是喜歡你管我啦~靠邀! 我就是喜歡你管我啦~靠邀! 我就是喜歡你管我啦~靠邀! 我就是喜歡你管我啦~靠邀! 我就是喜歡你管我啦~
	    			</p><span class="date">6月18日 3:55pm</span></div>
	    		</div>
            </div>
        </div>

        <div class="moment_wrapper">
		    <div class="wall_poster_pic">
		    	<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
		    </div>
		    <div class="moment_content_wrapper">
                <div class="moment_author">
		    	    <a href="Home.php" class="wall_poster_username girl-user-link">NancyLin</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
            
		    	<div class="moment_content">
		    		<div class="moment_post"> <!-- Case#3 : 不是user_own但有gallery的case -->
		    		    <p>今天的活動太好完了 ! 認識很多新朋友～ 希望改天還能一起出去玩 !</p>
		    		    <div id="gallery">   <!-- 照片若超過6or7張, 就把後面的照片display:none, 再在第一張和最後一張各加上左右選擇按鍵, 按到之後用js修改display:none(一次把最前面shown picture改成hide, 再把後面第一張的hidden picture改成show)-->
		    		    	<a href="./NancyLin/Album/Moment/slide1.jpg" rel="gallery" title="一堆高爾夫球"><img src="./NancyLin/Album/Moment/slide1_h.jpg" alt="golf balls"></a>
		    		    	<a href="./NancyLin/Album/Moment/slide2.jpg" rel="gallery" title="古老城牆"><img src="./NancyLin/Album/Moment/slide2_h.jpg" alt="rock wall"></a>
		    		    	<a href="./NancyLin/Album/Moment/slide3.jpg" rel="gallery" title="美麗的城堡"><img src="./NancyLin/Album/Moment/slide3_h.jpg" alt="old course"></a>
		    		    	<a href="./NancyLin/Album/Moment/slide4.jpg" rel="gallery" title="城堡裡的怪東西"><img src="./NancyLin/Album/Moment/slide4_h.jpg" alt="tees"></a>
		    		    	<a href="./NancyLin/Album/Moment/slide5.jpg" rel="gallery" title="湖與樹"><img src="./NancyLin/Album/Moment/slide5_h.jpg" alt="tree"></a>
		    		    	<a href="./NancyLin/Album/Moment/slide6.jpg" rel="gallery" title="旁邊打球的老人們..."><img src="./NancyLin/Album/Moment/slide6_h.jpg" alt="ocean course"></a>
                        
		    		    </div>
				        <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
				        </div>
		    		</div>
		    	</div>
	    		<div class="moment_response user_own">
	    			<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
	    			<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
	    			<p>很高興認識妳^^
	    			</p><span class="date">6月18日 11:38m</span>
	    				<form> <!--  只有自己的moment有這些button -->
	    				<input type="button" class="hidden-button silver_button" value="編輯">
	    				<input type="button" class="hidden-button delete-button red_button" value="刪除">
	    				<input type="button" class="cancel-button hidden red_button" value="取消">
	    				<input type="submit" class="submit-button hidden silver_button" value="提交">
	    				</form>
	    			</div>
	    		</div>
	    		<div class="moment_response last">
	    			<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
	    			<div><a href="hotUser.html" class="girl-user-link">NancyLin</a>
	    			<p>我也是~ 改天再一起出去玩吧 : )
	    			</p><span class="date">6月18日 11:38m</span></div>
	    		</div>
		    </div>
        </div>

        <div class="moment_wrapper">
		    <div class="wall_poster_pic">
		    	<a href="hotUser.html"><img src="/MyClass/User/Mini157/head.jpg"></a>
		    </div>
		    <div class="moment_content_wrapper">
                <div class="moment_author">
                    <a href="Home.php" class="wall_poster_username girl-user-link">Mini157</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
            
		    	<div class="moment_content">
		    		<div class="moment_post">
		    		    <p>今天看到帥哥 超爽的~</p>
				        <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
				        </div>
		    		</div>
		    	</div>
		    </div>
        </div>

        <div class="moment_wrapper">
		    <div class="wall_poster_pic">
		    	<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
		    </div>
		    <div class="moment_content_wrapper">
                <div class="moment_author">
		    	    <a href="Home.php" class="wall_poster_username boy-user-link">KobeIsGod</a>
                </div>
                <div class="time_title">
                    今天 8/4/2013 晚上 09:23pm
                </div>
            
		    	<div class="moment_content">
		    		<div class="moment_post">
		    		    <p>幹 剛剛在捷運上遇到Kobe 他好像被抓了 不知道為什麼 QQ~</p>
		    		    <div id="gallery">
		    		    	<a href="./KobeIsGod/Album/Moment/1_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./KobeIsGod/Album/Moment/1_s.jpg" alt="golf balls"></a>
		    		    </div>
				        <div class="post-action-bar">
				        	<img class="bookmark" src="../Pics/ticket-icon.png">
                            <span class="count">7</span>
				        	<img class="facebook-like" src="../Pics/icon_like.png">
                            <span class="count">64</span>
				        </div>
		    		</div>
		    	</div>
		    </div>
        </div>
	</div>

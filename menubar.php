<?php
require_once('define.php');
require_once('function.php');

if ($_SERVER['PHP_SELF'] != '/MyClass/User/login.php' && $_SERVER['PHP_SELF'] != '/MyClass/User/registerUser.php') {
	$_SESSION['prevpage'] = $_SERVER['PHP_SELF'];
}

/*
if (isset($_SESSION['username'])) {
	phpAlert("Session[username] is set");
} else {
	phpAlert("Session[username] is not set");
}
*/
/***************************************************************************/
if (BYPASS_LOGIN) {
//	$_SESSION['username'] = "Sosoman";
//	$_SESSION['fullname'] = "陳令堯";
//	$_SESSION['sex'] = "男";
}
/***************************************************************************/
?>

        <header id="masthead">
        <div id="menubar">
            <a id="logo" href="/MyClass/Home.php">
                <img src="/MyClass/Pics/talk.jpg" alt="MyClass" style="width: 70px; margin: 6px 15px 0px 15px;">
            </a>
            <ul class="menu_tabs">
                <li id="group_tab" class="menu_tab">
                <a href="/MyClass/Group/findGroup.php"> <!-- 特別設定width, padding -->
                    <span class="menu_tab">
                        <span class="menu_big_chi">
                            群組
                        </span>
                        <span class="menu_small_chi">
                            找群組, 開新群組
                        </span>
                    </span>
                </a>										     <!-- 特別設定width -->
                <!--<a href="/MyClass/Group/findGroup.php" class="menu_tabs_dropdown_link" id="find_group_link" style="width:99px;">找群組</a> 
                <a href="/MyClass/Group/createGroup.php" class="menu_tabs_dropdown_link" id="create_group_link" style="width:99px">開新群組</a>-->
                </li>
                <li id="event_tab" class="menu_tab">
                <a href="/MyClass/Event/findEvent.php"> <!-- 特別設定width, padding -->
                    <span class="menu_tab">
                        <span class="menu_big_chi">
                            活動
                        </span>
                        <span class="menu_small_chi">
                            找活動, 開新活動
                        </span>
                    </span>
                </a>										     <!-- 特別設定width -->
                <!--<a href="/MyClass/Event/findEvent.php" class="menu_tabs_dropdown_link" id="find_event_link" style="width:99px">找活動</a>
                <a href="/MyClass/Event/createEvent.php" class="menu_tabs_dropdown_link" id="create_event_link" style="width:99px">開新活動</a>-->
                </li>
                <li id="user_tab" class="menu_tab" style="width: 100px;">
                <a href="/MyClass/User/findUser.php">
                    <span class="menu_tab">
                        <span class="menu_big_chi">
                            用戶
                        </span>
                        <span class="menu_small_chi">
                            找其他用戶
                        </span>
                    </span>
                </a>
                </li>
                <li id="board_tab" class="menu_tab" style="width: 100px;">
                <a href="/MyClass/Board/findBoard.php">
                    <span class="menu_tab">
                        <span class="menu_big_chi">
                            討論版
                        </span>
                        <span class="menu_small_chi">
                            找討論版
                        </span>
                    </span>
                </a>
                </li>
            </ul>
            <ul class="dropdown">
<?php
if (isset($_SESSION['username'])) {
?>
                <li>
                <a href='/MyClass/User/logout.php'>登出</a>
                </li>
<?php
} else {
?>
                <li>
                <a href='/MyClass/User/registerUser.php'>註冊</a>
                </li>
                <li>
                <a href='/MyClass/User/login.php'>登入</a>
                </li>
<?php
}
?>

<?php
if (isset($_SESSION['username'])) {
?>
                <li>
                <a id='username_button' <?php echo (($_SESSION['sex'])=='男')?' class="boy-user-link" ':' class="girl-user-link" ';?> href='/MyClass/User/userMain.php'> <?php echo $_SESSION['username'] ?> </a>
                </li>
<?php
}
?>
            </ul>

<?php
if (isset($_SESSION['username'])) {
?>
            <a id='user_img' href='/MyClass/User/userMain.php'>
                <img <?php echo 'src="/MyClass/User/' . $_SESSION['username'] . '/head.jpg"' ?> alt='Arthur Chen' height="52" width="52">
            </a>
<?php
}
?>
        </div>
        </header>

<?php require_once('../define.php');

if (!isset($_SESSION)) {
	session_start();
}

// §R°£sessionÅÜŒÆ
$_SESSION['username'] = NULL;
$_SESSION['fullname'] = NULL;
$_SESSION['sex'] = NULL;

unset($_SESSION['username']);
unset($_SESSION['fullname']);
unset($_SESSION['sex']);
// ­«·s°õŠæindex.php
header("Location: ". HOME_PAGE);

?>

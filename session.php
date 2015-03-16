<?php

require_once 'smarty/configs/configSmarty.php';
require_once 'configs/configDatabase.php';


$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) {
    die("Unable to connect to MySQL: " . mysql_error());
}
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
session_start();
$user_check    = $_SESSION['login_user'];
$ses_sql       = mysql_query("select user_name from users where user_name = '$user_check'");
$row           = mysql_fetch_assoc($ses_sql);
$login_session = $row['user_name'];
if (!isset($login_session)) {
    mysql_close($db_server);
}
$smarty->assign('user_check', $user_check);

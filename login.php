<?php

require_once 'configs/configDatabase.php';
require_once 'smarty/configs/configSmarty.php';

$user = $_POST["username"];
$pass = ($_POST["password"]);

session_start();

if (!isset($_POST['submit'])) {
    if (empty($user) || empty($pass)) {
        $smarty->display('loginFormRequiredFields.tpl');
    } else {
        $db_server = mysql_connect($db_hostname, $db_username, $db_password);
        if (!$db_server) {
            die("Unable to connect to MySQL: " . mysql_error());
        }
        $user = stripslashes($user);
        $pass = stripslashes($pass);
        $user = mysql_real_escape_string($user);
        $pass = mysql_real_escape_string($pass);

        mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
        $query = mysql_query("select * from users where user_name ='$user' AND password='$pass'");
        $rows  = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $user;
            $smarty->assign('user', $user);
            $smarty->display('profile.tpl');
        } else {
            $smarty->display('wrongNamePassword.tpl');
        }
        mysql_close($db_server);
    }
}
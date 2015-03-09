<?php

require_once 'configs/config database.php';
require_once 'smarty/configs/smarty config.php';


session_start();

if (!isset($_POST['submit'])) {
    if (empty($user) || empty($pass)) {
        header('Location: loginform required fields.php');
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
            header('Location: profile.php');
        } else {
            header('Location: wrong name password.php');
        }
        mysql_close($db_server);
    }
}
<?php

require_once 'configs/configDatabase.php';
require_once 'smarty/configs/configSmarty.php';

$user      = $_POST["username"];
$pass      = ($_POST["password"]);
$conf_pass = ($_POST["conf_password"]);
$email     = $_POST['email'];

if (empty($user) || empty($pass) || empty($conf_pass) || empty($email)) {
    $smarty->display('fieldRegister.tpl');
} elseif ($pass != $conf_pass) {
    $smarty->display('confirmPasswordRegister.tpl');
} else {
    $db_server = mysql_connect($db_hostname, $db_username, $db_password);
    if (!$db_server) {
        die("Unable to connect to MySQL: " . mysql_error());
    }


    $user      = stripslashes($user);
    $pass      = stripslashes($pass);
    $conf_pass = stripslashes($pass);
    $user      = mysql_real_escape_string($user);
    $pass      = mysql_real_escape_string($pass);
    $conf_pass = mysql_real_escape_string($pass);


    mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
    $query = mysql_query("SELECT * FROM users WHERE user_name = '$user'");
    if (!$query)
        die("Database access failed: " . mysql_error());
    if (mysql_num_rows($query) >= 1) {
        $smarty->display('userExist.tpl');
    } else {


        $query  = "INSERT INTO users(user_name, password, email)"
                . "VALUES('$user', '$pass', '$email')";
        $result = mysql_query($query);
        if (!$result)
            die("Database access failed: " . mysql_error());
        else {
            $smarty->display('registered.tpl');
        }mysql_close($db_server);
    }
}
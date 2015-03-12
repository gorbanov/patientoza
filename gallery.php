<?php

require 'configs/config images.php';
require 'thumbnail function.php';
require_once 'smarty/configs/smarty config.php';
require_once 'configs/config database.php';



$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server)
    die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)or die("Unable to select database: " . mysql_error());
$query     = "SELECT * FROM pics ORDER BY id ";
$result    = mysql_query($query);
if (!$result)
    die("Database access failed: " . mysql_error());
while ($row       = mysql_fetch_assoc($result)) {

    $smarty->assign('pic_path', $pic_path . $row['pic']);
    $smarty->assign('thumbs', $thumbs . $row['pic']);

    //$smarty->assign('pics', $result);
}
$smarty->display('galler.tpl');

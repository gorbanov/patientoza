<?php

//ini_set("display_errors", TRUE);
require 'configs/configImages.php';
require 'thumbnailFunction.php';
require_once 'smarty/configs/configSmarty.php';
require_once 'configs/configDatabase.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server)
    die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)or die("Unable to select database: " . mysql_error());
$query     = "SELECT * FROM pics ORDER BY id";
$result    = mysql_query($query);
if (!$result)
    die("Database access failed: " . mysql_error());
mysql_close($db_server);

$smarty->assign('result', $result);
$smarty->assign('row', $row);
$smarty->assign('pic_path', $pic_path . $row['pic']);
$smarty->assign('thumbs', $thumbs . $row['pic']);
$smarty->display('gallery.tpl');

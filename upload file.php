<?php

require 'configs/config images.php';
require 'thumbnail function.php';
require_once 'smarty/configs/smarty config.php';
require_once 'configs/config database.php';


if (in_array($_FILES["file"]["type"], $allowed) && ($_FILES["file"]["size"] < 2000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } elseif (file_exists("Pics/" . $_FILES["file"]["name"])) {
        $smarty->assign('file_name', $file_name);
        $smarty->display('uploaded file exist.tpl');
    } else {
        $smarty->assign('file_name', $file_name);
        $smarty->display('uploaded file success.tpl');

        $db_server = mysql_connect($db_hostname, $db_username, $db_password);
        if (!$db_server)
            die("Unable to connect to MySQL: " . mysql_error());
        mysql_select_db($db_database)or die("Unable to select database: " . mysql_error());
        $query     = "INSERT INTO pics (pic, pic_path, thumbs) VALUES ('$file_name', '$pic_path', '$thumbs')";
        $result    = mysql_query($query);
        if (!$result)
            die("Database access failed: " . mysql_error());
        move_uploaded_file($_FILES["file"]["tmp_name"], "Pics/" . $_FILES["file"]["name"]);
    }
} else {
    $smarty->assign('file_name', $file_name);
    $smarty->display('uploaded file invalid.tpl');
}
createThumbnail($file_name);

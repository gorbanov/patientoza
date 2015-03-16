<?php

require 'configs/configImages.php';
require 'thumbnailFunction.php';
require_once 'smarty/configs/configSmarty.php';
require_once 'configs/configDatabase.php';


$file_name = $_FILES["file"]["name"];

if (in_array($_FILES["file"]["type"], $allowed_file_extensions) && ($_FILES["file"]["size"] < 2000000) && in_array($extension, $allowedExtensions)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } elseif (file_exists("Pics/" . $_FILES["file"]["name"])) {
        $smarty->assign('file_name', $file_name);
        $smarty->display('uploadedFileExist.tpl');
    } else {
        $smarty->assign('file_name', $file_name);
        $smarty->display('uploadedFileSuccess.tpl');

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
    $smarty->display('uploadedFileInvalid.tpl');
}
createThumbnail($file_name);

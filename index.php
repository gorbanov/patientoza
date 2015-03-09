<?php

require_once ('smarty/configs/smarty config.php');

include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
} else {
    $smarty->display('index.tpl');
}
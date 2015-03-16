<?php

require_once 'smarty/configs/configSmarty.php';

session_start();
if (session_destroy()) { // Destroying All Sessions
    $smarty->display('index.tpl'); // Redirecting To Home Page
}
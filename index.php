<?php

require_once ('smarty/configs/configSmarty.php');
require_once 'session.php';

if (isset($_SESSION['login_user'])) {
    $smarty->display('profile.tpl');
} else {
    $smarty->display('index.tpl');
}
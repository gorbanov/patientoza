<?php

require_once ('smarty/configs/smarty config.php');
include('session.php');

$smarty->assign('login_session', $login_session);

$smarty->display('profile.tpl');

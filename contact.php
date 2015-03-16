<?php

require_once ('smarty/configs/configSmarty.php');
require_once ('configs/configEmail.php');

$subject   = $_POST["subject"];
$message   = $_POST["message"];
$mailcheck = spamcheck($subject);

function spamcheck($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (isset($subject)) {

    if ($mailcheck == FALSE) {
        $smarty->display('invalidInputEmail.tpl');
        exit();
    } else {

        if (mail($to, $subject, $message)) {
            $smarty->display('emailSuccess.tpl');
            exit();
        } else {
            $smarty->display('failedEmail.tpl');
            exit();
        }
    }
}
$smarty->display('contact.tpl');

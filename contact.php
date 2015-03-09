<?php

require_once ('smarty/configs/smarty config.php');
require_once ('configs/config email.php');

function spamcheck($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (isset($_POST["subject"])) {

    if ($mailcheck == FALSE) {
        header('Location: invalid input email.php');
    } else {

        if (mail($to, $subject, $message)) {
            header('Location: email success.php');
        } else {
            header('Location: failed email.php');
        }
    }
}
$smarty->display('contact.tpl');

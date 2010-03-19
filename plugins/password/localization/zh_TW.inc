<?php

$labels = array();
$labels['changepasswd']  = '更改密碼';
$labels['curpasswd']  = '目前的密碼';
$labels['newpasswd']  = '新密碼';
$labels['confpasswd']  = '確認新密碼';

$messages = array();
$messages['nopassword'] = '請輸入新密碼';
$messages['nocurpassword'] = '請輸入目前的密碼';
$messages['passwordincorrect'] = '目前的密碼錯誤';
$messages['passwordinconsistency'] = '密碼不相符，請重新輸入';
$messages['crypterror'] = '無法更新密碼：無加密機制';
$messages['connecterror'] = '無法更新密碼：連線失敗';
$messages['internalerror'] = '無法更新密碼';
$messages['passwordshort'] = '您的密碼至少需 $length 個字元長';
$messages['passwordweak'] = '您的新密碼至少需含有一個數字與一個標點符號';

?>
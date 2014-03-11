<?php

$includepath=$_SERVER['DOCUMENT_ROOT'].'/engine';
require_once($includepath.'/config/te_config.php');
require_once($includepath.'/functions/dbconn.php');
require_once($includepath.'/functions/encrypt.php');
require_once($includepath.'/functions/selectrowbykey.php');
require_once($includepath.'/classes/user.php');
require_once($includepath.'/classes/order.php');
require_once($includepath.'/modules/user.php');
require_once($includepath.'/functions/sanitise.php');
require_once($includepath.'/functions/parsetojson.php');
$user=new User($_POST['userid']);
dbconn($DB);
$row=selectrowbykey('id', $_POST['reply'], 'te_orders');
$output=parseToJSON($user);
$msg=$_POST['msg'].'\n \n'.$user->managername.'\n'.$user->companyname.'\n'.$user->tel;
if(mail($row['email'], "Предложение по заказу на сайте Bridalweek", $msg, "Content-type: text/plain; charset=utf-8; ")){$result=1;} else {$result=0;}
echo '{"result": "'.$result.'"}';
?>
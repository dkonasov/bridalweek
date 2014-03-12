<?php

$includepath=$_SERVER['DOCUMENT_ROOT'].'/engine';
require_once($includepath.'/config/te_config.php');
require_once($includepath.'/functions/dbconn.php');
require_once($includepath.'/functions/sanitise.php');
require_once($includepath.'/functions/encrypt.php');
require_once($includepath.'/functions/selectrowbykey.php');
require_once($includepath.'/classes/user.php');
require_once($includepath.'/classes/order.php');
require_once($includepath.'/modules/user.php');
require_once($includepath.'/functions/parsetojson.php');
$user=new User($_POST['userid']);

if($_POST['lastid']=='default'){

dbconn('te_userdata');
$sql="SELECT * FROM `te_orders` WHERE `type` IN (".$user->keywords.") AND `region`='".$user->region."' ORDER BY `id` DESC LIMIT 5";
$r=mysql_query($sql) or die (mysql_error());
$output='[ ';
while($row=mysql_fetch_assoc($r)){

$output.=parseToJSON($row).', ';

}
$output=substr($output, 0, strlen($output)-2);
$output.=' ]';
echo $output;
} else {

dbconn('te_userdata');
$sql="SELECT * FROM `te_orders` WHERE `type` IN (".$user->keywords.") AND `id`<".$_POST['lastid']." AND `region`='".$user->region."' ORDER BY `id` DESC LIMIT 5";
$r=mysql_query($sql) or die (mysql_error());
$output='[ ';
while($row=mysql_fetch_assoc($r)){

$output.=parseToJSON($row).', ';

}
$output=substr($output, 0, strlen($output)-2);
$output.=' ]';
echo $output;

}

?>
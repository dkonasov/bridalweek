<?php
$includepath=$_SERVER['DOCUMENT_ROOT'].'/engine';
require_once($includepath.'/config/te_config.php');
require_once($includepath.'/functions/dbconn.php');
require_once($includepath.'/functions/sanitise.php');
require_once($includepath.'/functions/encrypt.php');
require_once($includepath.'/functions/selectrowbykey.php');
require_once($includepath.'/modules/user.php');
if(adduser($_POST['username'], $_POST['password'])){
$row=selectrowbykey('email', $_POST['username'], 'te_users');
$keywords=sanitise($_POST['keywords']);
$tel=sanitise($_POST['tel']);
$companyname=sanitise($_POST['companyname']);
$managername=sanitise($_POST['managername']);
$region=sanitise($_POST['region']);
$sql = "INSERT INTO `te_userdata` (`key`, `id`, `keywords`, `tel`, `companyname`, `managername`, `region`) VALUES (NULL, '".$row['id']."', '".$keywords."', '".$tel."', '".$companyname."', '".$managername."', '".$region."');";
mysql_query($sql) or die ('Errlor'.mysql_error());
echo 'ok';

} else {

echo 'fail';

}

?>
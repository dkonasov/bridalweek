<?php
$includepath=$_SERVER['DOCUMENT_ROOT'].'/engine';
require_once($includepath.'/config/te_config.php');
require_once($includepath.'/functions/dbconn.php');
dbconn($DB);
$sql="UPDATE `te_userdata` SET lastid='".$_POST['latestid']."' WHERE id='".$_POST['userid']."'";
mysql_query($sql) or die (mysql_error);

?>
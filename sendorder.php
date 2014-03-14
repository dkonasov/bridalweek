<?php

require_once('engine/config/te_config.php');
require_once('engine/functions/dbconn.php');
require_once('engine/functions/sanitise.php');
require_once('engine/classes/order.php');
require_once('engine/functions/selectrowbykey.php');
global $DB;
$order = new Order($_POST["tip"], $_POST["msg"], $_POST["email"], $_POST["showmail"], $_POST['region']);
$order->placeOrder();
if($_POST["savemail"]==1){
dbconn($DB);
$checkemail=selectrowbykey('email', $_POST["email"], 'te_broadcast');
if(count($checkemail)<2){
$email=sanitise($_POST["email"]);
$q="INSERT INTO `te_broadcast` (email) VALUES ('".$email."')";
$result = mysql_query($q)
    or die("Invalid query: " . mysql_error());
	}
}
echo ('Заявка отправлена!');
?>